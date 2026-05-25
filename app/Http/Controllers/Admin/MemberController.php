<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // List all members
    public function index(Request $request)
    {
        $status = $request->query('status');
        $members = Member::when($status, function ($query, $status) {
            return $query->where('status', $status);
        })->orderBy('created_at', 'desc')->paginate(20);
        
        $stats = [
            'total' => Member::count(),
            'approved' => Member::where('status', 'approved')->count(),
            'pending' => Member::where('status', 'pending')->count(),
            'deferred' => Member::where('status', 'deferred')->count(),
        ];
        
        return view('admin.members.index', compact('members', 'stats'));
    }
    
    // View single member
    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.members.show', compact('member'));
    }
    
    // Update member status
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,under_review,approved,rejected,deferred',
        ]);
        
        $member = Member::findOrFail($id);
        $member->status = $request->status;
        $member->save();
        
        return redirect()->back()->with('success', 'Member status updated successfully.');
    }
    
    // Delete member
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        
        return redirect()->route('admin.members.index')->with('success', 'Member deleted successfully.');
    }
    
    // Download member document (placeholder)
    public function download($id, $type)
    {
        // Implement document download logic here
        return redirect()->back()->with('error', 'Document not found.');
    }
}