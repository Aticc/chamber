<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    // Send contact form email
    public function sendContact(Request $request)
    {
        $request->validate([
            'representative' => 'required|string|max:255',
            'institution' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'classification' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        try {
            // Map classification codes to readable names
            $classificationMap = [
                '101-G' => 'General Institutional & Secretariat Coordination',
                '202-S' => 'Strategic Partnerships & Bilateral Engagements',
                '303-I' => 'Capital Deployment & Investment Engagement',
                '404-T' => 'Trade Corridor & Cross-Border Coordination',
                '505-M' => 'Membership & Institutional Access',
                '606-V' => 'Verification & Compliance Services',
                '707-E' => 'Events & Institutional Engagements',
                '808-C' => 'Media Relations & Public Communications',
                '909-X' => 'Technical Support & Systems Coordination',
            ];

            $classificationName = $classificationMap[$request->classification] ?? $request->classification;

            $data = [
                'representative' => $request->representative,
                'institution' => $request->institution,
                'email' => $request->email,
                'phone' => $request->phone,
                'classification' => $classificationName,
                'classification_code' => $request->classification,
                'user_message' => $request->message,
            ];

            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->to('support@aticchamber.org', 'ATICC Secretariat')
                        ->subject('Contact Form: ' . $data['classification'])
                        ->replyTo($data['email'], $data['representative']);
            });

            return redirect()->back()->with('success', 'Thank you for your submission. Our team will review and respond within 2-3 business days.');

        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error sending your message. Please try again or contact us directly at support@aticchamber.org.');
        }
    }

    // Send opportunity submission email
    public function sendOpportunity(Request $request)
    {
        $request->validate([
            'opp_name' => 'required|string|max:255',
            'opp_email' => 'required|email|max:255',
            'opp_type' => 'required|string|max:255',
            'opp_description' => 'required|string|min:20',
        ]);

        try {
            $data = [
                'name' => $request->opp_name,
                'email' => $request->opp_email,
                'opportunity_type' => $request->opp_type,
                'description' => $request->opp_description,
            ];

            Mail::send('emails.opportunity', $data, function ($message) use ($data) {
                $message->to('tugahustle@gmail.com', 'ATICC Investment Team')
                        ->subject('Opportunity Submission: ' . $data['opportunity_type'])
                        ->replyTo($data['email'], $data['name']);
            });

            // Also send confirmation to the submitter
            Mail::send('emails.opportunity_confirmation', $data, function ($message) use ($data) {
                $message->to($data['email'], $data['name'])
                        ->subject('ATICC Opportunity Submission Received');
            });

            return redirect()->back()->with('success_opp', 'Your opportunity has been submitted successfully. Our team will review it and contact you within 5-7 business days.');

        } catch (\Exception $e) {
            Log::error('Opportunity form error: ' . $e->getMessage());
            return redirect()->back()->with('error_opp', 'There was an error submitting your opportunity. Please try again or email us directly at opportunities@aticchamber.org.');
        }
    }
}