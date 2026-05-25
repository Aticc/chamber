@extends('layouts.member')

@section('title', 'Profile')

@section('content')
<div class="profile-page">
    <div class="page-header">
        <h1>My Profile</h1>
        <p>Manage your account information and preferences</p>
    </div>

    <div class="profile-grid">
        <!-- Profile Information -->
        <div class="profile-card">
            <div class="card-header">
                <h3>Profile Information</h3>
            </div>
            <div class="card-body">
                <div class="info-row">
                    <span class="info-label">Organization Name</span>
                    <span class="info-value">{{ $member->org_name }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">First Name</span>
                    <span class="info-value">{{ $member->first_name }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Last Name</span>
                    <span class="info-value">{{ $member->last_name }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Position / Title</span>
                    <span class="info-value">{{ $member->position ?? 'Not specified' }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Email</span>
                    <span class="info-value">{{ $member->email }}</span>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="profile-card">
            <div class="card-header">
                <h3>Contact Information</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('member.profile.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="form-input" value="{{ $member->phone }}">
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                        <input type="text" name="position" class="form-input" value="{{ $member->position }}">
                    </div>
                    <button type="submit" class="btn-update">Update Profile</button>
                </form>
            </div>
        </div>

        <!-- Membership Details -->
        <div class="profile-card">
            <div class="card-header">
                <h3>Membership Details</h3>
            </div>
            <div class="card-body">
                <div class="info-row">
                    <span class="info-label">Membership Level</span>
                    <span class="info-value">{{ $member->membership_level ?? $member->selected_tier ?? 'Institutional Member' }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Member Since</span>
                    <span class="info-value">{{ $member->created_at ? $member->created_at->format('F j, Y') : 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Status</span>
                    <span class="info-value status-{{ $member->status }}">{{ ucfirst($member->status) }}</span>
                </div>
            </div>
        </div>

        <!-- Account Actions -->
        <div class="profile-card">
            <div class="card-header">
                <h3>Account Actions</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('member.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout">Logout from Portal</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.profile-page {
    max-width: 1000px;
    margin: 0 auto;
}

.page-header {
    margin-bottom: 28px;
}

.page-header h1 {
    font-size: 28px;
    font-weight: 600;
    color: #031B4E;
    margin-bottom: 6px;
}

.page-header p {
    font-size: 14px;
    color: #7A8B9B;
}

.profile-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}

.profile-card {
    background: white;
    border-radius: 20px;
    border: 1px solid #E8ECEF;
    overflow: hidden;
}

.card-header {
    padding: 18px 24px;
    background: #F8F9FA;
    border-bottom: 1px solid #E8ECEF;
}

.card-header h3 {
    font-size: 16px;
    font-weight: 600;
    color: #031B4E;
    margin: 0;
}

.card-body {
    padding: 24px;
}

.info-row {
    display: flex;
    justify-content: space-between;
    padding: 12px 0;
    border-bottom: 1px solid #F0F2F5;
}

.info-label {
    font-weight: 500;
    font-size: 13px;
    color: #5D6F7F;
}

.info-value {
    font-size: 14px;
    color: #1A2C3E;
}

.info-value.status-approved {
    color: #2E7D32;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-size: 13px;
    font-weight: 500;
    color: #1A2C3E;
    margin-bottom: 8px;
}

.form-input {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #E8ECEF;
    border-radius: 10px;
    font-size: 14px;
    transition: all 0.2s;
}

.form-input:focus {
    outline: none;
    border-color: #031B4E;
}

.btn-update {
    width: 100%;
    background: #041931;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s;
}

.btn-update:hover {
    background: #031B4E;
}

.btn-logout {
    width: 100%;
    background: #FEF2E8;
    color: #DC3545;
    border: 1px solid #DC3545;
    padding: 12px;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s;
}

.btn-logout:hover {
    background: #DC3545;
    color: white;
}

@media (max-width: 768px) {
    .profile-grid {
        grid-template-columns: 1fr;
    }
    .info-row {
        flex-direction: column;
        gap: 6px;
    }
}
</style>
@endsection