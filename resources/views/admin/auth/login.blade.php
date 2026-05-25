<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATICC Admin Login</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Optima', 'Segoe UI', sans-serif; background: #f5f6f8; height: 100vh; display: flex; justify-content: center; align-items: center; }
        .login-container { background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        .login-container h1 { text-align: center; margin-bottom: 30px; color: #0e0e0e; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 600; }
        .form-group input { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; }
        .login-btn { width: 100%; background: #17015e; color: white; padding: 12px; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; }
        .alert { background: #f8d7da; color: #721c24; padding: 12px; border-radius: 8px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        @if($errors->any())
            <div class="alert">Invalid credentials</div>
        @endif
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</body>
</html>