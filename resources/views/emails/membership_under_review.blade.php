<!DOCTYPE html>
<html>
<head>
    <title>ATICC Membership Application Under Review</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div style="text-align: center; margin-bottom: 30px;">
            <img src="{{ asset('assets/images/logo.png') }}" alt="ATICC Logo" style="max-width: 180px;">
        </div>
        
        <h2 style="color: #17015e;">Application Under Review</h2>
        
        <p>Dear {{ $application->contact_name }},</p>
        
        <p>We are pleased to inform you that your membership application for the <span>{{ $application->tier_name }}</span> is now under review by our Secretariat-General.</p>
        
        <div style="background: #F8F9FA; padding: 15px; border-radius: 8px; margin: 20px 0;">
            <p><span>Application Reference #:</span> {{ $application->id }}</p>
            <p><span>Selected Tier:</span> {{ $application->tier_name }}</p>
            <p><span>Submission Date:</span> {{ $application->created_at->format('F j, Y') }}</p>
            <p><span>Review Start Date:</span> {{ now()->format('F j, Y') }}</p>
        </div>
        
        <h3 style="color: #17015e;">What happens next?</h3>
        <ol>
            <li>Our team will conduct a thorough review of your application</li>
            <li>We may contact you for additional information if needed</li>
            <li>You will receive a final decision within 5-7 business days</li>
            <li>Upon approval, you will receive onboarding instructions</li>
        </ol>
        
        <p>If you have any questions during the review process, please contact us at <a href="mailto:secretariat@aticchamber.org">secretariat@aticchamber.org</a>.</p>
        
        <p>Thank you for your patience and trust in ATICC.</p>
        
        <p style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; font-size: 12px; color: #888;">
            &copy; {{ date('Y') }} ATICC. All rights reserved.
        </p>
    </div>
</body>
</html>