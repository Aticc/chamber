<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StrategicOpportunity extends Model
{
    protected $table = 'strategic_opportunities';

    protected $fillable = [
        'tier', 'title', 'description', 'category', 'button_text', 'button_link',
        'status', 'sector', 'location', 'event_date', 'order', 'is_active'
    ];

    protected $casts = [
        'event_date' => 'date',
    ];

    // Scope for specific tier
    public function scopeForTier($query, $tier)
    {
        return $query->where('tier', $tier)->where('is_active', true)->orderBy('order');
    }

    // Scope for opportunities by category
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}