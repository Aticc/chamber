@extends('layouts.admin')

@section('title', 'Events Management')

@section('content')
<div class="events-admin">
    <div class="page-header">
        <div>
            <h1>Events Management</h1>
            <p>Manage institutional events, summits, and missions</p>
        </div>
        <a href="{{ route('admin.events.create') }}" class="btn-primary">+ Create New Event</a>
    </div>

    <!-- Stats Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-value">{{ $stats['total'] }}</div>
            <div class="stat-label">Total Events</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $stats['published'] }}</div>
            <div class="stat-label">Published</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $stats['draft'] }}</div>
            <div class="stat-label">Draft</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $stats['upcoming'] }}</div>
            <div class="stat-label">Upcoming</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $stats['past'] }}</div>
            <div class="stat-label">Past Events</div>
        </div>
    </div>

    <!-- Filter Tabs -->
    <div class="filter-tabs">
        <a href="{{ route('admin.events.index') }}" class="filter-tab {{ !request('status') ? 'active' : '' }}">All</a>
        <a href="{{ route('admin.events.index', ['status' => 'published']) }}" class="filter-tab {{ request('status') == 'published' ? 'active' : '' }}">Published</a>
        <a href="{{ route('admin.events.index', ['status' => 'draft']) }}" class="filter-tab {{ request('status') == 'draft' ? 'active' : '' }}">Draft</a>
        <a href="{{ route('admin.events.index', ['status' => 'cancelled']) }}" class="filter-tab {{ request('status') == 'cancelled' ? 'active' : '' }}">Cancelled</a>
    </div>

    <!-- Events Table -->
    <div class="table-container">
        <table class="events-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Event Title</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Access</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($events as $event)
                <tr>
                    <td>#{{ $event->id }}</td>
                    <td>
                        <strong>{{ $event->title }}</strong><br>
                        <small class="text-muted">{{ Str::limit($event->description, 50) }}</small>
                    </td>
                    <td>
                        <span class="type-badge">{{ ucfirst($event->event_type) }}</span>
                    </td>
                    <td>
                        {{ $event->start_date->format('M d, Y') }}<br>
                        <small class="text-muted">{{ $event->start_date->format('g:i A') }}</small>
                    </td>
                    <td>{{ $event->location }}</td>
                    <td>
                        @if($event->is_invitation_only)
                            <span class="access-badge invitation">Invitation Only</span>
                        @else
                            <span class="access-badge open">{{ $event->getAccessBadgeAttribute() }}</span>
                        @endif
                    </td>
                    <td>
                        <span class="status-badge status-{{ $event->status }}">
                            {{ ucfirst($event->status) }}
                        </span>
                    </td>
                    <td data-label="Actions">
                        <div class="action-buttons">
                            <a href="{{ route('admin.events.edit', $event->id) }}" class="btn-edit">Edit</a>
                            @if($event->agenda_file)
                                <a href="{{ route('admin.events.download-agenda', $event->id) }}" class="btn-download">Agenda</a>
                            @endif
                            <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" class="inline-form" onsubmit="return confirm('Delete this event?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="empty-state">No events found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="pagination">
        {{ $events->links() }}
    </div>
</div>

<style>
.events-admin {
    max-width: 1400px;
    margin: 0 auto;
}

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 28px;
    flex-wrap: wrap;
    gap: 16px;
}

.page-header h1 {
    font-size: 28px;
    font-weight: 600;
    color: #17015e;
    margin-bottom: 6px;
}

.page-header p {
    font-size: 14px;
    color: #7A8B9B;
}

.btn-primary {
    background: #17015e;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.2s;
}

.btn-primary:hover {
    background: #2a0280;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
    margin-bottom: 28px;
}

.stat-card {
    background: white;
    border-radius: 16px;
    padding: 20px;
    text-align: center;
    border: 1px solid #E8ECEF;
}

.stat-value {
    font-size: 32px;
    font-weight: 700;
    color: #17015e;
}

.stat-label {
    font-size: 12px;
    color: #7A8B9B;
    margin-top: 6px;
    text-transform: uppercase;
}

.filter-tabs {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    margin-bottom: 24px;
}

.filter-tab {
    padding: 8px 20px;
    background: white;
    border: 1px solid #E8ECEF;
    border-radius: 30px;
    text-decoration: none;
    font-size: 13px;
    color: #5D6F7F;
    transition: all 0.2s;
}

.filter-tab:hover, .filter-tab.active {
    background: #17015e;
    border-color: #17015e;
    color: white;
}

.table-container {
    background: white;
    border-radius: 20px;
    border: 1px solid #E8ECEF;
    overflow-x: auto;
}

.events-table {
    width: 100%;
    border-collapse: collapse;
}

.events-table th {
    padding: 16px 20px;
    text-align: left;
    background: #F8F9FA;
    font-size: 12px;
    font-weight: 600;
    color: #5D6F7F;
    border-bottom: 1px solid #E8ECEF;
}

.events-table td {
    padding: 16px 20px;
    font-size: 14px;
    border-bottom: 1px solid #F0F2F5;
}

.type-badge {
    display: inline-block;
    padding: 4px 12px;
    background: #E3F2FD;
    color: #1976D2;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 500;
}

.access-badge {
    display: inline-block;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 500;
}

.access-badge.open {
    background: #E8F5E9;
    color: #2E7D32;
}

.access-badge.invitation {
    background: #FFF3E0;
    color: #F57C00;
}

.status-badge {
    display: inline-block;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 500;
}

.status-published { background: #E8F5E9; color: #2E7D32; }
.status-draft { background: #FFF3E0; color: #F57C00; }
.status-cancelled { background: #FFEBEE; color: #C62828; }

.action-buttons {
    display: flex;
    gap: 8px;
}

.btn-edit, .btn-download, .btn-delete {
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 12px;
    text-decoration: none;
    cursor: pointer;
    border: none;
}

.btn-edit {
    background: #E3F2FD;
    color: #1976D2;
}

.btn-download {
    background: #E8F5E9;
    color: #2E7D32;
}

.btn-delete {
    background: #FFEBEE;
    color: #C62828;
}

.inline-form {
    display: inline;
}

.pagination {
    margin-top: 28px;
    display: flex;
    justify-content: center;
}

.text-muted {
    color: #7A8B9B;
    font-size: 12px;
}

.empty-state {
    text-align: center;
    padding: 60px;
    color: #7A8B9B;
}

@media (max-width: 1024px) {
    .stats-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}
</style>
@endsection