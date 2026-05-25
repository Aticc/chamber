<?php
// database/migrations/2026_05_14_095143_create_transactions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            // Remove foreign key constraints or make them nullable without constraint
            $table->unsignedBigInteger('member_id')->nullable();
            $table->unsignedBigInteger('counterparty_id')->nullable();
            $table->string('transaction_ref')->unique();
            $table->string('type'); // membership, payment, trade, investment
            $table->string('currency', 3)->default('USD');
            $table->decimal('amount', 15, 2);
            $table->decimal('processing_fee', 10, 2)->default(0);
            $table->decimal('tax', 10, 2)->default(0);
            $table->decimal('total_amount', 15, 2);
            $table->string('status'); // pending, completed, failed, refunded
            $table->string('payment_method')->nullable();
            $table->json('metadata')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
            
            // Add indexes for performance
            $table->index('member_id');
            $table->index('transaction_ref');
            $table->index('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};