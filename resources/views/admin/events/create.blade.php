@extends('layouts.admin')

@section('title', 'Create Event')

@section('content')
<div class="event-form-container">
    <div class="page-header">
        <h1>Create New Event</h1>
        <p>Add a new summit, mission, or institutional event</p>
    </div>

    <!-- Display Validation Errors -->
    @if($errors->any())
        <div class="alert alert-error">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <line x1="12" y1="8" x2="12" y2="12"/>
                <line x1="12" y1="16" x2="12.01" y2="16"/>
            </svg>
            <div>
                <strong>Please fix the following errors:</strong>
                <ul style="margin-top: 8px; margin-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data" class="event-form">
        @csrf
        
        <div class="form-grid">
            <div class="form-card">
                <h3>Basic Information</h3>
                
                <div class="form-group @error('title') has-error @enderror">
                    <label>Event Title *</label>
                    <input type="text" name="title" class="form-input" value="{{ old('title') }}" required>
                    @error('title')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group @error('description') has-error @enderror">
                    <label>Description *</label>
                    <textarea name="description" rows="4" class="form-textarea" required>{{ old('description') }}</textarea>
                    @error('description')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-row">
                    <div class="form-group @error('event_type') has-error @enderror">
                        <label>Event Type *</label>
                        <select name="event_type" class="form-select" required>
                            <option value="">Select Type</option>
                            <option value="summit" {{ old('event_type') == 'summit' ? 'selected' : '' }}>Summit</option>
                            <option value="mission" {{ old('event_type') == 'mission' ? 'selected' : '' }}>Trade Mission</option>
                            <option value="forum" {{ old('event_type') == 'forum' ? 'selected' : '' }}>Forum</option>
                            <option value="webinar" {{ old('event_type') == 'webinar' ? 'selected' : '' }}>Webinar</option>
                            <option value="roundtable" {{ old('event_type') == 'roundtable' ? 'selected' : '' }}>Roundtable</option>
                        </select>
                        @error('event_type')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group @error('event_category') has-error @enderror">
                        <label>Event Category *</label>
                        <select name="event_category" class="form-select" required>
                            <option value="">Select Category</option>
                            <option value="institutional" {{ old('event_category') == 'institutional' ? 'selected' : '' }}>Institutional</option>
                            <option value="investment" {{ old('event_category') == 'investment' ? 'selected' : '' }}>Investment</option>
                            <option value="leadership" {{ old('event_category') == 'leadership' ? 'selected' : '' }}>Leadership</option>
                            <option value="trade" {{ old('event_category') == 'trade' ? 'selected' : '' }}>Trade</option>
                        </select>
                        @error('event_category')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="form-card">
                <h3>Date & Location</h3>
                
                <div class="form-row">
                    <div class="form-group @error('start_date') has-error @enderror">
                        <label>Start Date *</label>
                        <input type="date" name="start_date" class="form-input" value="{{ old('start_date') }}" required>
                        @error('start_date')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group @error('end_date') has-error @enderror">
                        <label>End Date *</label>
                        <input type="date" name="end_date" class="form-input" value="{{ old('end_date') }}" required>
                        @error('end_date')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group @error('location') has-error @enderror">
                    <label>Location *</label>
                    <input type="text" name="location" class="form-input" value="{{ old('location') }}" placeholder="City, Country" required>
                    @error('location')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group @error('venue') has-error @enderror">
                    <label>Venue</label>
                    <input type="text" name="venue" class="form-input" value="{{ old('venue') }}" placeholder="Specific venue name">
                    @error('venue')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="form-card">
                <h3>Access & Capacity</h3>
                
                <div class="form-group">
                    <label>Access Tiers</label>
                    <div class="checkbox-group">
                        <label>
                            <input type="checkbox" name="access_tiers[]" value="tier_i" {{ old('access_tiers') && in_array('tier_i', old('access_tiers')) ? 'checked' : '' }}> 
                            Tier I - Institutional Members
                        </label>
                        <label>
                            <input type="checkbox" name="access_tiers[]" value="tier_ii" {{ old('access_tiers') && in_array('tier_ii', old('access_tiers')) ? 'checked' : '' }}> 
                            Tier II - Strategic Corporate Partners
                        </label>
                        <label>
                            <input type="checkbox" name="access_tiers[]" value="tier_iii" {{ old('access_tiers') && in_array('tier_iii', old('access_tiers')) ? 'checked' : '' }}> 
                            Tier III - Institutional & Institutional Partners
                        </label>
                    </div>
                    <small class="help-text">Leave unchecked for all tiers</small>
                </div>
                
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="is_invitation_only" value="1" {{ old('is_invitation_only') ? 'checked' : '' }}> 
                        Invitation Only Event
                    </label>
                </div>
                
                <div class="form-row">
                    <div class="form-group @error('capacity') has-error @enderror">
                        <label>Capacity</label>
                        <input type="number" name="capacity" class="form-input" value="{{ old('capacity') }}" placeholder="Max attendees">
                        @error('capacity')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group @error('status') has-error @enderror">
                        <label>Status *</label>
                        <select name="status" class="form-select" required>
                            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                            <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                        @error('status')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group @error('registration_link') has-error @enderror">
                    <label>Registration Link</label>
                    <input type="url" name="registration_link" class="form-input" value="{{ old('registration_link') }}" placeholder="https://">
                    @error('registration_link')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="form-card">
                <h3>Media & Documents</h3>
                
                <div class="form-group @error('featured_image') has-error @enderror">
                    <label>Featured Image</label>
                    <input type="file" name="featured_image" class="form-file" accept="image/jpeg,image/png,image/jpg">
                    <small class="help-text">Recommended size: 1200x800px, Max 5MB</small>
                    @error('featured_image')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group @error('agenda_file') has-error @enderror">
                    <label>Agenda File (PDF)</label>
                    <input type="file" name="agenda_file" class="form-file" accept=".pdf">
                    <small class="help-text">Max 5MB</small>
                    @error('agenda_file')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group @error('highlights_link') has-error @enderror">
                    <label>Highlights Link (for past events)</label>
                    <input type="url" name="highlights_link" class="form-input" value="{{ old('highlights_link') }}" placeholder="https://">
                    @error('highlights_link')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="form-actions">
            <a href="{{ route('admin.events.index') }}" class="btn-secondary">Cancel</a>
            <button type="submit" class="btn-primary">Create Event</button>
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
    color: #031B4E;
    margin-bottom: 6px;
}

.page-header p {
    font-size: 14px;
    color: #7A8B9B;
}

/* Alert Styles */
.alert {
    padding: 16px 20px;
    border-radius: 12px;
    margin-bottom: 24px;
    font-size: 14px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.alert-error {
    background: #FFEBEE;
    color: #C62828;
    border-left: 4px solid #C62828;
}

.alert-error ul {
    margin: 0;
    padding-left: 20px;
}

.alert-error li {
    margin: 4px 0;
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
    color: #031B4E;
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

.form-group.has-error label {
    color: #C62828;
}

.form-input, .form-select, .form-textarea, .form-file {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #E8ECEF;
    border-radius: 10px;
    font-size: 14px;
    font-family: inherit;
    transition: all 0.2s;
}

.form-input:focus, .form-select:focus, .form-textarea:focus {
    outline: none;
    border-color: #031B4E;
}

.form-group.has-error .form-input,
.form-group.has-error .form-select,
.form-group.has-error .form-textarea {
    border-color: #C62828;
    background-color: #FFEBEE;
}

.error-text {
    font-size: 11px;
    color: #C62828;
    margin-top: 5px;
    display: block;
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
    transition: all 0.2s;
}

.btn-secondary:hover {
    background: #E8ECEF;
}

.btn-primary {
    padding: 12px 24px;
    background: #041931;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s;
}

.btn-primary:hover {
    background: #031B4E;
}

@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection