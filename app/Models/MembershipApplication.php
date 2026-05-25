<?php
// app/Models/MembershipApplication.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipApplication extends Model
{
    protected $table = 'membership_applications';
    
    protected $fillable = [
        'selected_tier',
        'tier_name',
        'tier_price',
        'legal_name',
        'institution_type',
        'institution_type_other',
        'country_registration',
        'registration_number',
        'year_established',
        'website',
        'address',
        'operating_jurisdictions',
        'contact_name',
        'contact_position',
        'contact_email',
        'contact_phone',
        'linkedin',
        'authorized_status',
        'primary_sector',
        'primary_sector_other',
        'trade_corridors',
        'capacity',
        'strategic_interests',
        'participation_objective',
        'seeking_opportunities',
        'market_exposure',
        'readiness_status',
        'verification_acknowledgement',
        'signature',
        'signature_date',
        'incorporation_file',
        'profile_file',
        'address_file',
        'id_file',
        'status',
        'admin_notes',
        'reviewed_at',
        'reviewed_by',
    ];
    
    protected $casts = [
        'trade_corridors' => 'array',
        'strategic_interests' => 'array',
        'seeking_opportunities' => 'array',
        'verification_acknowledgement' => 'boolean',
        'signature_date' => 'date',
        'year_established' => 'integer',
        'reviewed_at' => 'datetime',
    ];
    
    // Accessor for tier display name
    public function getTierDisplayNameAttribute()
    {
        $tiers = [
            'tier_i' => 'Tier I: Institutional & Institutional Partners',
            'tier_ii' => 'Tier II: Strategic Corporate Partners',
            'tier_iii' => 'Tier III: Institutional Members',
        ];
        return $tiers[$this->selected_tier] ?? $this->selected_tier;
    }
    
    // Accessor for status badge
    public function getStatusBadgeAttribute()
    {
        $badges = [
            'pending' => '<span class="badge badge-warning">Pending Review</span>',
            'under_review' => '<span class="badge badge-info">Under Review</span>',
            'approved' => '<span class="badge badge-success">Approved</span>',
            'rejected' => '<span class="badge badge-danger">Rejected</span>',
            'deferred' => '<span class="badge badge-secondary">Deferred</span>',
        ];
        return $badges[$this->status] ?? $this->status;
    }
}