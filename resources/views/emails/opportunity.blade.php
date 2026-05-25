<!DOCTYPE html>
<html>
<head>
    <title>New Opportunity Submission</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div style="text-align: center; margin-bottom: 30px;">
            <img src="{{ asset('assets/images/logo.png') }}" alt="ATICC Logo" style="max-width: 180px;">
        </div>
        
        <h2 style="color: #031B4E;">New Opportunity Submission</h2>
        
        <div style="background: #F8F9FA; padding: 20px; border-radius: 8px; margin: 20px 0;">
            <p><strong>Submitted By:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Opportunity Type:</strong> {{ $opportunity_type }}</p>
            <p><strong>Description:</strong></p>
            <p style="background: white; padding: 15px; border-radius: 6px; margin-top: 5px;">{{ nl2br(e($description)) }}</p>
        </div>
        
        <p style="font-size: 12px; color: #888; margin-top: 30px;">
            This opportunity was submitted through the ATICC website.
        </p>
    </div>
</body>
</html>