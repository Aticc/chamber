<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Error' }} | ATICC</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ========= STICKY TOP NAVIGATION ========= */
        .top-nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 0 60px;
            height: 86px;
            background: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(11,31,58,0.05);
            z-index: 1000;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 0 0 rgba(0,0,0,0);
        }

        .nav-logo {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .nav-logo img {
            height: 100px;
            width: auto;
            display: block;
            transition: all 0.3s ease-in-out;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 48px;
        }

        .nav-menu {
            display: flex;
            gap: 36px;
            font-size: 13px;
            font-weight: 400;
            letter-spacing: 0.03em;
            color: #1A2C3E;
            text-transform: uppercase;
        }

        .nav-menu a {
            text-decoration: none;
            color: inherit;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .nav-menu a:hover {
            color: #0e0e0e;
        }

        .nav-btn {
            background-color: #0e0e0e;
            color: white;
            border: none;
            padding: 10px 26px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }

        .nav-btn:hover {
            background-color: #112b48;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(11, 31, 58, 0.2);
        }

        /* ========= ERROR CONTENT ========= */
        .error-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 120px 40px 60px;
            min-height: 100vh;
        }

        .error-content {
            max-width: 650px;
            width: 100%;
            text-align: center;
        }

        .error-icon {
            margin-bottom: 32px;
        }

        .error-code {
            font-size: 140px;
            font-weight: 300;
            color: #17015e;
            line-height: 1;
            margin-bottom: 24px;
            letter-spacing: -0.02em;
        }

        .error-title {
            font-size: 36px;
            font-weight: 300;
            color: #0e0e0e;
            margin-bottom: 16px;
        }

        .error-message {
            font-size: 16px;
            color: #3a4c5e;
            line-height: 1.6;
            margin-bottom: 40px;
            max-width: 450px;
            margin-left: auto;
            margin-right: auto;
        }

        .error-actions {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 48px;
        }

        .btn-primary, .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 32px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-decoration: none;
            text-transform: uppercase;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-primary {
            background: #17015e;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background: #2a0280;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(23, 1, 94, 0.15);
        }

        .btn-secondary {
            background: transparent;
            color: #0e0e0e;
            border: 1px solid #E8EBED;
        }

        .btn-secondary:hover {
            border-color: #17015e;
            color: #17015e;
            transform: translateY(-2px);
        }

        .help-text {
            font-size: 13px;
            color: #7A8B9B;
            border-top: 1px solid #E8EBED;
            padding-top: 32px;
        }

        .help-text a {
            color: #17015e;
            text-decoration: none;
        }

        .help-text a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background-color: #0e0e0e;
            color: white;
            padding: 60px 0 30px;
        }
        .footer-container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 0 80px;
        }
        .footer-grid {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 60px;
            margin-bottom: 50px;
        }
        .footer-col {
            flex: 1;
            min-width: 200px;
        }
        .footer-logo-img img {
            height: 50px;
            width: auto;
        }
        .footer-desc {
            font-size: 14px;
            line-height: 1.5;
            color: #CBD5E1;
            margin-top: 20px;
            max-width: 280px;
        }
        .footer-col h4 {
            font-size: 14px;
            letter-spacing: 0.1em;
            margin-bottom: 20px;
            font-weight: 300;
        }
        .footer-col p, .footer-col a {
            font-size: 13px;
            color: #CBD5E1;
            margin-bottom: 12px;
            text-decoration: none;
            display: block;
            transition: color 0.2s;
        }
        .footer-col a:hover {
            color: white;
        }
        .bottom-bar {
            border-top: 1px solid #2A4058;
            padding-top: 25px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            font-size: 12px;
            color: #9AABBB;
        }

        @media (max-width: 1100px) {
            .top-nav {
                padding: 0 30px;
            }
            .footer-container {
                padding: 0 40px;
            }
        }

        @media (max-width: 768px) {
            .top-nav {
                padding: 0 20px;
            }
            .nav-menu {
                gap: 10px;
                font-size: 9px;
            }
            .nav-right {
                gap: 12px;
            }
            .nav-btn {
                padding: 6px 14px;
                font-size: 10px;
            }
            .error-container {
                padding: 100px 20px 40px;
            }
            .error-code {
                font-size: 100px;
            }
            .error-title {
                font-size: 28px;
            }
            .error-message {
                font-size: 14px;
                padding: 0 10px;
            }
            .btn-primary, .btn-secondary {
                padding: 10px 20px;
                font-size: 11px;
            }
            .footer-container {
                padding: 0 20px;
            }
            .footer-grid {
                flex-direction: column;
                gap: 30px;
            }
            .bottom-bar {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
 

    <!-- Error Content -->
    <div class="error-container">
        <div class="error-content">
            <div class="error-icon">
                @php $code = $code ?? 500; @endphp
                @if($code == 404)
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" y1="8" x2="12" y2="12"/>
                        <line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                @elseif($code == 403)
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                @elseif($code == 401)
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
                        <path d="M12 2v4M12 22v-4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                    </svg>
                @elseif($code == 419)
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
                        <path d="M20 12v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h6"/>
                        <polyline points="18 8 22 12 18 16"/>
                        <line x1="22" y1="12" x2="12" y2="12"/>
                    </svg>
                @elseif($code == 429)
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                @else
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
                        <path d="M12 2a10 10 0 0 1 10 10c0 5.52-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"/>
                        <line x1="12" y1="8" x2="12" y2="12"/>
                        <line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                @endif
            </div>
            <div class="error-code">{{ $code }}</div>
            <h1 class="error-title">{{ $title ?? 'Something Went Wrong' }}</h1>
            <div class="error-message">{{ $message ?? 'An unexpected error occurred. Please try again later.' }}</div>
            <div class="error-actions">
                <a href="{{ url('/') }}" class="btn-primary">Back to Home →</a>
                <a href="javascript:history.back()" class="btn-secondary">Go Back</a>
            </div>
            <div class="help-text">
                <p>Need assistance? Contact <a href="mailto:support@aticchamber.org">support@aticchamber.org</a></p>
            </div>
        </div>
    </div>

  @include('layouts.footer')


    <script>
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.top-nav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
                document.body.classList.add('nav-shrunk');
            } else {
                nav.classList.remove('scrolled');
                document.body.classList.remove('nav-shrunk');
            }
        });
    </script>
</body>
</html>