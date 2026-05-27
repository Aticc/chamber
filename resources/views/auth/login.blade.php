@extends('layouts.app')

@section('content')
@include('layouts.nav')

<div class="login-wrapper">
    <div class="login-container-split">
        <!-- Left Side - Image -->
        <div class="login-image">
            <div class="image-overlay">
                <div class="image-content">
                    <div class="image-logo">
                        <img src="{{ asset('assets/images/IMG_0963.PNG') }}" alt="ATICC Logo">
                    </div>
                    <h2>Africa Trade & Investment Chamber of Commerce</h2>
                    <p>Connecting institutional capital with verified African opportunities.</p>
                    <div class="image-features">
                        <div class="feature">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Verified Opportunities</span>
                        </div>
                        <div class="feature">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Institutional Strength</span>
                        </div>
                        <div class="feature">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Strategic Execution</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="login-form-section">
            <div class="login-form-container">
                <div class="login-header">
                    <h2>Welcome Back</h2>
                    <p>Sign in to access your ATICC account</p>
                </div>
                
                @if($errors->any())
                    <div class="alert alert-error">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        <div>
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                @endif
                
                <form method="POST" action="{{ route('member.login') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="input-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7A8B9B" stroke-width="1.5">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="you@example.com">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7A8B9B" stroke-width="1.5">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                            <input type="password" id="password" name="password" required placeholder="Enter your password">
                        </div>
                    </div>
                    
                    <div class="form-options">
                        <label class="checkbox">
                            <div class="custom-checkbox">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember"></label>
                            </div>
                            <span>Remember me</span>
                        </label>
                        <a href="#" class="forgot-link">Forgot password?</a>
                    </div>
                    
                    <button type="submit" class="login-btn">
                        <span>Sign In</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .login-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #F5F6F8;
    }
    .login-container-split {
        display: flex;
        width: 100%;
        min-height: 100vh;
        background: white;
        overflow: hidden;
    }

    /* Left Side - Image */
    .login-image {
        flex: 1;
        background: linear-gradient(135deg, #041931 0%, #041931 100%);
        position: relative;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px;
    }
    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #041931;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .image-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
        padding: 20px;
        max-width: 500px;
    }
    .image-logo {
        margin-bottom: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .image-logo img {
        width: 160px;
        height: auto;
        filter: brightness(0) invert(1);
    }
    .image-content h2 {
        font-size: 32px;
        margin-bottom: 15px;
        font-weight: 400;
        line-height: 1.3;
    }
    .image-content p {
        font-size: 16px;
        margin-bottom: 30px;
        opacity: 0.9;
        line-height: 1.6;
    }
    .image-features {
        text-align: left;
        display: inline-block;
    }
    .feature {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 15px;
        font-size: 14px;
    }
    .feature svg {
        flex-shrink: 0;
    }

    /* Right Side - Login Form */
    .login-form-section {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px;
        background: rgb(245, 245, 245);
        overflow-y: auto;
    }
    .login-form-container {
        width: 100%;
        max-width: 420px;
        background: white;
        border-radius: 32px;
        padding: 20px;
    }
    .login-header {
        text-align: center;
        margin-bottom: 30px;
    }
    .login-badge {
        width: 60px;
        height: 60px;
        background: rgba(23, 1, 94, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }
    .login-header h2 {
        font-size: 32px;
        color: #031B4E;
        margin-bottom: 8px;
        font-weight: 400;
    }
    .login-header p {
        font-size: 14px;
        color: #7A8B9B;
    }

    /* Form Elements */
    .form-group {
        margin-bottom: 24px;
    }
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        font-size: 14px;
        color: #031B4E;
    }
    .input-icon {
        display: flex;
        align-items: center;
        gap: 12px;
        border: 1.5px solid #E8EBED;
        border-radius: 12px;
        padding: 12px 16px;
        transition: all 0.2s ease;
        background: white;
    }
    .input-icon:focus-within {
        border-color: #031B4E;
        box-shadow: 0 0 0 3px rgba(23, 1, 94, 0.1);
    }
    .input-icon svg {
        flex-shrink: 0;
    }
    .input-icon input {
        flex: 1;
        border: none;
        outline: none;
        font-size: 14px;
        background: transparent;
    }
    .input-icon input::placeholder {
        color: #B0B8C2;
    }

    .form-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 28px;
    }
    .checkbox {
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
    }
    .custom-checkbox {
        position: relative;
        width: 18px;
        height: 18px;
    }
    .custom-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        width: 18px;
        height: 18px;
        margin: 0;
    }
    .custom-checkbox label {
        position: absolute;
        top: 0;
        left: 0;
        width: 18px;
        height: 18px;
        background: white;
        border: 2px solid #D0D5DD;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .custom-checkbox input:checked + label {
        background: #041931;
        border-color: #031B4E;
    }
    .custom-checkbox input:checked + label::after {
        content: '';
        position: absolute;
        left: 5px;
        top: 1px;
        width: 4px;
        height: 8px;
        border: solid white;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }
    .checkbox span {
        font-size: 13px;
        color: #4A5E72;
    }
    .forgot-link {
        font-size: 13px;
        color: #031B4E;
        text-decoration: none;
        font-weight: 500;
    }
    .forgot-link:hover {
        text-decoration: underline;
    }

    .login-btn {
        width: 100%;
        background: #041931;
        color: white;
        padding: 14px;
        border: none;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    .login-btn:hover {
        background: #1c154e;
        transform: translateY(-2px);
    }

    .register-link {
        text-align: center;
        margin-top: 30px;
        padding-top: 25px;
    }
    .register-link p {
        font-size: 14px;
        color: #4A5E72;
    }
    .register-link a {
        color: #031B4E;
        text-decoration: none;
        font-weight: 600;
    }
    .register-link a:hover {
        text-decoration: underline;
    }

    .alert-error {
        background: #FEF2F2;
        color: #DC2626;
        padding: 14px 16px;
        border-radius: 12px;
        margin-bottom: 24px;
        display: flex;
        align-items: flex-start;
        gap: 12px;
        border-left: 4px solid #DC2626;
    }
    .alert-error svg {
        flex-shrink: 0;
    }
    .alert-error p {
        margin: 0;
        font-size: 13px;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .login-container-split {
            flex-direction: column;
        }
        .login-image {
            min-height: 400px;
            padding: 40px;
        }
        .image-content h2 {
            font-size: 28px;
        }
        .login-form-section {
            padding: 50px 30px;
            min-height: auto;
        }
        .login-form-container {
            border-radius: 24px;
        }
    }

    @media (max-width: 768px) {
        .login-image {
            min-height: 350px;
            padding: 30px;
        }
        .image-logo img {
            width: 120px;
        }
        .image-content h2 {
            font-size: 24px;
        }
        .image-content p {
            font-size: 14px;
        }
        .image-features {
            display: none;
        }
        .login-form-section {
            padding: 40px 24px;
        }
        .login-header h2 {
            font-size: 28px;
        }
        .login-form-container {
            max-width: 100%;
            border-radius: 20px;
            padding: 15px;
        }
    }

    @media (max-width: 480px) {
        .login-image {
            min-height: 300px;
            padding: 20px;
        }
        .image-logo img {
            width: 100px;
        }
        .image-content h2 {
            font-size: 20px;
        }
        .login-form-section {
            padding: 30px 20px;
        }
        .login-header h2 {
            font-size: 24px;
        }
        .login-form-container {
            border-radius: 16px;
            padding: 10px;
        }
    }
</style>
@endsection