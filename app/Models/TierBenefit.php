<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TierBenefit extends Model
{
    protected $table = 'tier_benefits';

    protected $fillable = [
        'tier', 'benefit', 'order', 'is_active'
    ];

    // Scope for specific tier
    public function scopeForTier($query, $tier)
    {
        return $query->where('tier', $tier)->where('is_active', true)->orderBy('order');
    }
}