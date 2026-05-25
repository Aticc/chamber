<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ATICC Member Portal - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #F5F7FA;
            color: #1A2C3E;
        }
        
        .member-wrapper {
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar */
        .member-sidebar {
            width: 280px;
            background: #FFFFFF;
            border-right: 1px solid #E8ECEF;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: all 0.3s ease;
            z-index: 100;
        }
        
        .sidebar-header {
            padding: 28px 24px;
            border-bottom: 1px solid #E8ECEF;
            margin-bottom: 20px;
        }
        
        .sidebar-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        
        .sidebar-logo-icon {
            width: 36px;
            height: 36px;
            background: #17015e;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 18px;
        }
        
        .sidebar-logo-text {
            font-size: 18px;
            font-weight: 600;
            color: #17015e;
            letter-spacing: 0.5px;
        }
        
        .sidebar-logo-text span {
            color: #C49A6C;
        }
        
        .org-name {
            font-size: 12px;
            color: #7A8B9B;
            margin-top: 10px;
            display: block;
        }
        
        .member-tier-badge {
            display: inline-block;
            background: #C49A6C;
            color: white;
            font-size: 10px;
            padding: 4px 10px;
            border-radius: 20px;
            margin-top: 8px;
        }
        
        .sidebar-nav {
            padding: 0 16px;
        }
        
        .nav-section {
            margin-bottom: 24px;
        }
        
        .nav-section-title {
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #7A8B9B;
            padding: 0 12px;
            margin-bottom: 12px;
        }
        
        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            margin-bottom: 4px;
            color: #5D6F7F;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.2s ease;
            font-size: 14px;
            font-weight: 500;
        }
        
        .nav-item svg {
            width: 20px;
            height: 20px;
            opacity: 0.7;
        }
        
        .nav-item:hover {
            background: #F5F7FA;
            color: #17015e;
        }
        
        .nav-item.active {
            background: rgba(23, 1, 94, 0.08);
            color: #17015e;
        }
        
        .nav-item.active svg {
            color: #17015e;
            opacity: 1;
        }
        
        /* Main Content */
        .member-main {
            flex: 1;
            margin-left: 280px;
        }
        
        /* Top Bar */
        .member-topbar {
            background: #FFFFFF;
            padding: 0 32px;
            height: 70px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 99;
            border-bottom: 1px solid #E8ECEF;
        }
        
        .member-user {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .member-user-info {
            text-align: right;
        }
        
        .member-user-name {
            font-size: 14px;
            font-weight: 600;
            color: #1A2C3E;
        }
        
        .member-user-tier {
            font-size: 11px;
            color: #C49A6C;
            margin-top: 2px;
        }
        
        .member-avatar {
            width: 42px;
            height: 42px;
            background: #17015e;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 16px;
        }
        
        .logout-btn {
            background: none;
            border: none;
            color: #7A8B9B;
            cursor: pointer;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: color 0.2s;
            padding: 8px 16px;
            border-radius: 8px;
        }
        
        .logout-btn:hover {
            background: #FEF2E8;
            color: #DC3545;
        }
        
        .member-content {
            padding: 32px;
        }
        
        .alert {
            padding: 16px 20px;
            border-radius: 12px;
            margin-bottom: 24px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .alert-success {
            background: #E8F5E9;
            color: #2E7D32;
            border-left: 4px solid #2E7D32;
        }
        
        @media (max-width: 768px) {
            .member-sidebar {
                width: 80px;
            }
            .sidebar-logo-text,
            .org-name,
            .member-tier-badge,
            .nav-section-title,
            .nav-item span:last-child {
                display: none;
            }
            .member-main {
                margin-left: 80px;
            }
            .nav-item {
                justify-content: center;
                padding: 12px;
            }
            .member-topbar {
                padding: 0 20px;
            }
            .member-content {
                padding: 20px;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="member-wrapper">
        <aside class="member-sidebar">
            <div class="sidebar-header">
                <a href="{{ route('member.dashboard') }}" class="sidebar-logo">
                    <div class="sidebar-logo-icon">A</div>
                    <div class="sidebar-logo-text">ATICC<span>Portal</span></div>
                </a>
                <div class="org-name">{{ auth()->guard('member')->user()->org_name ?? 'Member' }}</div>
                <div class="member-tier-badge">{{ auth()->guard('member')->user()->membership_level ?? 'Member' }}</div>
            </div>
            <nav class="sidebar-nav">
                <div class="nav-section">
                    <div class="nav-section-title">Main</div>
                    <a href="{{ route('member.dashboard') }}" class="nav-item {{ request()->routeIs('member.dashboard') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="3" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="14" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                    
                    <!-- Events Page Link -->
                    <a href="{{ route('member.events') }}" class="nav-item {{ request()->routeIs('member.events') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/>
                            <line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                            <circle cx="12" cy="15" r="1"/>
                            <circle cx="16" cy="15" r="1"/>
                            <circle cx="8" cy="15" r="1"/>
                        </svg>
                        <span>Events</span>
                    </a>
                    
                    <!-- Tier I Dashboard - Only visible to Tier I members -->
                    @if(auth()->guard('member')->user()->selected_tier == 'tier_i' || auth()->guard('member')->user()->membership_level == 'Tier I: Institutional Members')
                    <a href="{{ route('member.tier1') }}" class="nav-item {{ request()->routeIs('member.tier1') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v6l4 2"/>
                        </svg>
                        <span>Tier I Portal</span>
                    </a>
                    @endif
                    
                    <!-- Tier II Dashboard - Only visible to Tier II members -->
                    @if(auth()->guard('member')->user()->selected_tier == 'tier_ii' || auth()->guard('member')->user()->membership_level == 'Tier II: Strategic Corporate Partners')
                    <a href="{{ route('member.tier2') }}" class="nav-item {{ request()->routeIs('member.tier2') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M20 12V8H4v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2"/>
                            <polyline points="22 4 20 6 20 12"/>
                        </svg>
                        <span>Tier II Portal</span>
                    </a>
                    @endif
                    
                    <!-- Tier III Dashboard - Only visible to Tier III members -->
                    @if(auth()->guard('member')->user()->selected_tier == 'tier_iii' || auth()->guard('member')->user()->membership_level == 'Tier III: Institutional & Institutional Partners')
                    <a href="{{ route('member.tier3') }}" class="nav-item {{ request()->routeIs('member.tier3') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                        </svg>
                        <span>Tier III Portal</span>
                    </a>
                    @endif
                    
                    <a href="{{ route('member.profile') }}" class="nav-item {{ request()->routeIs('member.profile') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                        <span>Profile</span>
                    </a>
                </div>
                <div class="nav-section">
                    <div class="nav-section-title">Account</div>
                    <form action="{{ route('member.logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="nav-item" style="width: 100%; text-align: left; background: none; cursor: pointer;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                                <polyline points="16 17 21 12 16 7"/>
                                <line x1="21" y1="12" x2="9" y2="12"/>
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </nav>
        </aside>
        
        <main class="member-main">
            <div class="member-topbar">
                <div class="member-user">
                    <div class="member-user-info">
                        <div class="member-user-name">{{ auth()->guard('member')->user()->first_name ?? '' }} {{ auth()->guard('member')->user()->last_name ?? '' }}</div>
                        <div class="member-user-tier">{{ auth()->guard('member')->user()->membership_level ?? 'Member' }}</div>
                    </div>
                    <div class="member-avatar">
                        {{ substr(auth()->guard('member')->user()->first_name ?? 'M', 0, 1) }}{{ substr(auth()->guard('member')->user()->last_name ?? '', 0, 1) }}
                    </div>
                </div>
            </div>
            <div class="member-content">
                @if(session('success'))
                    <div class="alert alert-success">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>