<!DOCTYPE html>
<html>
<head>
    <title>Opportunity Submission Received</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div style="text-align: center; margin-bottom: 30px;">
            <img src="{{ asset('assets/images/logo.png') }}" alt="ATICC Logo" style="max-width: 180px;">
        </div>
        
        <h2 style="color: #17015e;">Thank You for Your Submission</h2>
        
        <p>Dear {{ $name }},</p>
        
        <p>Thank you for submitting your opportunity to the Africa Trade & Investment Chamber of Commerce (ATICC).</p>
        
        <div style="background: #F8F9FA; padding: 15px; border-radius: 8px; margin: 20px 0;">
            <p><strong>Submission Type:</strong> {{ $opportunity_type }}</p>
            <p><strong>Submission Date:</strong> {{ now()->format('F j, Y, g:i a') }}</p>
        </div>
        
        <h3 style="color: #17015e;">What happens next?</h3>
        <ol>
            <li>Our investment team will review your submission</li>
            <li>You will receive an initial response within 5-7 business days</li>
            <li>We may request additional information if needed</li>
            <li>Qualified opportunities will be presented to our institutional network</li>
        </ol>
        
        <p>If you have any questions, please contact us at <a href="mailto:opportunities@aticchamber.org">opportunities@aticchamber.org</a>.</p>
        
        <p>Thank you for considering ATICC as your partner in African market access.</p>
        
        <p style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; font-size: 12px; color: #888;">
            &copy; {{ date('Y') }} ATICC. All rights reserved.
        </p>
    </div>
</body>
</html>