@extends('layouts.app')

@section('content')

<div class="dashboard-container">
    <!-- Welcome Section -->
    <div class="welcome-section">
        <div class="welcome-content">
            <div class="welcome-text">
                <h1>Welcome back, <span class="highlight">{{ Auth::user()->name }}</span>!</h1>
                <p>Your ATICC dashboard provides access to resources, events, and institutional opportunities.</p>
            </div>
            <div class="datetime-display">
                <div class="time-display">
                    <span class="time-hours" id="currentHours">--</span>
                    <span class="time-sep">:</span>
                    <span class="time-minutes" id="currentMinutes">--</span>
                    <span class="time-sep">:</span>
                    <span class="time-seconds" id="currentSeconds">--</span>
                </div>
                <div class="date-display">
                    <span class="date-weekday" id="currentWeekday"></span>
                    <span class="date-day" id="currentDay"></span>
                    <span class="date-month" id="currentMonth"></span>
                    <span class="date-year" id="currentYear"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M20 12V8H4v4M12 4v4M4 4h16v16H4z"/>
                    <path d="M8 20v-8h8v8"/>
                </svg>
            </div>
            <div class="stat-info">
                <h3>Member Since</h3>
                <p class="stat-value">{{ Auth::user()->created_at->format('M d, Y') }}</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <circle cx="12" cy="8" r="4"/>
                    <path d="M5 20v-2a7 7 0 0 1 14 0v2"/>
                </svg>
            </div>
            <div class="stat-info">
                <h3>Account Status</h3>
                <p class="stat-value status-active">Active</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                </svg>
            </div>
            <div class="stat-info">
                <h3>Last Login</h3>
                <p class="stat-value">{{ Auth::user()->updated_at->diffForHumans() }}</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M12 8v4l3 3M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/>
                </svg>
            </div>
            <div class="stat-info">
                <h3>Membership</h3>
                <p class="stat-value">Institutional</p>
            </div>
        </div>
    </div>

    <!-- Main Dashboard Grid -->
    <div class="dashboard-grid">
        <!-- Resources Section -->
        <div class="dashboard-card resources-card">
            <div class="card-header">
                <h3>
                    <svg class="card-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                    </svg>
                    Resources & Insights
                </h3>
                <a href="#" class="view-all">View all →</a>
            </div>
            <div class="card-content">
                <ul class="resource-list">
                    <li>
                        <span class="resource-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <polyline points="14 2 14 8 20 8"/>
                            </svg>
                        </span>
                        <div class="resource-info">
                            <a href="#">ATICC Quarterly Market Report Q1 2025</a>
                            <span class="resource-date">Updated 2 days ago</span>
                        </div>
                    </li>
                    <li>
                        <span class="resource-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M21 12a9 9 0 0 1-9 9m9-9a9 9 0 0 0-9-9m9 9H3m9 9a9 9 0 0 1-9-9m9 9c1.66 0 3-4 3-9s-1.34-9-3-9m0 18c-1.66 0-3-4-3-9s1.34-9 3-9"/>
                            </svg>
                        </span>
                        <div class="resource-info">
                            <a href="#">African Investment Outlook 2025</a>
                            <span class="resource-date">Updated 1 week ago</span>
                        </div>
                    </li>
                    <li>
                        <span class="resource-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M2 12h20M12 2v20M6 6l12 12M6 18L18 6"/>
                            </svg>
                        </span>
                        <div class="resource-info">
                            <a href="#">Trade Corridor Development Guide</a>
                            <span class="resource-date">Updated 2 weeks ago</span>
                        </div>
                    </li>
                    <li>
                        <span class="resource-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M12 6v6l4 2M12 2a10 10 0 1 0 10 10"/>
                            </svg>
                        </span>
                        <div class="resource-info">
                            <a href="#">ATICC Trade Academy - Course Catalog</a>
                            <span class="resource-date">Updated 3 weeks ago</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Upcoming Events Section -->
        <div class="dashboard-card events-card">
            <div class="card-header">
                <h3>
                    <svg class="card-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                    Upcoming Events
                </h3>
                <a href="{{ route('event') }}" class="view-all">View all →</a>
            </div>
            <div class="card-content">
                <div class="event-item">
                    <div class="event-date-badge">
                        <span class="event-month">JUN</span>
                        <span class="event-day">15</span>
                    </div>
                    <div class="event-info">
                        <h4>ATICC Institutional Summit 2025</h4>
                        <p>London, United Kingdom</p>
                        <span class="event-status">Registration Open</span>
                    </div>
                </div>
                <div class="event-item">
                    <div class="event-date-badge">
                        <span class="event-month">JUL</span>
                        <span class="event-day">10</span>
                    </div>
                    <div class="event-info">
                        <h4>West Africa Trade Mission</h4>
                        <p>Accra, Lagos, Abidjan</p>
                        <span class="event-status upcoming">Applications Open</span>
                    </div>
                </div>
                <div class="event-item">
                    <div class="event-date-badge">
                        <span class="event-month">SEP</span>
                        <span class="event-day">22</span>
                    </div>
                    <div class="event-info">
                        <h4>East Africa Investment Forum</h4>
                        <p>Nairobi, Kenya</p>
                        <span class="event-status upcoming">Coming Soon</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Membership & Transaction Section -->
        <div class="dashboard-card membership-card">
            <div class="membership-banner">
                <img src="{{ asset('assets/images/ATICC image .png') }}" alt="ATICC Membership" class="membership-banner-img">
                <div class="banner-overlay">
                    <div class="banner-content">
                        <h4>Institutional Membership</h4>
                        <p>Complete your payment to activate full access</p>
                    </div>
                </div>
            </div>
            <div class="card-header">
                <h3>
                    <svg class="card-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"/>
                        <path d="M9 3v18M15 3v18M3 9h18M3 15h18"/>
                    </svg>
                    Membership & Payment
                </h3>
            </div>
            <div class="card-content">
                <!-- Fee Display -->
                <div class="fee-section">
                    <div class="fee-amounts">
                        <div class="fee-option">
                            <span class="fee-currency">USD</span>
                            <span class="fee-price">$10,000</span>
                            <span class="fee-period">/ annum</span>
                        </div>
                        <div class="fee-divider">OR</div>
                        <div class="fee-option">
                            <span class="fee-currency">NGN</span>
                            <span class="fee-price">₦15,500,000</span>
                            <span class="fee-period">/ annum</span>
                        </div>
                    </div>
                    <div class="exchange-rate">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#7A8B9B" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        <span>Exchange Rate: 1 USD = 1,550 NGN</span>
                    </div>
                </div>

                <!-- Payment Methods -->
                <div class="payment-methods">
                    <div class="payment-method-title">Select Payment Method</div>
                    <div class="payment-options">
                        <div class="payment-option" data-method="card">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.5">
                                <path d="M21 4H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"/>
                                <line x1="1" y1="10" x2="23" y2="10"/>
                            </svg>
                            <span>Credit/Debit Card</span>
                        </div>
                        <div class="payment-option" data-method="bank">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.5">
                                <rect x="2" y="6" width="20" height="16" rx="2"/>
                                <line x1="2" y1="10" x2="22" y2="10"/>
                                <line x1="6" y1="14" x2="8" y2="14"/>
                                <line x1="10" y1="14" x2="18" y2="14"/>
                            </svg>
                            <span>Bank Transfer</span>
                        </div>
                        <div class="payment-option" data-method="wallet">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.5">
                                <path d="M20 12V8H4v4M12 4v4M4 4h16v16H4z"/>
                                <path d="M8 20v-8h8v8"/>
                            </svg>
                            <span>Digital Wallet</span>
                        </div>
                    </div>
                </div>

                <!-- Bank Transfer Details -->
                <div class="bank-details" id="bankDetails" style="display: none;">
                    <div class="bank-info">
                        <h4>Bank Transfer Information</h4>
                        <div class="bank-row">
                            <span class="bank-label">Bank Name:</span>
                            <span class="bank-value">First Bank of Nigeria</span>
                        </div>
                        <div class="bank-row">
                            <span class="bank-label">Account Name:</span>
                            <span class="bank-value">ATICC Institutional Fund</span>
                        </div>
                        <div class="bank-row">
                            <span class="bank-label">Account Number:</span>
                            <span class="bank-value">2034567890</span>
                        </div>
                        <div class="bank-row">
                            <span class="bank-label">Sort Code:</span>
                            <span class="bank-value">011234567</span>
                        </div>
                        <div class="bank-row">
                            <span class="bank-label">Swift Code:</span>
                            <span class="bank-value">FBNINGLA</span>
                        </div>
                        <div class="bank-note">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#C49A6C" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M12 16v-4M12 8h.01"/>
                            </svg>
                            <span>Please use your membership ID as reference when making payment</span>
                        </div>
                    </div>
                </div>

                <!-- Card Payment Form -->
                <div class="card-details" id="cardDetails" style="display: none;">
                    <div class="card-form">
                        <h4>Card Information</h4>
                        <div class="form-group">
                            <label>Card Number</label>
                            <input type="text" placeholder="1234 5678 9012 3456">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Expiry Date</label>
                                <input type="text" placeholder="MM/YY">
                            </div>
                            <div class="form-group">
                                <label>CVV</label>
                                <input type="text" placeholder="123">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Cardholder Name</label>
                            <input type="text" placeholder="John Doe">
                        </div>
                    </div>
                </div>

                <!-- Digital Wallet Details -->
                <div class="wallet-details" id="walletDetails" style="display: none;">
                    <div class="wallet-info">
                        <h4>Digital Wallet Options</h4>
                        <div class="wallet-options">
                            <div class="wallet-item">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M8 12h8M12 8v8"/>
                                </svg>
                                <span>PayPal</span>
                            </div>
                            <div class="wallet-item">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.5">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                                <span>Paystack</span>
                            </div>
                            <div class="wallet-item">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.5">
                                    <path d="M3 9l9-6 9 6-9 6-9-6z"/>
                                    <path d="M3 15l9 6 9-6"/>
                                </svg>
                                <span>Flutterwave</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transaction Summary -->
                <div class="transaction-summary">
                    <div class="summary-row">
                        <span>Membership Fee:</span>
                        <span class="summary-amount" id="summaryAmount">$10,000 USD</span>
                    </div>
                    <div class="summary-row">
                        <span>Processing Fee:</span>
                        <span>$0.00</span>
                    </div>
                    <div class="summary-row total">
                        <span>Total Due:</span>
                        <span class="summary-amount" id="totalAmount">$10,000 USD</span>
                    </div>
                </div>

                <button class="pay-btn" id="payBtn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                    </svg>
                    Pay Now
                </button>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="dashboard-card actions-card">
            <div class="card-header">
                <h3>
                    <svg class="card-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                    Quick Actions
                </h3>
            </div>
            <div class="card-content">
                <div class="action-buttons">
                    <a href="#" class="action-btn">
                        <span class="action-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.574 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </span>
                        <span>Contact Support</span>
                    </a>
                    <a href="#" class="action-btn">
                        <span class="action-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                        </span>
                        <span>Update Profile</span>
                    </a>
                    <a href="#" class="action-btn">
                        <span class="action-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                            </svg>
                        </span>
                        <span>Notification Settings</span>
                    </a>
                    <a href="#" class="action-btn">
                        <span class="action-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                            </svg>
                        </span>
                        <span>Resource Library</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity Section -->
    <div class="recent-activity">
        <div class="section-header">
            <h3>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <circle cx="12" cy="12" r="10"/>
                    <polyline points="12 6 12 12 16 14"/>
                </svg>
                Recent Activity
            </h3>
            <a href="#">View history →</a>
        </div>
        <div class="activity-timeline">
            <div class="activity-item">
                <div class="activity-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                </div>
                <div class="activity-details">
                    <p>You joined ATICC</p>
                    <span class="activity-time">{{ Auth::user()->created_at->diffForHumans() }}</span>
                </div>
            </div>
            <div class="activity-item">
                <div class="activity-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M22 2L15 9M22 2l-7 7M22 2v6M22 2h-6M15 9l-3 3"/>
                        <path d="M20 12v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h6"/>
                    </svg>
                </div>
                <div class="activity-details">
                    <p>Welcome email sent</p>
                    <span class="activity-time">{{ Auth::user()->created_at->diffForHumans() }}</span>
                </div>
            </div>
            <div class="activity-item">
                <div class="activity-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                </div>
                <div class="activity-details">
                    <p>Last login</p>
                    <span class="activity-time">{{ Auth::user()->updated_at->diffForHumans() }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.bottom')

<style>
    .dashboard-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 40px 80px;
        padding-bottom: 100px;
    }

    /* Welcome Section */
    .welcome-section {
        background: linear-gradient(135deg, #041931 0%, #041931 100%);
        border-radius: 24px;
        padding: 40px;
        margin-bottom: 40px;
        color: white;
    }
    .welcome-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }
    .welcome-text h1 {
        font-size: 32px;
        margin-bottom: 12px;
    }
    .welcome-text .highlight {
        color: #FFD700;
    }
    .welcome-text p {
        color: rgba(255,255,255,0.8);
        font-size: 16px;
    }

    /* Datetime Display */
    .datetime-display {
        text-align: right;
    }
    .time-display {
        font-family: 'Monaco', 'Courier New', monospace;
        font-size: 28px;
        font-weight: 600;
        color: #FFD700;
        letter-spacing: 1px;
        opacity: 0.95;
    }
    .time-hours, .time-minutes, .time-seconds {
        font-size: 28px;
        font-weight: 600;
        line-height: 1;
        min-width: 38px;
        text-align: center;
        display: inline-block;
    }
    .time-sep {
        font-size: 24px;
        font-weight: 600;
        margin: 0 2px;
        display: inline-block;
    }
    .date-display {
        font-size: 11px;
        font-weight: 400;
        color: rgba(255,255,255,0.7);
        letter-spacing: 0.5px;
        margin-top: 4px;
    }
    .date-weekday, .date-day, .date-month, .date-year {
        display: inline-block;
    }
    .date-weekday::after {
        content: ',';
        margin-right: 3px;
    }
    .date-day::after {
        content: ' ';
        margin-right: 2px;
    }
    .date-month::after {
        content: ' ';
        margin-right: 2px;
    }

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
        margin-bottom: 40px;
    }
    .stat-card {
        background: white;
        border-radius: 20px;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .stat-icon {
        width: 55px;
        height: 55px;
        background: #F5F6F8;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0e0e0e;
    }
    .stat-info h3 {
        font-size: 13px;
        color: #7A8B9B;
        margin-bottom: 5px;
        font-weight: 400;
    }
    .stat-value {
        font-size: 16px;
        font-weight: 600;
        color: #0e0e0e;
    }
    .status-active {
        color: #28a745;
    }

    /* Dashboard Grid */
    .dashboard-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        margin-bottom: 40px;
    }
    .dashboard-card {
        background: white;
        border-radius: 20px;
        border: 1px solid #f0f0f0;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .dashboard-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }
    .card-header {
        padding: 20px 25px;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .card-header h3 {
        font-size: 18px;
        font-weight: 600;
        color: #0e0e0e;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .card-icon {
        color: #0e0e0e;
    }
    .view-all {
        font-size: 13px;
        color: #0e0e0e;
        text-decoration: none;
    }
    .card-content {
        padding: 20px 25px;
    }

    /* Membership Banner */
    .membership-banner {
        position: relative;
        height: 140px;
        overflow: hidden;
    }
    .membership-banner-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(11,31,58,0.9) 0%, rgba(11,31,58,0.7) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .banner-content h4 {
        color: white;
        font-size: 20px;
        margin-bottom: 5px;
    }
    .banner-content p {
        color: rgba(255,255,255,0.8);
        font-size: 13px;
    }

    /* Resource List */
    .resource-list {
        list-style: none;
    }
    .resource-list li {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 12px 0;
        border-bottom: 1px solid #f5f5f5;
    }
    .resource-list li:last-child {
        border-bottom: none;
    }
    .resource-icon {
        width: 32px;
        height: 32px;
        background: #F5F6F8;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0e0e0e;
    }
    .resource-info {
        flex: 1;
    }
    .resource-info a {
        display: block;
        color: #0e0e0e;
        text-decoration: none;
        font-weight: 400;
        margin-bottom: 4px;
    }
    .resource-info a:hover {
        color: #0e0e0e;
    }
    .resource-date {
        font-size: 12px;
        color: #7A8B9B;
    }

    /* Events */
    .event-item {
        display: flex;
        gap: 15px;
        padding: 12px 0;
        border-bottom: 1px solid #f5f5f5;
    }
    .event-item:last-child {
        border-bottom: none;
    }
    .event-date-badge {
        background: #F5F6F8;
        border-radius: 12px;
        text-align: center;
        min-width: 60px;
        padding: 8px;
    }
    .event-month {
        display: block;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        color: #0e0e0e;
    }
    .event-day {
        display: block;
        font-size: 20px;
        font-weight: 700;
        color: #0e0e0e;
    }
    .event-info h4 {
        font-size: 15px;
        margin-bottom: 4px;
        color: #0e0e0e;
    }
    .event-info p {
        font-size: 12px;
        color: #7A8B9B;
        margin-bottom: 6px;
    }
    .event-status {
        font-size: 11px;
        color: #28a745;
        font-weight: 600;
    }
    .event-status.upcoming {
        color: #ffc107;
    }

    /* Benefits List */
    .benefits-list {
        list-style: none;
        margin-bottom: 20px;
    }
    .benefits-list li {
        padding: 8px 0;
        color: #4A5E72;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* ===== MEMBERSHIP & PAYMENT STYLES ===== */
    .fee-section {
        background: #F8F9FA;
        border-radius: 16px;
        padding: 20px;
        margin-bottom: 20px;
        text-align: center;
    }
    .fee-amounts {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    .fee-option {
        text-align: center;
    }
    .fee-currency {
        display: block;
        font-size: 12px;
        color: #7A8B9B;
        letter-spacing: 1px;
    }
    .fee-price {
        font-size: 28px;
        font-weight: 700;
        color: #031B4E;
    }
    .fee-period {
        font-size: 11px;
        color: #7A8B9B;
    }
    .fee-divider {
        font-size: 14px;
        font-weight: 600;
        color: #C49A6C;
    }
    .exchange-rate {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        margin-top: 12px;
        padding-top: 12px;
        border-top: 1px solid #E8EBED;
        font-size: 11px;
        color: #7A8B9B;
    }

    .payment-methods {
        margin-bottom: 20px;
    }
    .payment-method-title {
        font-size: 13px;
        font-weight: 600;
        color: #2E4156;
        margin-bottom: 12px;
    }
    .payment-options {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }
    .payment-option {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px;
        border: 1.5px solid #E8EBED;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.2s ease;
        background: white;
    }
    .payment-option:hover, .payment-option.active {
        border-color: #031B4E;
        background: rgba(23, 1, 94, 0.05);
    }
    .payment-option span {
        font-size: 13px;
        font-weight: 400;
        color: #031B4E;
    }

    .bank-details, .card-details, .wallet-details {
        margin: 20px 0;
        padding: 16px;
        background: #F8F9FA;
        border-radius: 12px;
    }
    .bank-info h4, .card-form h4, .wallet-info h4 {
        font-size: 14px;
        margin-bottom: 12px;
        color: #031B4E;
    }
    .bank-row {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px solid #E8EBED;
        font-size: 13px;
    }
    .bank-label {
        color: #7A8B9B;
    }
    .bank-value {
        font-weight: 600;
        color: #2E4156;
    }
    .bank-note {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 12px;
        padding: 10px;
        background: #FEF2E8;
        border-radius: 8px;
        font-size: 11px;
        color: #C49A6C;
    }
    .card-form .form-group {
        margin-bottom: 12px;
    }
    .card-form .form-group label {
        font-size: 12px;
        margin-bottom: 4px;
    }
    .card-form .form-group input {
        padding: 10px;
        font-size: 13px;
    }
    .card-form .form-row {
        display: flex;
        gap: 12px;
    }
    .wallet-options {
        display: flex;
        gap: 16px;
        justify-content: center;
    }
    .wallet-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        padding: 12px;
        border: 1px solid #E8EBED;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .wallet-item:hover {
        border-color: #031B4E;
    }
    .wallet-item span {
        font-size: 12px;
        color: #2E4156;
    }

    .transaction-summary {
        margin: 20px 0;
        padding: 16px;
        background: #F8F9FA;
        border-radius: 12px;
    }
    .summary-row {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        font-size: 13px;
        color: #4A5E72;
    }
    .summary-row.total {
        border-top: 1px solid #E8EBED;
        margin-top: 8px;
        padding-top: 12px;
        font-weight: 700;
        color: #031B4E;
        font-size: 16px;
    }
    .summary-amount {
        font-weight: 700;
    }

    .pay-btn {
        width: 100%;
        background: #041931;
        color: white;
        padding: 14px;
        border: none;
        border-radius: 12px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    .pay-btn:hover {
        background: #031B4E;
        transform: translateY(-2px);
    }

    /* Quick Actions */
    .action-buttons {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }
    .action-btn {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px;
        background: #F5F6F8;
        border-radius: 12px;
        text-decoration: none;
        color: #0e0e0e;
        transition: all 0.3s ease;
    }
    .action-btn:hover {
        background: #e8e9ed;
        transform: translateY(-2px);
        color: #0e0e0e;
    }
    .action-icon {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Recent Activity */
    .recent-activity {
        background: #F5F6F8;
        border-radius: 20px;
        padding: 25px;
    }
    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    .section-header h3 {
        font-size: 18px;
        font-weight: 600;
        color: #0e0e0e;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .section-header a {
        color: #0e0e0e;
        text-decoration: none;
        font-size: 13px;
    }
    .activity-timeline {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .activity-item {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 12px;
        background: white;
        border-radius: 12px;
    }
    .activity-icon {
        width: 40px;
        height: 40px;
        background: #F5F6F8;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0e0e0e;
    }
    .activity-details p {
        font-size: 14px;
        color: #0e0e0e;
        margin-bottom: 4px;
    }
    .activity-time {
        font-size: 12px;
        color: #7A8B9B;
    }

    /* Bottom Navigation */
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
    @media (max-width: 1200px) {
        .dashboard-container {
            padding: 30px 40px;
            padding-bottom: 100px;
        }
    }
    
    @media (max-width: 992px) {
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .dashboard-grid {
            grid-template-columns: 1fr;
        }
        .fee-amounts {
            flex-direction: column;
            gap: 10px;
        }
        .fee-divider {
            display: none;
        }
    }
    
    @media (max-width: 768px) {
        .dashboard-container {
            padding: 20px;
            padding-bottom: 80px;
        }
        .bottom-nav {
            display: flex;
        }
        .welcome-section {
            padding: 25px;
        }
        .welcome-text h1 {
            font-size: 24px;
        }
        .datetime-display {
            text-align: left;
            margin-top: 10px;
        }
        .time-display {
            font-size: 20px;
        }
        .stats-grid {
            grid-template-columns: 1fr;
        }
        .action-buttons {
            grid-template-columns: 1fr;
        }
        .payment-options {
            flex-direction: column;
        }
    }
    
    @media (max-width: 480px) {
        .time-display {
            font-size: 16px;
        }
        .fee-price {
            font-size: 22px;
        }
        .bottom-nav {
            padding: 8px 16px 16px;
        }
        .bottom-nav-item {
            padding: 6px 8px;
        }
    }
</style>

<script>
// Real-time clock and date update
function updateClock() {
    const now = new Date();
    
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    
    const hoursEl = document.getElementById('currentHours');
    const minutesEl = document.getElementById('currentMinutes');
    const secondsEl = document.getElementById('currentSeconds');
    
    if (hoursEl) hoursEl.textContent = hours;
    if (minutesEl) minutesEl.textContent = minutes;
    if (secondsEl) secondsEl.textContent = seconds;
    
    const weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    
    const weekday = weekdays[now.getDay()];
    const day = now.getDate();
    const month = months[now.getMonth()];
    const year = now.getFullYear();
    
    const weekdayEl = document.getElementById('currentWeekday');
    const dayEl = document.getElementById('currentDay');
    const monthEl = document.getElementById('currentMonth');
    const yearEl = document.getElementById('currentYear');
    
    if (weekdayEl) weekdayEl.textContent = weekday;
    if (dayEl) dayEl.textContent = day;
    if (monthEl) monthEl.textContent = month;
    if (yearEl) yearEl.textContent = year;
}

updateClock();
setInterval(updateClock, 1000);

// Payment method selection
const paymentOptions = document.querySelectorAll('.payment-option');
const bankDetails = document.getElementById('bankDetails');
const cardDetails = document.getElementById('cardDetails');
const walletDetails = document.getElementById('walletDetails');

paymentOptions.forEach(option => {
    option.addEventListener('click', function() {
        paymentOptions.forEach(opt => opt.classList.remove('active'));
        this.classList.add('active');
        
        const method = this.getAttribute('data-method');
        
        bankDetails.style.display = 'none';
        cardDetails.style.display = 'none';
        walletDetails.style.display = 'none';
        
        if (method === 'bank') {
            bankDetails.style.display = 'block';
        } else if (method === 'card') {
            cardDetails.style.display = 'block';
        } else if (method === 'wallet') {
            walletDetails.style.display = 'block';
        }
    });
});

// Pay button click
document.getElementById('payBtn')?.addEventListener('click', function() {
    alert('Payment processing will be integrated here. This is a demo interface.');
});

// Bottom nav active state
document.querySelectorAll('.bottom-nav-item').forEach(item => {
    item.addEventListener('click', function(e) {
        document.querySelectorAll('.bottom-nav-item').forEach(nav => nav.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>

@endsection