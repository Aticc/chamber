<!DOCTYPE html>
<html>
<head>
    <title>ATICC Submission Received</title>
</head>
<body style="font-family: 'Montserrat', Arial, sans-serif; line-height: 1.6; color: #041931;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div style="text-align: center; margin-bottom: 30px;">
            <img src="{{ asset('assets/images/ATICC FINAL LOGO  (2).png') }}" alt="ATICC Logo" style="max-width: 180px;">
        </div>
        
        <h2 style="color: #041931; font-weight: 700;">Thank You for Contacting ATICC</h2>
        
        <p>Dear {{ $representative }},</p>
        
        <p>We have received your submission and our team will review it shortly.</p>
        
        <div style="background: #F7F7F5; padding: 20px; border-radius: 2px; margin: 20px 0; border-left: 2px solid #C49A6C;">
            <p><strong>Submission Reference:</strong> {{ $classification_code }}</p>
            <p><strong>Engagement Type:</strong> {{ $classification }}</p>
            <p><strong>Institution:</strong> {{ $institution ?? 'Not provided' }}</p>
            <p><strong>Submission Date:</strong> {{ now()->format('F j, Y, g:i a') }}</p>
        </div>
        
        <h3 style="color: #041931;">What happens next?</h3>
        <ol style="margin-left: 20px;">
            <li>Our team will review your submission</li>
            <li>You will receive a response within 2-3 business days</li>
            <li>We may request additional information if needed</li>
        </ol>
        
        <p>If you have any urgent matters, please contact us directly at <a href="mailto:support@aticchamber.org" style="color: #C49A6C;">support@aticchamber.org</a>.</p>
        
        <p style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #D9DEE7; font-size: 12px; color: #7A8B9B;">
            &copy; {{ date('Y') }} ATICC. All rights reserved.
        </p>
    </div>
</body>
</html>