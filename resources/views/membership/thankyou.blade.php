@extends('layouts.app')

@section('content')
@include('layouts.nav')

<div class="thankyou-hero">
    <div class="thankyou-content">
        <div class="success-icon">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
        </div>
        <h1>Application Submitted</h1>
        <p>Thank you for applying for institutional membership with ATICC.</p>
        <div class="divider"></div>
        <div class="info-card">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.5">
                <circle cx="12" cy="12" r="10"/>
                <path d="M12 16v-4M12 8h.01"/>
            </svg>
            <p>Your application has been received and is pending review by our membership committee.</p>
        </div>
        <div class="info-card">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.5">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                <polyline points="22,6 12,13 2,6"/>
            </svg>
            <p>You will receive an email notification once your application has been approved.</p>
        </div>
        <div class="info-card">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.5">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
            <p>Once approved, you can access your member dashboard directly through your account.</p>
        </div>
        <div class="button-group">
            <a href="/" class="home-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                Return to Home
            </a>
            <a href="{{ route('membership.apply') }}" class="status-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4v16h16"/>
                    <path d="M20 4L12 12M20 4H12M20 4v8"/>
                </svg>
                Submit Another Application
            </a>
        </div>
    </div>
</div>

<!-- ===== BOTTOM NAVIGATION BAR FOR MOBILE (APP-STYLE) ===== -->
<div class="bottom-nav">
    <a href="/" class="bottom-nav-item">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <rect x="3" y="3" width="7" height="7"/>
            <rect x="14" y="3" width="7" height="7"/>
            <rect x="14" y="14" width="7" height="7"/>
            <rect x="3" y="14" width="7" height="7"/>
        </svg>
        <span>Home</span>
    </a>
    <a href="#" class="bottom-nav-item">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
        </svg>
        <span>Resources</span>
    </a>
    <a href="{{ route('event') }}" class="bottom-nav-item">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
            <line x1="16" y1="2" x2="16" y2="6"/>
            <line x1="8" y1="2" x2="8" y2="6"/>
            <line x1="3" y1="10" x2="21" y2="10"/>
        </svg>
        <span>Events</span>
    </a>
    <a href="{{ route('membership.apply') }}" class="bottom-nav-item">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"/>
            <path d="M9 3v18M15 3v18M3 9h18M3 15h18"/>
        </svg>
        <span>Membership</span>
    </a>
    <a href="{{ route('contact') }}" class="bottom-nav-item">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.574 2.81.7A2 2 0 0 1 22 16.92z"/>
        </svg>
        <span>Support</span>
    </a>
</div>

<style>
    .thankyou-hero {
        min-height: calc(100vh - 100px);
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #F5F6F8 0%, #EDEFF2 100%);
        padding: 40px;
        padding-bottom: 100px;
    }
    .thankyou-content {
        text-align: center;
        max-width: 550px;
        width: 100%;
        padding: 50px 40px;
        background: white;
        border-radius: 28px;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.08);
        border: 1px solid #E8EBED;
    }
    .success-icon {
        width: 90px;
        height: 90px;
        background: linear-gradient(135deg, #041931 0%, #031B4E 100%);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
        box-shadow: 0 10px 25px rgba(23, 1, 94, 0.2);
    }
    .thankyou-content h1 {
        font-size: 32px;
        margin-bottom: 12px;
        color: #031B4E;
        font-weight: 700;
    }
    .thankyou-content > p {
        font-size: 16px;
        color: #2E4156;
        margin-bottom: 20px;
        line-height: 1.6;
    }
    .divider {
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #041931, #C49A6C);
        margin: 25px auto;
        border-radius: 3px;
    }
    .info-card {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        background: #F8F9FA;
        padding: 16px 20px;
        border-radius: 16px;
        margin-bottom: 16px;
        text-align: left;
        border: 1px solid #E8EBED;
        transition: all 0.2s ease;
    }
    .info-card:hover {
        transform: translateX(5px);
        border-color: #031B4E;
    }
    .info-card svg {
        flex-shrink: 0;
        margin-top: 2px;
    }
    .info-card p {
        font-size: 14px;
        color: #4A5E72;
        margin: 0;
        line-height: 1.5;
    }
    .button-group {
        display: flex;
        gap: 16px;
        justify-content: center;
        margin-top: 35px;
    }
    .home-btn, .status-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 28px;
        text-decoration: none;
        border-radius: 40px;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .home-btn {
        background: #041931;
        color: white;
        border: none;
        box-shadow: 0 2px 8px rgba(23, 1, 94, 0.2);
    }
    .home-btn:hover {
        background: #031B4E;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(23, 1, 94, 0.25);
    }
    .status-btn {
        background: transparent;
        color: #031B4E;
        border: 1.5px solid #041931;
    }
    .status-btn:hover {
        background: rgba(23, 1, 94, 0.05);
        transform: translateY(-2px);
    }
    .home-btn:active, .status-btn:active {
        transform: translateY(0);
    }

    /* ===== BOTTOM NAVIGATION BAR STYLES (APP-STYLE) ===== */
    .bottom-nav {
        display: none;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(10px);
        border-top: 1px solid #E8EBED;
        padding: 10px 20px 20px;
        justify-content: space-around;
        align-items: center;
        z-index: 1000;
        box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.05);
    }
    
    .bottom-nav-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4px;
        text-decoration: none;
        color: #7A8B9B;
        font-size: 11px;
        font-weight: 400;
        transition: all 0.2s ease;
        padding: 8px 12px;
        border-radius: 12px;
    }
    
    .bottom-nav-item svg {
        stroke: #7A8B9B;
        transition: all 0.2s ease;
    }
    
    .bottom-nav-item:hover {
        color: #031B4E;
        background: #F5F6F8;
    }
    
    .bottom-nav-item:hover svg {
        stroke: #041931;
    }
    
    .bottom-nav-item.active {
        color: #031B4E;
    }
    
    .bottom-nav-item.active svg {
        stroke: #041931;
    }
    
    .bottom-nav-item span {
        font-size: 10px;
        font-weight: 400;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .thankyou-hero {
            padding: 20px;
            padding-bottom: 100px;
            min-height: calc(100vh - 80px);
        }
        .thankyou-content {
            padding: 35px 25px;
            border-radius: 24px;
        }
        .success-icon {
            width: 70px;
            height: 70px;
        }
        .success-icon svg {
            width: 36px;
            height: 36px;
        }
        .thankyou-content h1 {
            font-size: 26px;
        }
        .thankyou-content > p {
            font-size: 14px;
        }
        .info-card {
            padding: 14px 16px;
        }
        .info-card p {
            font-size: 13px;
        }
        .button-group {
            flex-direction: column;
            gap: 12px;
            margin-top: 30px;
        }
        .home-btn, .status-btn {
            justify-content: center;
            padding: 12px 20px;
        }
        
        /* Show bottom navigation on mobile */
        .bottom-nav {
            display: flex;
        }
    }
    
    @media (max-width: 480px) {
        .thankyou-hero {
            padding: 16px;
            padding-bottom: 90px;
        }
        .thankyou-content {
            padding: 28px 20px;
            border-radius: 20px;
        }
        .success-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 20px;
        }
        .success-icon svg {
            width: 30px;
            height: 30px;
        }
        .thankyou-content h1 {
            font-size: 24px;
        }
        .bottom-nav {
            padding: 8px 16px 16px;
        }
        .bottom-nav-item {
            padding: 6px 8px;
        }
        .bottom-nav-item svg {
            width: 20px;
            height: 20px;
        }
    }
</style>

<script>
// Bottom nav active state handling
document.querySelectorAll('.bottom-nav-item').forEach(item => {
    const link = item.getAttribute('href');
    if (link && window.location.pathname === link) {
        item.classList.add('active');
    }
    
    item.addEventListener('click', function(e) {
        document.querySelectorAll('.bottom-nav-item').forEach(nav => nav.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>

@endsection