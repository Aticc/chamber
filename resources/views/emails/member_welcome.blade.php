<!DOCTYPE html>
<html>
<head>
    <title>Welcome to ATICC Member Portal</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div style="text-align: center; margin-bottom: 30px;">
            <img src="{{ asset('assets/images/ATICC FINAL LOGO  (2).png') }}" alt="ATICC Logo" style="max-width: 180px;">
        </div>
        
        <h2 style="color: #031B4E;">Welcome to ATICC</h2>
        
        <p>Dear {{ $application->contact_name }},</p>
        
        <p>Congratulations! Your membership application for <strong>{{ $application->tier_name }}</strong> has been approved.</p>
        
        <p>Your ATICC Member Portal account has been created. You can now access institutional resources, verification status, documentation, and opportunities.</p>
        
        <div style="background: #F8F9FA; padding: 20px; border-radius: 8px; margin: 20px 0;">
            <p><strong>Portal Login URL:</strong> <a href="{{ $loginUrl }}">{{ $loginUrl }}</a></p>
            <p><strong>Email:</strong> {{ $application->contact_email }}</p>
            <p><strong>Temporary Password:</strong> <code style="background: #e9ecef; padding: 4px 8px; border-radius: 4px;">{{ $tempPassword }}</code></p>
        </div>
        
        <p>For security reasons, please change your password after your first login.</p>
        
        <p>If you have any questions, please contact the Secretariat-General at <a href="mailto:secretariat@aticchamber.org">secretariat@aticchamber.org</a>.</p>
        
        <p>Welcome to the ATICC ecosystem.</p>
        
        <p style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; font-size: 12px; color: #888;">
            &copy; {{ date('Y') }} ATICC. All rights reserved.
        </p>
    </div>
</body>
</html>