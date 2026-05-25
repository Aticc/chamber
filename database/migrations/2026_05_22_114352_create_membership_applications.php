<?php
// database/migrations/2026_01_01_000001_create_membership_applications_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('membership_applications', function (Blueprint $table) {
            $table->id();
            
            // Selected Tier Info
            $table->string('selected_tier'); // tier_i, tier_ii, tier_iii
            $table->string('tier_name');
            $table->string('tier_price');
            
            // Section 1: Organization Profile
            $table->string('legal_name');
            $table->string('institution_type');
            $table->string('institution_type_other')->nullable();
            $table->string('country_registration');
            $table->string('registration_number')->nullable();
            $table->integer('year_established')->nullable();
            $table->string('website')->nullable();
            $table->text('address');
            $table->text('operating_jurisdictions')->nullable();
            
            // Section 2: Primary Contact
            $table->string('contact_name');
            $table->string('contact_position');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('linkedin')->nullable();
            $table->string('authorized_status');
            
            // Section 3: Strategic Alignment
            $table->string('primary_sector');
            $table->string('primary_sector_other')->nullable();
            $table->text('trade_corridors')->nullable(); // JSON stored
            $table->string('capacity')->nullable();
            $table->text('strategic_interests')->nullable(); // JSON stored
            $table->text('participation_objective')->nullable();
            
            // Section 4: Capital Alignment
            $table->text('seeking_opportunities')->nullable(); // JSON stored
            $table->text('market_exposure')->nullable();
            $table->string('readiness_status')->nullable();
            
            // Section 5: Verification & Documents
            $table->boolean('verification_acknowledgement')->default(false);
            $table->string('signature');
            $table->date('signature_date');
            
            // File paths
            $table->string('incorporation_file')->nullable();
            $table->string('profile_file')->nullable();
            $table->string('address_file')->nullable();
            $table->string('id_file')->nullable();
            
            // Status tracking
            $table->enum('status', ['pending', 'under_review', 'approved', 'rejected', 'deferred'])->default('pending');
            $table->text('admin_notes')->nullable();
            $table->timestamp('reviewed_at')->nullable();
            $table->foreignId('reviewed_by')->nullable()->constrained('users')->nullOnDelete();
            
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('membership_applications');
    }
};