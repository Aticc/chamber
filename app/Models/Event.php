<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'title',
        'description',
        'event_type',
        'event_category',
        'start_date',
        'end_date',
        'location',
        'venue',
        'access_tiers',
        'is_invitation_only',
        'registration_link',
        'featured_image',
        'agenda_file',
        'capacity',
        'registered_count',
        'status',
        'is_past',
        'highlights_link'
    ];

    protected $casts = [
        'access_tiers' => 'array',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'is_invitation_only' => 'boolean',
        'is_past' => 'boolean',
    ];

    // Check if member has access to this event
    public function memberHasAccess($member)
    {
        if (empty($this->access_tiers)) {
            return true;
        }

        $memberTier = $member->selected_tier ?? '';
        $memberLevel = $member->membership_level ?? '';

        if ($memberTier == 'tier_i' && in_array('tier_i', $this->access_tiers)) return true;
        if ($memberTier == 'tier_ii' && in_array('tier_ii', $this->access_tiers)) return true;
        if ($memberTier == 'tier_iii' && in_array('tier_iii', $this->access_tiers)) return true;
        
        if ($memberLevel == 'Tier I: Institutional Members' && in_array('tier_i', $this->access_tiers)) return true;
        if ($memberLevel == 'Tier II: Strategic Corporate Partners' && in_array('tier_ii', $this->access_tiers)) return true;
        if ($memberLevel == 'Tier III: Institutional & Institutional Partners' && in_array('tier_iii', $this->access_tiers)) return true;

        return false;
    }

    // Get access badge text
    public function getAccessBadgeAttribute()
    {
        if ($this->is_invitation_only) {
            return 'By Invitation Only';
        }
        
        if (empty($this->access_tiers)) {
            return 'All Members Welcome';
        }
        
        $tiers = [];
        if (in_array('tier_i', $this->access_tiers)) $tiers[] = 'Tier I';
        if (in_array('tier_ii', $this->access_tiers)) $tiers[] = 'Tier II';
        if (in_array('tier_iii', $this->access_tiers)) $tiers[] = 'Tier III';
        
        return implode(', ', $tiers) . ' Members';
    }

    // Scope for upcoming events
    public function scopeUpcoming($query)
    {
        return $query->where('is_past', false)->where('end_date', '>=', now());
    }

    // Scope for past events
    public function scopePast($query)
    {
        return $query->where('is_past', true)->orWhere('end_date', '<', now());
    }
}