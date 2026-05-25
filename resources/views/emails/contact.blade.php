<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div style="text-align: center; margin-bottom: 30px;">
            <img src="{{ asset('assets/images/logo.png') }}" alt="ATICC Logo" style="max-width: 180px;">
        </div>
        
        <h2 style="color: #031B4E;">New Contact Form Submission</h2>
        
        <div style="background: #F8F9FA; padding: 20px; border-radius: 8px; margin: 20px 0;">
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Subject:</strong> {{ $subject }}</p>
            <p><strong>Message:</strong></p>
            <p style="background: white; padding: 15px; border-radius: 6px; margin-top: 5px;">{{ nl2br(e($user_message)) }}</p>
        </div>
        
        <p style="font-size: 12px; color: #888; margin-top: 30px;">
            This message was sent from the ATICC Contact Form.
        </p>
    </div>
</body>
</html>