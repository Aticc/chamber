<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('event_type'); // summit, mission, forum, webinar, roundtable
            $table->string('event_category'); // institutional, investment, leadership, trade
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('location');
            $table->string('venue')->nullable();
            $table->json('access_tiers')->nullable(); // ['tier_i', 'tier_ii', 'tier_iii']
            $table->boolean('is_invitation_only')->default(false);
            $table->string('registration_link')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('agenda_file')->nullable();
            $table->integer('capacity')->nullable();
            $table->integer('registered_count')->default(0);
            $table->enum('status', ['draft', 'published', 'cancelled'])->default('draft');
            $table->boolean('is_past')->default(false);
            $table->string('highlights_link')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
};