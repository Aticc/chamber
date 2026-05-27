<?php
// app/Http/Controllers/MembershipController.php

namespace App\Http\Controllers;

use App\Models\MembershipApplication;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class MembershipController extends Controller
{
    // Show the plans page
    public function plans()
    {
        return view('access-plans');
    }
    
    // Show the application form
    public function apply(Request $request)
    {
        $tier = $request->query('tier');
        $plan = $request->query('plan');
        $price = $request->query('price');
        
        return view('membership.apply', compact('tier', 'plan', 'price'));
    }
    
    // Submit the application
    public function submit(Request $request)
    {
        try {
            // Validation rules
            $rules = [
                'selected_tier' => 'required|in:tier_i,tier_ii,tier_iii',
                'tier_name' => 'required|string',
                'tier_price' => 'required|string',
                'legal_name' => 'required|string|max:255',
                'institution_type' => 'required|string',
                'country_registration' => 'required|string|max:255',
                'address' => 'required|string',
                'contact_name' => 'required|string|max:255',
                'contact_position' => 'required|string|max:255',
                'contact_email' => 'required|email|max:255',
                'contact_phone' => 'required|string|max:255',
                'authorized_status' => 'required|in:Yes,No',
                'primary_sector' => 'required|string',
                'verification_acknowledgement' => 'required|accepted',
                'signature' => 'required|string|max:255',
                'signature_date' => 'required|date',
            ];
            
            $validated = $request->validate($rules);
            
            // Handle file uploads
            $filePaths = [];
            $fileFields = ['incorporation_file', 'profile_file', 'address_file', 'id_file'];
            
            foreach ($fileFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '.' . $file->getClientOriginalExtension();
                    $path = $file->storeAs('membership_applications', $filename, 'public');
                    $filePaths[$field] = $path;
                }
            }
            
            // Create application
            $application = MembershipApplication::create([
                'selected_tier' => $request->selected_tier,
                'tier_name' => $request->tier_name,
                'tier_price' => $request->tier_price,
                'legal_name' => $request->legal_name,
                'institution_type' => $request->institution_type,
                'country_registration' => $request->country_registration,
                'registration_number' => $request->registration_number,
                'year_established' => $request->year_established,
                'website' => $request->website,
                'address' => $request->address,
                'operating_jurisdictions' => $request->operating_jurisdictions,
                'contact_name' => $request->contact_name,
                'contact_position' => $request->contact_position,
                'contact_email' => $request->contact_email,
                'contact_phone' => $request->contact_phone,
                'linkedin' => $request->linkedin,
                'authorized_status' => $request->authorized_status,
                'primary_sector' => $request->primary_sector,
                'trade_corridors' => json_encode($request->trade_corridors ?? []),
                'capacity' => $request->capacity,
                'strategic_interests' => json_encode($request->strategic_interests ?? []),
                'participation_objective' => $request->participation_objective,
                'seeking_opportunities' => json_encode($request->seeking_opportunities ?? []),
                'market_exposure' => $request->market_exposure,
                'readiness_status' => $request->readiness_status,
                'verification_acknowledgement' => $request->has('verification_acknowledgement'),
                'signature' => $request->signature,
                'signature_date' => $request->signature_date,
                'incorporation_file' => $filePaths['incorporation_file'] ?? null,
                'profile_file' => $filePaths['profile_file'] ?? null,
                'address_file' => $filePaths['address_file'] ?? null,
                'id_file' => $filePaths['id_file'] ?? null,
                'status' => 'pending',
            ]);
            
            // Send confirmation email
            try {
                $this->sendConfirmationEmail($application);
            } catch (\Exception $e) {
                Log::error('Failed to send confirmation email: ' . $e->getMessage());
            }
            
            return redirect()->route('membership.thankyou', ['id' => $application->id])
                ->with('success', 'Your application has been submitted successfully.');
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Membership submission error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }
    }
    
    // Thank you page
    public function thankyou($id)
    {
        $application = MembershipApplication::findOrFail($id);
        return view('membership.thankyou', compact('application'));
    }
    
    // Send confirmation email to applicant
    private function sendConfirmationEmail($application)
    {
        Mail::send('emails.membership_confirmation', ['application' => $application], function ($message) use ($application) {
            $message->to($application->contact_email, $application->contact_name)
                    ->subject('ATICC Membership Application Received - Reference #' . $application->id);
        });
    }
    
    // Send notification to admin
    private function sendAdminNotification($application)
    {
        $adminEmail = config('mail.admin_email', 'secretariat@aticchamber.org');
        Mail::send('emails.membership_admin_notification', ['application' => $application], function ($message) use ($adminEmail) {
            $message->to($adminEmail)
                    ->subject('New Membership Application - Reference #' . $application->id);
        });
    }
    
    // Admin: View all applications
    public function adminIndex(Request $request)
    {
        $status = $request->query('status');
        $applications = MembershipApplication::when($status, function ($query, $status) {
            return $query->where('status', $status);
        })->orderBy('created_at', 'desc')->paginate(20);
        
        $stats = [
            'total' => MembershipApplication::count(),
            'pending' => MembershipApplication::where('status', 'pending')->count(),
            'under_review' => MembershipApplication::where('status', 'under_review')->count(),
            'approved' => MembershipApplication::where('status', 'approved')->count(),
            'rejected' => MembershipApplication::where('status', 'rejected')->count(),
        ];
        
        return view('admin.membership.applications', compact('applications', 'stats'));
    }
    
    // Admin: View single application
    public function adminShow($id)
    {
        $application = MembershipApplication::findOrFail($id);
        return view('admin.membership.show', compact('application'));
    }
    
    // Admin: Update application status
    public function adminUpdateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,under_review,approved,rejected,deferred',
            'admin_notes' => 'nullable|string',
        ]);
        
        $application = MembershipApplication::findOrFail($id);
        $oldStatus = $application->status;
        $application->status = $request->status;
        $application->admin_notes = $request->admin_notes;
        $application->reviewed_at = now();
        $application->reviewed_by = auth()->id();
        $application->save();
        
        // Create member account when status changes to approved
        if ($request->status === 'approved' && $oldStatus !== 'approved') {
            Log::info('Creating member account for application: ' . $application->id);
            $result = $this->createMemberAccount($application);
            
            if ($result) {
                $member = $result['member'];
                $tempPassword = $result['password'];
                Log::info('Member account created successfully with ID: ' . $member->id);
                $this->sendApprovedEmail($application);
                $this->sendWelcomeEmail($application, $member, $tempPassword);
            } else {
                Log::error('Failed to create member account for application: ' . $application->id);
            }
        }
        
        // Send under review email
        if ($request->status === 'under_review' && $oldStatus !== 'under_review') {
            $this->sendUnderReviewEmail($application);
        }
        
        // Send rejected email
        if ($request->status === 'rejected' && $oldStatus !== 'rejected') {
            $this->sendRejectedEmail($application);
        }
        
        return redirect()->back()->with('success', 'Application status updated successfully.');
    }
    
    // Create member account from approved application
    private function createMemberAccount($application)
    {
        try {
            // Generate a temporary password
            $tempPassword = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 12);
            
            // Split contact name into first and last name
            $nameParts = explode(' ', $application->contact_name, 2);
            $firstName = $nameParts[0];
            $lastName = $nameParts[1] ?? '';
            
            // Check if member already exists
            $existingMember = Member::where('email', $application->contact_email)->first();
            if ($existingMember) {
                Log::info('Member already exists with email: ' . $application->contact_email);
                return $existingMember;
            }
            
            $member = Member::create([
                'org_name' => $application->legal_name,
                'org_type' => $application->institution_type,
                'registration_number' => $application->registration_number,
                'country' => $application->country_registration,
                'website' => $application->website,
                'first_name' => $firstName,
                'last_name' => $lastName,
                'position' => $application->contact_position,
                'email' => $application->contact_email,
                'phone' => $application->contact_phone,
                'selected_tier' => $application->selected_tier,
                'selected_amount' => $application->tier_price,
                'status' => 'approved',
                'membership_level' => $application->tier_name,
                'password' => bcrypt($tempPassword),
            ]);
            
            // Return both the member and the plain text password
            return ['member' => $member, 'password' => $tempPassword];
            
        } catch (\Exception $e) {
            Log::error('Error creating member account: ' . $e->getMessage());
            return null;
        }
    }
    
    // Send welcome email with credentials
    private function sendWelcomeEmail($application, $member, $tempPassword)
    {
        try {
            Mail::send('emails.member_welcome', [
                'application' => $application,
                'member' => $member,
                'tempPassword' => $tempPassword,
                'loginUrl' => route('member.login')
            ], function ($message) use ($application) {
                $message->to($application->contact_email, $application->contact_name)
                        ->subject('Welcome to ATICC - Your Member Portal Access');
            });
        } catch (\Exception $e) {
            Log::error('Failed to send welcome email: ' . $e->getMessage());
        }
    }
    
    // Send approved email
    private function sendApprovedEmail($application)
    {
        try {
            Mail::send('emails.membership_approved', ['application' => $application], function ($message) use ($application) {
                $message->to($application->contact_email, $application->contact_name)
                        ->subject('ATICC Membership Application Approved - Reference #' . $application->id);
            });
        } catch (\Exception $e) {
            Log::error('Failed to send approved email: ' . $e->getMessage());
        }
    }
    
    // Send rejected email
    private function sendRejectedEmail($application)
    {
        try {
            Mail::send('emails.membership_rejected', ['application' => $application], function ($message) use ($application) {
                $message->to($application->contact_email, $application->contact_name)
                        ->subject('ATICC Membership Application Update - Reference #' . $application->id);
            });
        } catch (\Exception $e) {
            Log::error('Failed to send rejected email: ' . $e->getMessage());
        }
    }
    
    // Send under review notification to applicant
    private function sendUnderReviewEmail($application)
    {
        try {
            Mail::send('emails.membership_under_review', ['application' => $application], function ($message) use ($application) {
                $message->to($application->contact_email, $application->contact_name)
                        ->subject('ATICC Membership Application Under Review - Reference #' . $application->id);
            });
        } catch (\Exception $e) {
            Log::error('Failed to send under review email: ' . $e->getMessage());
        }
    }
    
    // Admin: Download file
    public function adminDownloadFile($id, $field)
    {
        $application = MembershipApplication::findOrFail($id);
        $allowedFields = ['incorporation_file', 'profile_file', 'address_file', 'id_file'];
        
        if (!in_array($field, $allowedFields) || !$application->$field) {
            abort(404);
        }
        
        $path = storage_path('app/public/' . $application->$field);
        
        if (!file_exists($path)) {
            abort(404);
        }
        
        return response()->download($path);
    }
}