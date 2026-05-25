<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('org_name');
            $table->string('org_type')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('country')->nullable();
            $table->string('website')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('position')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('selected_tier')->nullable();
            $table->string('selected_amount')->nullable();
            $table->enum('status', ['pending', 'under_review', 'approved', 'rejected', 'deferred'])->default('pending');
            $table->string('password');
            $table->string('membership_level')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('members');
    }
};