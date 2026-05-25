<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ATICC Admin Portal - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #F0F2F5;
            color: #1A2C3E;
        }
        
        /* Admin Wrapper */
        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }
        
        /* ========= SIDEBAR ========= */
        .admin-sidebar {
            width: 280px;
            background: linear-gradient(180deg, #0B1F3A 0%, #0A1A32 100%);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: all 0.3s ease;
            z-index: 100;
        }
        
        .sidebar-header {
            padding: 28px 24px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
            margin-bottom: 20px;
        }
        
        .sidebar-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        
        .sidebar-logo-icon {
            width: 32px;
            height: 32px;
            background: #C49A6C;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0B1F3A;
            font-weight: 700;
            font-size: 18px;
        }
        
        .sidebar-logo-text {
            font-size: 18px;
            font-weight: 600;
            color: white;
            letter-spacing: 0.5px;
        }
        
        .sidebar-logo-text span {
            color: #C49A6C;
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
            color: rgba(255,255,255,0.4);
            padding: 0 12px;
            margin-bottom: 12px;
        }
        
        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            margin-bottom: 4px;
            color: rgba(255,255,255,0.7);
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
            background: rgba(255,255,255,0.08);
            color: white;
        }
        
        .nav-item.active {
            background: rgba(196,154,108,0.15);
            color: #C49A6C;
        }
        
        .nav-item.active svg {
            color: #C49A6C;
            opacity: 1;
        }
        
        /* ========= MAIN CONTENT ========= */
        .admin-main {
            flex: 1;
            margin-left: 280px;
        }
        
        /* Top Bar */
        .admin-topbar {
            background: white;
            padding: 0 32px;
            height: 70px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 99;
            border-bottom: 1px solid #E8ECEF;
            box-shadow: 0 1px 0 rgba(0,0,0,0.02);
        }
        
        .admin-user {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .admin-user-info {
            text-align: right;
        }
        
        .admin-user-name {
            font-size: 14px;
            font-weight: 600;
            color: #1A2C3E;
        }
        
        .admin-user-role {
            font-size: 11px;
            color: #7A8B9B;
            margin-top: 2px;
        }
        
        .admin-avatar {
            width: 42px;
            height: 42px;
            background: linear-gradient(135deg, #0B1F3A, #1A3A5C);
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
        }
        
        .logout-btn:hover {
            color: #DC3545;
        }
        
        /* Content Area */
        .admin-content {
            padding: 32px;
        }
        
        /* Alert Styles */
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
        
        .alert-error {
            background: #FFEBEE;
            color: #C62828;
            border-left: 4px solid #C62828;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .admin-sidebar {
                width: 80px;
            }
            .sidebar-logo-text,
            .nav-section-title,
            .nav-item span:last-child {
                display: none;
            }
            .admin-main {
                margin-left: 80px;
            }
            .nav-item {
                justify-content: center;
                padding: 12px;
            }
            .admin-topbar {
                padding: 0 20px;
            }
            .admin-content {
                padding: 20px;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="admin-wrapper">
        <!-- Sidebar -->
        <aside class="admin-sidebar">
            <div class="sidebar-header">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-logo">
                    <div class="sidebar-logo-icon">A</div>
                    <div class="sidebar-logo-text">ATICC<span>Admin</span></div>
                </a>
            </div>
            <nav class="sidebar-nav">
                <div class="nav-section">
                    <div class="nav-section-title">Main</div>
                    <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="3" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="14" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                    <a href="{{ route('admin.membership.applications') }}" class="nav-item {{ request()->routeIs('admin.membership.*') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <span>Applications</span>
                    </a>
                    <a href="{{ route('admin.members.index') }}" class="nav-item {{ request()->routeIs('admin.members.*') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                        <span>Members</span>
                    </a>
                    <!-- Events Navigation -->
                    <a href="{{ route('admin.events.index') }}" class="nav-item {{ request()->routeIs('admin.events.*') ? 'active' : '' }}">
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
                </div>
                <div class="nav-section">
                    <div class="nav-section-title">System</div>
                    <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
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
        
        <!-- Main Content -->
        <main class="admin-main">
            <div class="admin-topbar">
                <div class="admin-user">
                    <div class="admin-user-info">
                        <div class="admin-user-name">{{ auth()->guard('admin')->user()->name ?? 'Administrator' }}</div>
                        <div class="admin-user-role">System Administrator</div>
                    </div>
                    <div class="admin-avatar">
                        {{ substr(auth()->guard('admin')->user()->name ?? 'AD', 0, 2) }}
                    </div>
                </div>
            </div>
            <div class="admin-content">
                @if(session('success'))
                    <div class="alert alert-success">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-error">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        {{ session('error') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </main>
    </div>
    
    @stack('scripts')
</body>
</html>