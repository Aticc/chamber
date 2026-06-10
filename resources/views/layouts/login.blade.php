@extends('layouts.app')

@section('content')

<div class="member-login-container">
    <div class="member-login-card">
        <div class="login-header">
            <h1>Member Portal</h1>
            <p>Secure access for verified ATICC members</p>
        </div>
        
        @if($errors->any())
            <div class="alert alert-error">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        
        <form method="POST" action="{{ route('member.login.submit') }}">
            @csrf
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Login to Portal →</button>
        </form>
        
        <div class="login-footer">
            <p>Need assistance? Contact the Secretariat-General at <a href="mailto:secretariat@aticchamber.org">secretariat@aticchamber.org</a></p>
        </div>
    </div>
</div>

<style>
.member-login-container {
    min-height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
    background: #F5F6F8;
}

.member-login-card {
    max-width: 450px;
    width: 100%;
    background: white;
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.08);
}

.login-header {
    text-align: center;
    margin-bottom: 30px;
}

.login-header h1 {
    font-size: 28px;
    color: #031B4E;
    margin-bottom: 8px;
}

.login-header p {
    font-size: 14px;
    color: #5D6F7F;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-size: 13px;
    font-weight: 400;
    color: #1A2C3E;
    margin-bottom: 8px;
}

.form-group input {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid #E8EBED;
    border-radius: 12px;
    font-size: 14px;
}

.form-group input:focus {
    outline: none;
    border-color: #031B4E;
    box-shadow: 0 0 0 3px rgba(23,1,94,0.1);
}

.login-btn {
    width: 100%;
    background: #041931;
    color: white;
    border: none;
    padding: 14px;
    border-radius: 40px;
    font-size: 14px;
    font-weight: 400;
    cursor: pointer;
    transition: all 0.3s ease;
}

.login-btn:hover {
    background: #031B4E;
    transform: translateY(-2px);
}

.alert-error {
    background: #FEF2E8;
    color: #dc3545;
    padding: 12px;
    border-radius: 8px;
    margin-bottom: 20px;
    font-size: 13px;
}

.login-footer {
    margin-top: 25px;
    text-align: center;
    font-size: 12px;
    color: #7A8B9B;
}

.login-footer a {
    color: #031B4E;
    text-decoration: none;
}
</style>
@endsection