<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\MembershipApplication;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_applications' => MembershipApplication::count(),
            'pending_applications' => MembershipApplication::where('status', 'pending')->count(),
            'under_review_applications' => MembershipApplication::where('status', 'under_review')->count(),
            'approved_applications' => MembershipApplication::where('status', 'approved')->count(),
            'rejected_applications' => MembershipApplication::where('status', 'rejected')->count(),
            'total_members' => Member::count(),
            'active_members' => Member::where('status', 'approved')->count(),
            'recent_applications' => MembershipApplication::orderBy('created_at', 'desc')->limit(10)->get(),
            'recent_members' => Member::orderBy('created_at', 'desc')->limit(10)->get(),
        ];
        
        return view('admin.dashboard', compact('stats'));
    }

    /**
     * Login as a member (Admin only)
     * This allows admin to impersonate a member and view their dashboard
     */
    public function loginAsMember($id)
    {
        $member = Member::findOrFail($id);
        
        // Only allow login for approved members
        if ($member->status !== 'approved') {
            return redirect()->back()->with('error', 'Only approved members can be logged in. This member status is: ' . $member->status);
        }
        
        // Store admin ID in session to return later
        session(['impersonating_admin_id' => auth()->guard('admin')->id()]);
        
        // Login as the member
        auth()->guard('member')->login($member);
        
        return redirect()->route('member.dashboard')->with('success', 'You are now logged in as ' . $member->org_name . '. To return to admin, logout from member area.');
    }
    
    /**
     * Return to admin dashboard after impersonating a member
     */
    public function stopImpersonating()
    {
        $adminId = session('impersonating_admin_id');
        
        // Logout from member guard
        auth()->guard('member')->logout();
        
        // Clear impersonation session
        session()->forget('impersonating_admin_id');
        
        // Login back to admin
        if ($adminId) {
            $admin = \App\Models\Admin::find($adminId);
            if ($admin) {
                auth()->guard('admin')->login($admin);
                return redirect()->route('admin.dashboard')->with('success', 'Returned to admin dashboard.');
            }
        }
        
        return redirect()->route('admin.login')->with('success', 'Returned to admin panel. Please log in again.');
    }
}