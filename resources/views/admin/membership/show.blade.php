@extends('layouts.admin')

@section('title', 'Application #' . $application->id)

@section('content')
<div class="application-detail">
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <div class="breadcrumb">
                <a href="{{ route('admin.membership.applications') }}">Applications</a> / 
                <span>Application #{{ $application->id }}</span>
            </div>
            <h1>{{ $application->legal_name }}</h1>
            <p class="subtitle">Submitted on {{ $application->created_at->format('F j, Y, g:i a') }}</p>
        </div>
        <div class="header-actions">
            <a href="{{ route('admin.membership.applications') }}" class="btn-secondary">
                ← Back to Applications
            </a>
        </div>
    </div>

    <div class="detail-grid">
        <!-- Left Column - Application Info & Status -->
        <div class="detail-card">
            <div class="card-header">
                <h3>Application Information</h3>
                <span class="status-badge status-{{ $application->status }}">
                    {{ ucfirst(str_replace('_', ' ', $application->status)) }}
                </span>
            </div>
            <div class="card-body">
                <div class="info-row">
                    <span class="info-label">Reference #:</span>
                    <span class="info-value">#{{ $application->id }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Selected Tier:</span>
                    <span class="info-value">{{ $application->tier_name }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Tier Price:</span>
                    <span class="info-value">{{ $application->tier_price }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Submitted:</span>
                    <span class="info-value">{{ $application->created_at->format('F j, Y, g:i a') }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Last Updated:</span>
                    <span class="info-value">{{ $application->updated_at->format('F j, Y, g:i a') }}</span>
                </div>
                @if($application->reviewed_at)
                <div class="info-row">
                    <span class="info-label">Reviewed:</span>
                    <span class="info-value">{{ $application->reviewed_at->format('F j, Y, g:i a') }}</span>
                </div>
                @endif
            </div>
        </div>

        <!-- Right Column - Status Update Form -->
        <div class="detail-card">
            <div class="card-header">
                <h3>Update Status</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.membership.update-status', $application->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Application Status</label>
                        <select name="status" class="form-select" id="statusSelect">
                            <option value="pending" {{ $application->status == 'pending' ? 'selected' : '' }}>Pending Review</option>
                            <option value="under_review" {{ $application->status == 'under_review' ? 'selected' : '' }}>Under Review</option>
                            <option value="approved" {{ $application->status == 'approved' ? 'selected' : '' }}>Approved</option>
                            <option value="rejected" {{ $application->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                            <option value="deferred" {{ $application->status == 'deferred' ? 'selected' : '' }}>Deferred</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Admin Notes <span class="optional">(Optional - sent to applicant if rejected)</span></label>
                        <textarea name="admin_notes" class="form-textarea" rows="4" placeholder="Add notes about this application...">{{ $application->admin_notes }}</textarea>
                    </div>
                    <button type="submit" class="btn-primary">Update Status</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Organization Details -->
    <div class="detail-card full-width">
        <div class="card-header">
            <h3>Section 1 -Organization Profile</h3>
        </div>
        <div class="card-body">
            <div class="info-grid">
                <div class="info-row"><span class="info-label">Legal Name:</span><span class="info-value">{{ $application->legal_name }}</span></div>
                <div class="info-row"><span class="info-label">Institution Type:</span><span class="info-value">{{ $application->institution_type }}</span></div>
                <div class="info-row"><span class="info-label">Country of Registration:</span><span class="info-value">{{ $application->country_registration }}</span></div>
                <div class="info-row"><span class="info-label">Registration Number:</span><span class="info-value">{{ $application->registration_number ?: 'Not provided' }}</span></div>
                <div class="info-row"><span class="info-label">Year Established:</span><span class="info-value">{{ $application->year_established ?: 'Not provided' }}</span></div>
                <div class="info-row"><span class="info-label">Website:</span><span class="info-value">{{ $application->website ?: 'Not provided' }}</span></div>
                <div class="info-row"><span class="info-label">Address:</span><span class="info-value">{{ $application->address }}</span></div>
                <div class="info-row"><span class="info-label">Operating Jurisdictions:</span><span class="info-value">{{ $application->operating_jurisdictions ?: 'Not provided' }}</span></div>
            </div>
        </div>
    </div>

    <!-- Contact Details -->
    <div class="detail-card full-width">
        <div class="card-header">
            <h3>Section 2 -Primary Contact Representative</h3>
        </div>
        <div class="card-body">
            <div class="info-grid">
                <div class="info-row"><span class="info-label">Full Name:</span><span class="info-value">{{ $application->contact_name }}</span></div>
                <div class="info-row"><span class="info-label">Position:</span><span class="info-value">{{ $application->contact_position }}</span></div>
                <div class="info-row"><span class="info-label">Email:</span><span class="info-value"><a href="mailto:{{ $application->contact_email }}">{{ $application->contact_email }}</a></span></div>
                <div class="info-row"><span class="info-label">Phone:</span><span class="info-value">{{ $application->contact_phone }}</span></div>
                <div class="info-row"><span class="info-label">LinkedIn:</span><span class="info-value">{{ $application->linkedin ?: 'Not provided' }}</span></div>
                <div class="info-row"><span class="info-label">Authorized Status:</span><span class="info-value">{{ $application->authorized_status }}</span></div>
            </div>
        </div>
    </div>

    <!-- Strategic Alignment -->
    <div class="detail-card full-width">
        <div class="card-header">
            <h3>Section 3 -Institutional Capacity & Strategic Alignment</h3>
        </div>
        <div class="card-body">
            <div class="info-grid">
                <div class="info-row"><span class="info-label">Primary Sector:</span><span class="info-value">{{ $application->primary_sector }}</span></div>
                <div class="info-row"><span class="info-label">Trade Corridors:</span><span class="info-value">{{ is_array($application->trade_corridors) ? implode(', ', $application->trade_corridors) : ($application->trade_corridors ?: 'None selected') }}</span></div>
                <div class="info-row"><span class="info-label">Capacity:</span><span class="info-value">{{ $application->capacity ?: 'Not provided' }}</span></div>
                <div class="info-row"><span class="info-label">Strategic Interests:</span><span class="info-value">{{ is_array($application->strategic_interests) ? implode(', ', $application->strategic_interests) : ($application->strategic_interests ?: 'None selected') }}</span></div>
                <div class="info-row"><span class="info-label">Participation Objective:</span><span class="info-value">{{ $application->participation_objective ?: 'Not provided' }}</span></div>
            </div>
        </div>
    </div>

    <!-- Capital Alignment -->
    <div class="detail-card full-width">
        <div class="card-header">
            <h3>Section 4 -Capital Alignment & Execution Readiness</h3>
        </div>
        <div class="card-body">
            <div class="info-grid">
                <div class="info-row"><span class="info-label">Seeking Opportunities:</span><span class="info-value">{{ is_array($application->seeking_opportunities) ? implode(', ', $application->seeking_opportunities) : ($application->seeking_opportunities ?: 'None selected') }}</span></div>
                <div class="info-row"><span class="info-label">Market Exposure:</span><span class="info-value">{{ $application->market_exposure ?: 'Not provided' }}</span></div>
                <div class="info-row"><span class="info-label">Readiness Status:</span><span class="info-value">{{ $application->readiness_status ?: 'Not provided' }}</span></div>
            </div>
        </div>
    </div>

    <!-- Verification & Documents -->
    <div class="detail-card full-width">
        <div class="card-header">
            <h3>Section 5 -Trust & Verification (T&V) Requirements</h3>
        </div>
        <div class="card-body">
            <div class="info-grid">
                <div class="info-row"><span class="info-label">Signature:</span><span class="info-value">{{ $application->signature }}</span></div>
                <div class="info-row"><span class="info-label">Date:</span><span class="info-value">{{ $application->signature_date ? $application->signature_date->format('F j, Y') : 'Not provided' }}</span></div>
                <div class="info-row"><span class="info-label">Verification Acknowledged:</span><span class="info-value">{{ $application->verification_acknowledgement ? 'Yes' : 'No' }}</span></div>
            </div>
        </div>
    </div>

    <!-- Uploaded Documents -->
    <div class="detail-card full-width">
        <div class="card-header">
            <h3>Section 6 -Required Documentation</h3>
        </div>
        <div class="card-body">
            <div class="documents-grid">
                @php
                    $documents = [
                        'incorporation_file' => 'Certificate of Incorporation',
                        'profile_file' => 'Corporate / Business Profile',
                        'address_file' => 'Proof of Address',
                        'id_file' => 'Authorized Representative ID'
                    ];
                @endphp
                
                @foreach($documents as $field => $label)
                <div class="document-item">
                    <div class="doc-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                        </svg>
                    </div>
                    <div class="doc-info">
                        <div class="doc-label">{{ $label }}</div>
                        @if($application->$field)
                            <span class="doc-status uploaded">✓ Uploaded</span>
                            <a href="{{ route('admin.membership.download', ['id' => $application->id, 'field' => $field]) }}" class="doc-link">Download</a>
                        @else
                            <span class="doc-status missing">Not uploaded</span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
.application-detail {
    max-width: 1200px;
    margin: 0 auto;
}

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 28px;
    flex-wrap: wrap;
    gap: 16px;
}

.breadcrumb {
    font-size: 13px;
    color: #7A8B9B;
    margin-bottom: 8px;
}

.breadcrumb a {
    color: #7A8B9B;
    text-decoration: none;
}

.breadcrumb a:hover {
    color: #C49A6C;
}

.page-header h1 {
    font-size: 28px;
    font-weight: 600;
    color: #1A2C3E;
    margin-bottom: 6px;
}

.page-header .subtitle {
    font-size: 14px;
    color: #7A8B9B;
}

.header-actions {
    display: flex;
    gap: 12px;
}

.btn-secondary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    background: #E8ECEF;
    color: #1A2C3E;
    text-decoration: none;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 400;
    transition: all 0.2s;
}

.btn-secondary:hover {
    background: #D0D5D9;
}

.detail-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
    margin-bottom: 24px;
}

.detail-card {
    background: white;
    border-radius: 20px;
    border: 1px solid #E8ECEF;
    overflow: hidden;
}

.detail-card.full-width {
    margin-bottom: 24px;
}

.card-header {
    padding: 18px 24px;
    background: #F8F9FA;
    border-bottom: 1px solid #E8ECEF;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-header h3 {
    font-size: 16px;
    font-weight: 600;
    color: #1A2C3E;
    margin: 0;
}

.card-body {
    padding: 24px;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}

.info-row {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.info-label {
    font-size: 11px;
    font-weight: 600;
    color: #7A8B9B;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.info-value {
    font-size: 14px;
    color: #1A2C3E;
    word-break: break-word;
}

.info-value a {
    color: #C49A6C;
    text-decoration: none;
}

.info-value a:hover {
    text-decoration: underline;
}

.status-badge {
    display: inline-block;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 400;
}

.status-pending { background: #FFF3E0; color: #F57C00; }
.status-under_review { background: #E3F2FD; color: #1976D2; }
.status-approved { background: #E8F5E9; color: #2E7D32; }
.status-rejected { background: #FFEBEE; color: #C62828; }
.status-deferred { background: #ECEFF1; color: #546E7A; }

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 400;
    font-size: 13px;
    color: #1A2C3E;
}

.form-group .optional {
    font-weight: normal;
    color: #7A8B9B;
    font-size: 11px;
}

.form-select, .form-textarea {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #E8ECEF;
    border-radius: 10px;
    font-size: 14px;
    font-family: inherit;
}

.form-select:focus, .form-textarea:focus {
    outline: none;
    border-color: #C49A6C;
}

.btn-primary {
    background: #C49A6C;
    color: white;
    border: none;
    padding: 12px 24px;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 400;
    cursor: pointer;
    transition: all 0.2s;
}

.btn-primary:hover {
    background: #A8854F;
}

.documents-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}

.document-item {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px;
    background: #F8F9FA;
    border-radius: 12px;
}

.doc-icon {
    color: #C49A6C;
}

.doc-info {
    flex: 1;
}

.doc-label {
    font-weight: 600;
    font-size: 13px;
    color: #1A2C3E;
    margin-bottom: 4px;
}

.doc-status {
    font-size: 11px;
    display: inline-block;
    margin-right: 12px;
}

.doc-status.uploaded {
    color: #2E7D32;
}

.doc-status.missing {
    color: #C62828;
}

.doc-link {
    font-size: 12px;
    color: #C49A6C;
    text-decoration: none;
}

.doc-link:hover {
    text-decoration: underline;
}

@media (max-width: 1024px) {
    .detail-grid {
        grid-template-columns: 1fr;
    }
    .info-grid {
        grid-template-columns: 1fr;
    }
    .documents-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection