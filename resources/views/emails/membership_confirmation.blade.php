{{-- resources/views/emails/membership_confirmation.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <title>ATICC Membership Application Received</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div style="text-align: center; margin-bottom: 30px;">
            <img src="{{ asset('assets/images/logo.png') }}" alt="ATICC Logo" style="max-width: 180px;">
        </div>
        <h2 style="color: #17015e;">Application Received</h2>
        <p>Dear {{ $application->contact_name }},</p>
        <p>Thank you for submitting your membership accession application to the Africa Trade & Investment Chamber of Commerce (ATICC).</p>
        <p><span>Application Reference #:</span> {{ $application->id }}</p>
        <p><span>Selected Tier:</span> {{ $application->tier_name }}</p>
        <p><span>Submission Date:</span> {{ $application->created_at->format('F j, Y') }}</p>
        
        <h3 style="color: #17015e; margin-top: 25px;">Next Steps</h3>
        <ol>
            <li>Our Secretariat-General will review your application</li>
            <li>You will receive an update within 5-7 business days</li>
            <li>Additional documentation may be requested</li>
            <li>Upon approval, you will receive onboarding instructions</li>
        </ol>
        
        <p>If you have any questions, please contact us at <a href="mailto:secretariat@aticchamber.org">secretariat@aticchamber.org</a>.</p>
        
        <p style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; font-size: 12px; color: #888;">
            &copy; {{ date('Y') }} ATICC. All rights reserved.
        </p>
    </div>
</body>
</html>