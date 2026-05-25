<?php
// app/Models/Transaction.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'member_id', 'counterparty_id', 'transaction_ref', 'type', 'currency',
        'amount', 'processing_fee', 'tax', 'total_amount', 'status', 
        'payment_method', 'metadata', 'completed_at'
    ];

    protected $casts = [
        'metadata' => 'array',
        'completed_at' => 'datetime',
        'amount' => 'decimal:2',
        'processing_fee' => 'decimal:2',
        'tax' => 'decimal:2',
        'total_amount' => 'decimal:2',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function counterparty()
    {
        return $this->belongsTo(Member::class, 'counterparty_id');
    }

    public static function generateReference()
    {
        return 'ATICC-' . strtoupper(uniqid()) . '-' . rand(1000, 9999);
    }
}