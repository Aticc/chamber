<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('member')->check()) {
            return redirect()->route('member.login');
        }
        
        $member = Auth::guard('member')->user();
        
        // Only allow approved members to access portal
        if ($member->status !== 'approved') {
            Auth::guard('member')->logout();
            return redirect()->route('member.login')->withErrors(['email' => 'Your membership is not yet approved. Please contact the Secretariat.']);
        }
        
        return $next($request);
    }
}