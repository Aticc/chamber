<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('event_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            $table->string('status')->default('pending'); // pending, confirmed, cancelled, waitlisted
            $table->text('special_requests')->nullable();
            $table->timestamps();
            
            $table->unique(['event_id', 'member_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_registrations');
    }
};