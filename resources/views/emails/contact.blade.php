<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body style="font-family: 'Montserrat', Arial, sans-serif; line-height: 1.6; color: #041931;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div style="text-align: center; margin-bottom: 30px;">
            <img src="{{ asset('assets/images/ATICC FINAL LOGO  (2).png') }}" alt="ATICC Logo" style="max-width: 180px;">
        </div>
        
        <h2 style="color: #041931;">New Contact Form Submission</h2>
        
        <div style="background: #F7F7F5; padding: 20px; border-radius: 2px; margin: 20px 0;">
            <p><strong>Legal Entity Representative:</strong> {{ $representative }}</p>
            <p><strong>Registering Institution:</strong> {{ $institution ?? 'Not provided' }}</p>
            <p><strong>Corporate Electronic Address:</strong> {{ $email }}</p>
            <p><strong>Telecommunications Contact Number:</strong> {{ $phone ?? 'Not provided' }}</p>
            <p><strong>Engagement Classification:</strong> {{ $classification }} ({{ $classification_code }})</p>
            <p><strong>Submission Brief:</strong></p>
            <p style="background: white; padding: 15px; border-radius: 2px; margin-top: 5px;">{{ nl2br(e($user_message)) }}</p>
        </div>
        
        <p style="font-size: 12px; color: #7A8B9B; margin-top: 30px;">
            This message was sent from the ATICC Contact Form.
        </p>
    </div>
</body>
</html>