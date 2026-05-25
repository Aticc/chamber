@extends('layouts.admin')

@section('title', 'Member #' . $member->id)

@section('content')
<div class="admin-container">
    <div class="admin-header">
        <div>
            <h1>Member #{{ $member->id }}</h1>
            <p>{{ $member->org_name }}</p>
        </div>
        <div class="admin-header-actions">
            <a href="{{ route('admin.members.index') }}" class="btn-secondary">← Back to Members</a>
            <a href="{{ route('admin.members.login-as', $member->id) }}" class="btn-primary">Login as Member →</a>
        </div>
    </div>

    <div class="member-detail-grid">
        <!-- Member Information -->
        <div class="detail-card">
            <div class="card-header">
                <h3>Member Information</h3>
                <span class="status-badge status-{{ $member->status }}">
                    {{ ucfirst($member->status) }}
                </span>
            </div>
            <div class="card-body">
                <div class="info-row">
                    <span class="info-label">Organization Name:</span>
                    <span class="info-value">{{ $member->org_name }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Organization Type:</span>
                    <span class="info-value">{{ $member->org_type ?? 'Not specified' }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Registration Number:</span>
                    <span class="info-value">{{ $member->registration_number ?? 'Not specified' }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Country:</span>
                    <span class="info-value">{{ $member->country ?? 'Not specified' }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Website:</span>
                    <span class="info-value">{{ $member->website ?? 'Not specified' }}</span>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="detail-card">
            <div class="card-header">
                <h3>Contact Information</h3>
            </div>
            <div class="card-body">
                <div class="info-row">
                    <span class="info-label">Full Name:</span>
                    <span class="info-value">{{ $member->first_name }} {{ $member->last_name }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Position:</span>
                    <span class="info-value">{{ $member->position ?? 'Not specified' }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Email:</span>
                    <span class="info-value"><a href="mailto:{{ $member->email }}">{{ $member->email }}</a></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Phone:</span>
                    <span class="info-value">{{ $member->phone ?? 'Not specified' }}</span>
                </div>
            </div>
        </div>

        <!-- Membership Details -->
        <div class="detail-card">
            <div class="card-header">
                <h3>Membership Details</h3>
            </div>
            <div class="card-body">
                <div class="info-row">
                    <span class="info-label">Membership Tier:</span>
                    <span class="info-value">{{ $member->membership_level ?? $member->selected_tier ?? 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Member Since:</span>
                    <span class="info-value">{{ $member->created_at->format('F j, Y') }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Last Updated:</span>
                    <span class="info-value">{{ $member->updated_at->format('F j, Y') }}</span>
                </div>
            </div>
        </div>

        <!-- Status Update Form -->
        <div class="detail-card">
            <div class="card-header">
                <h3>Update Status</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.members.status', $member->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Member Status</label>
                        <select name="status" class="form-select">
                            <option value="approved" {{ $member->status == 'approved' ? 'selected' : '' }}>Approved</option>
                            <option value="pending" {{ $member->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="under_review" {{ $member->status == 'under_review' ? 'selected' : '' }}>Under Review</option>
                            <option value="deferred" {{ $member->status == 'deferred' ? 'selected' : '' }}>Deferred</option>
                            <option value="rejected" {{ $member->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-primary">Update Status</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Member -->
    <div class="detail-card danger-card">
        <div class="card-header">
            <h3>Danger Zone</h3>
        </div>
        <div class="card-body">
            <p>Once deleted, this member cannot be restored. All associated data will be permanently removed.</p>
            <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member? This action cannot be undone.');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-danger">Delete Member</button>
            </form>
        </div>
    </div>
</div>

<style>
.admin-container {
    max-width: 1200px;
    margin: 0 auto;
}

.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    flex-wrap: wrap;
    gap: 15px;
}

.admin-header h1 {
    font-size: 28px;
    color: #17015e;
    margin-bottom: 5px;
}

.admin-header p {
    color: #5D6F7F;
}

.btn-secondary {
    background: #6c757d;
    color: white;
    padding: 8px 16px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 13px;
    margin-right: 10px;
}

.btn-primary {
    background: #17015e;
    color: white;
    padding: 8px 20px;
    border-radius: 8px;
    border: none;
    font-size: 13px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
}

.btn-primary:hover {
    background: #2a0280;
}

.btn-danger {
    background: #dc3545;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    border: none;
    font-size: 13px;
    cursor: pointer;
}

.member-detail-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
    margin-bottom: 24px;
}

.detail-card {
    background: white;
    border-radius: 20px;
    border: 1px solid #E8EBED;
    overflow: hidden;
}

.detail-card.danger-card {
    border-color: #dc3545;
}

.card-header {
    padding: 18px 24px;
    background: #F8F9FA;
    border-bottom: 1px solid #E8EBED;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-header h3 {
    font-size: 16px;
    font-weight: 600;
    color: #17015e;
    margin: 0;
}

.card-body {
    padding: 24px;
}

.info-row {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #E8EBED;
}

.info-label {
    font-weight: 600;
    font-size: 13px;
    color: #5D6F7F;
}

.info-value {
    font-size: 14px;
    color: #1A2C3E;
}

.status-badge {
    display: inline-block;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 500;
}

.status-approved { background: #E8F5E9; color: #28a745; }
.status-pending { background: #FFF3CD; color: #856404; }
.status-under_review { background: #E8F0FE; color: #17015e; }
.status-rejected { background: #FEF2E8; color: #dc3545; }
.status-deferred { background: #E8EBED; color: #6c757d; }

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    font-size: 13px;
    color: #1A2C3E;
}

.form-select {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #E8EBED;
    border-radius: 8px;
    font-size: 14px;
}

@media (max-width: 768px) {
    .member-detail-grid {
        grid-template-columns: 1fr;
    }
    .info-row {
        flex-direction: column;
        gap: 5px;
    }
}
</style>
@endsection