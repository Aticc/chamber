<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    protected $table = 'members';
    
    protected $fillable = [
        'org_name', 
        'org_type', 
        'registration_number', 
        'country', 
        'website',
        'first_name', 
        'last_name', 
        'position', 
        'email', 
        'phone',
        'selected_tier', 
        'selected_amount', 
        'status', 
        'password',
        'region_id', 
        'country_code', 
        'timezone', 
        'business_interests', 
        'membership_level'
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];
    
    public function isApproved()
    {
        return $this->status === 'approved';
    }

    public function isPending()
    {
        return $this->status === 'pending';
    }
}