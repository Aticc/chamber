<!DOCTYPE html>
<html>
<head>
    <title>Welcome to ATICC Member Portal</title>
</head>
<body style="font-family: 'Montserrat', Arial, sans-serif; line-height: 1.6; color: #041931;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div style="text-align: center; margin-bottom: 30px;">
            <img src="{{ asset('assets/images/ATICC FINAL LOGO  (2).png') }}" alt="ATICC Logo" style="max-width: 180px;">
        </div>
        
        <h2 style="color: #041931;">Welcome to ATICC</h2>
        
        <p>Dear {{ $application->contact_name }},</p>
        
        <p>Congratulations! Your membership application for <strong>{{ $application->tier_name }}</strong> has been approved.</p>
        
        <p>Your ATICC Member Portal account has been created. You can now access institutional resources, verification status, documentation, and opportunities.</p>
        
        <div style="background: #F7F7F5; padding: 20px; border-radius: 2px; margin: 20px 0; border-left: 2px solid #C49A6C;">
            <p><strong>Portal Login URL:</strong> <a href="{{ $loginUrl }}" style="color: #C49A6C;">{{ $loginUrl }}</a></p>
            <p><strong>Email:</strong> {{ $application->contact_email }}</p>
            <p><strong>Temporary Password:</strong> <code style="background: #D9DEE7; padding: 4px 8px; border-radius: 2px;">{{ $tempPassword }}</code></p>
        </div>
        
        <h3 style="color: #041931;">Next Steps:</h3>
        <ol style="margin-left: 20px;">
            <li>Click the login link above</li>
            <li>Enter your email and the temporary password provided</li>
            <li>You will be prompted to change your password</li>
            <li>Complete your member profile</li>
        </ol>
        
        <p>For security reasons, please change your password after your first login.</p>
        
        <p>If you have any questions, please contact the Secretariat-General at <a href="mailto:secretariat@aticchamber.org" style: #C49A6C;">secretariat@aticchamber.org</a>.</p>
        
        <p>Welcome to the ATICC ecosystem.</p>
        
        <p style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #D9DEE7; font-size: 12px; color: #7A8B9B;">
            &copy; {{ date('Y') }} ATICC. All rights reserved.
        </p>
    </div>
</body>
</html>