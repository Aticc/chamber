<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if member is logged in via the 'member' guard
        if (!Auth::guard('member')->check()) {
            return redirect('/')->with('error', 'Please log in to access the member area.');
        }
        
        // Check if member status is approved
        $member = Auth::guard('member')->user();
        if ($member->status !== 'approved') {
            Auth::guard('member')->logout();
            return redirect('/')->with('error', 'Your membership is ' . $member->status . '. Please contact support for assistance.');
        }
        
        return $next($request);
    }
}