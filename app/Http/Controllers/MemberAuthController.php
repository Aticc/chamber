<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\TierBenefit;
use App\Models\StrategicOpportunity;


class MemberAuthController extends Controller
{
    // Show member login form
    public function showLoginForm()
    {
        return view('member.login');
    }
    

    // Handle member login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        
        if (Auth::guard('member')->attempt($credentials)) {
            $member = Auth::guard('member')->user();
            
            // Only allow approved members to login
            if ($member->status !== 'approved') {
                Auth::guard('member')->logout();
                return back()->withErrors(['email' => 'Your membership is not yet approved. Please contact the Secretariat.']);
            }
            
            return redirect()->intended(route('member.dashboard'));
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Show member dashboard (main overview)
    public function dashboard()
    {
        $member = Auth::guard('member')->user();
        return view('membership.dashboard', compact('member'));
    }

    // Tier I Dashboard - Institutional Members (SMEs)
    public function tier1Dashboard()
    {
        $member = Auth::guard('member')->user();
        
        // Check if member has access to Tier I
        if ($member->selected_tier != 'tier_i' && $member->membership_level != 'Tier I: Institutional Members') {
            return redirect()->route('member.dashboard')->with('error', 'You do not have access to this portal.');
        }
        
        return view('membership.tiers.tier1', compact('member'));
    }

    // Tier II Dashboard - Strategic Corporate Partners
public function tier2Dashboard()
{
    $member = Auth::guard('member')->user();
    
    // Check if member has access to Tier II
    if ($member->selected_tier != 'tier_ii' && $member->membership_level != 'Tier II: Strategic Corporate Partners') {
        return redirect()->route('member.dashboard')->with('error', 'You do not have access to this portal.');
    }
    
    // Fetch dynamic data
    $benefits = TierBenefit::forTier('tier_ii')->get();
    $opportunities = StrategicOpportunity::forTier('tier_ii')->byCategory('opportunity')->get();
    $deals = StrategicOpportunity::forTier('tier_ii')->byCategory('deal')->get();
    $events = StrategicOpportunity::forTier('tier_ii')->byCategory('event')->orderBy('event_date')->get();
    
    return view('membership.tiers.tier2', compact('member', 'benefits', 'opportunities', 'deals', 'events'));
}

    // Tier III Dashboard - Institutional & Institutional Partners
    public function tier3Dashboard()
    {
        $member = Auth::guard('member')->user();
        
        // Check if member has access to Tier III
        if ($member->selected_tier != 'tier_iii' && $member->membership_level != 'Tier III: Institutional & Institutional Partners') {
            return redirect()->route('member.dashboard')->with('error', 'You do not have access to this portal.');
        }
        
        return view('membership.tiers.tier3', compact('member'));
    }

    // Show member profile
    public function profile()
    {
        $member = Auth::guard('member')->user();
        return view('membership.profile', compact('member'));
    }

    // Update member profile
    public function updateProfile(Request $request)
    {
        $member = Auth::guard('member')->user();
        
        $request->validate([
            'phone' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
        ]);
        
        $member->update($request->only(['phone', 'position']));
        
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }


// Add to MemberAuthController.php
public function events()
{
    $member = Auth::guard('member')->user();
    
    $upcomingEvents = Event::where('status', 'published')
        ->where('is_past', false)
        ->where('end_date', '>=', now())
        ->orderBy('start_date', 'asc')
        ->get();
    
    $pastEvents = Event::where('status', 'published')
        ->where('is_past', true)
        ->orderBy('start_date', 'desc')
        ->limit(6)
        ->get();
    
    $missions = Event::where('status', 'published')
        ->where('event_type', 'mission')
        ->where('is_past', false)
        ->orderBy('start_date', 'asc')
        ->get();
    
    return view('membership.events', compact('member', 'upcomingEvents', 'pastEvents', 'missions'));
}
    
    // Handle member logout
    public function logout()
    {
        Auth::guard('member')->logout();
        return redirect()->route('member.login');
    }
}