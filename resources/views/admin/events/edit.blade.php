@extends('layouts.admin')

@section('title', 'Edit Event')

@section('content')
<div class="event-form-container">
    <div class="page-header">
        <h1>Edit Event</h1>
        <p>Update event details</p>
    </div>

    <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="event-form">
        @csrf
        @method('PUT')
        
        <div class="form-grid">
            <div class="form-card">
                <h3>Basic Information</h3>
                
                <div class="form-group">
                    <label>Event Title *</label>
                    <input type="text" name="title" class="form-input" value="{{ $event->title }}" required>
                </div>
                
                <div class="form-group">
                    <label>Description *</label>
                    <textarea name="description" rows="4" class="form-textarea" required>{{ $event->description }}</textarea>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>Event Type *</label>
                        <select name="event_type" class="form-select" required>
                            <option value="summit" {{ $event->event_type == 'summit' ? 'selected' : '' }}>Summit</option>
                            <option value="mission" {{ $event->event_type == 'mission' ? 'selected' : '' }}>Trade Mission</option>
                            <option value="forum" {{ $event->event_type == 'forum' ? 'selected' : '' }}>Forum</option>
                            <option value="webinar" {{ $event->event_type == 'webinar' ? 'selected' : '' }}>Webinar</option>
                            <option value="roundtable" {{ $event->event_type == 'roundtable' ? 'selected' : '' }}>Roundtable</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Event Category *</label>
                        <select name="event_category" class="form-select" required>
                            <option value="institutional" {{ $event->event_category == 'institutional' ? 'selected' : '' }}>Institutional</option>
                            <option value="investment" {{ $event->event_category == 'investment' ? 'selected' : '' }}>Investment</option>
                            <option value="leadership" {{ $event->event_category == 'leadership' ? 'selected' : '' }}>Leadership</option>
                            <option value="trade" {{ $event->event_category == 'trade' ? 'selected' : '' }}>Trade</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="form-card">
                <h3>Date & Location</h3>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>Start Date *</label>
                        <input type="datetime-local" name="start_date" class="form-input" value="{{ $event->start_date->format('Y-m-d\TH:i') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label>End Date *</label>
                        <input type="datetime-local" name="end_date" class="form-input" value="{{ $event->end_date->format('Y-m-d\TH:i') }}" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Location *</label>
                    <input type="text" name="location" class="form-input" value="{{ $event->location }}" required>
                </div>
                
                <div class="form-group">
                    <label>Venue</label>
                    <input type="text" name="venue" class="form-input" value="{{ $event->venue }}">
                </div>
            </div>
            
            <div class="form-card">
                <h3>Access & Capacity</h3>
                
                <div class="form-group">
                    <label>Access Tiers</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="access_tiers[]" value="tier_i" {{ is_array($event->access_tiers) && in_array('tier_i', $event->access_tiers) ? 'checked' : '' }}> Tier I - Institutional Members</label>
                        <label><input type="checkbox" name="access_tiers[]" value="tier_ii" {{ is_array($event->access_tiers) && in_array('tier_ii', $event->access_tiers) ? 'checked' : '' }}> Tier II - Strategic Corporate Partners</label>
                        <label><input type="checkbox" name="access_tiers[]" value="tier_iii" {{ is_array($event->access_tiers) && in_array('tier_iii', $event->access_tiers) ? 'checked' : '' }}> Tier III - Institutional & Institutional Partners</label>
                    </div>
                    <small class="help-text">Leave unchecked for all tiers</small>
                </div>
                
                <div class="form-group">
                    <label><input type="checkbox" name="is_invitation_only" value="1" {{ $event->is_invitation_only ? 'checked' : '' }}> Invitation Only Event</label>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>Capacity</label>
                        <input type="number" name="capacity" class="form-input" value="{{ $event->capacity }}">
                    </div>
                    
                    <div class="form-group">
                        <label>Status *</label>
                        <select name="status" class="form-select" required>
                            <option value="draft" {{ $event->status == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ $event->status == 'published' ? 'selected' : '' }}>Published</option>
                            <option value="cancelled" {{ $event->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Registration Link</label>
                    <input type="url" name="registration_link" class="form-input" value="{{ $event->registration_link }}">
                </div>
            </div>
            
            <div class="form-card">
                <h3>Media & Documents</h3>
                
                @if($event->featured_image)
                <div class="form-group">
                    <label>Current Featured Image</label>
                    <div class="current-image">
                        <img src="{{ Storage::url($event->featured_image) }}" alt="{{ $event->title }}" style="max-width: 200px; border-radius: 8px;">
                    </div>
                </div>
                @endif
                
                <div class="form-group">
                    <label>Featured Image (Upload new to replace)</label>
                    <input type="file" name="featured_image" class="form-file" accept="image/jpeg,image/png,image/jpg">
                    <small class="help-text">Recommended size: 1200x800px, Max 2MB</small>
                </div>
                
                @if($event->agenda_file)
                <div class="form-group">
                    <label>Current Agenda File</label>
                    <div>
                        <a href="{{ route('admin.events.download-agenda', $event->id) }}" class="btn-download">Download Current Agenda</a>
                    </div>
                </div>
                @endif
                
                <div class="form-group">
                    <label>Agenda File (PDF) - Upload new to replace</label>
                    <input type="file" name="agenda_file" class="form-file" accept=".pdf">
                    <small class="help-text">Max 5MB</small>
                </div>
                
                <div class="form-group">
                    <label>Highlights Link (for past events)</label>
                    <input type="url" name="highlights_link" class="form-input" value="{{ $event->highlights_link }}">
                </div>
            </div>
        </div>
        
        <div class="form-actions">
            <a href="{{ route('admin.events.index') }}" class="btn-secondary">Cancel</a>
            <button type="submit" class="btn-primary">Update Event</button>
        </div>
    </form>
</div>

<style>
.event-form-container {
    max-width: 1000px;
    margin: 0 auto;
}

.page-header {
    margin-bottom: 28px;
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

.form-grid {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.form-card {
    background: white;
    border-radius: 20px;
    border: 1px solid #E8ECEF;
    padding: 24px;
}

.form-card h3 {
    font-size: 16px;
    font-weight: 600;
    color: #17015e;
    margin-bottom: 20px;
    padding-bottom: 12px;
    border-bottom: 1px solid #E8ECEF;
}

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

.form-input, .form-select, .form-textarea, .form-file {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #E8ECEF;
    border-radius: 10px;
    font-size: 14px;
    font-family: inherit;
}

.form-input:focus, .form-select:focus, .form-textarea:focus {
    outline: none;
    border-color: #17015e;
}

.form-textarea {
    resize: vertical;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.checkbox-group {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.checkbox-group label {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: normal;
    cursor: pointer;
}

.help-text {
    font-size: 11px;
    color: #7A8B9B;
    margin-top: 5px;
    display: block;
}

.current-image {
    margin-top: 8px;
}

.btn-download {
    display: inline-block;
    padding: 6px 12px;
    background: #E8F5E9;
    color: #2E7D32;
    border-radius: 6px;
    text-decoration: none;
    font-size: 12px;
}

.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 16px;
    margin-top: 24px;
    padding-top: 24px;
    border-top: 1px solid #E8ECEF;
}

.btn-secondary {
    padding: 12px 24px;
    background: #F5F7FA;
    color: #1A2C3E;
    border: 1px solid #E8ECEF;
    border-radius: 10px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
}

.btn-primary {
    padding: 12px 24px;
    background: #17015e;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
}

.btn-primary:hover {
    background: #2a0280;
}

@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection