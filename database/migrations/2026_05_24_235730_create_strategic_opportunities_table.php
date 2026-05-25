<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('strategic_opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('tier'); // tier_i, tier_ii, tier_iii
            $table->string('title');
            $table->text('description');
            $table->string('category'); // opportunity, event, deal
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->string('status')->nullable(); // Active, Matching, Vetting, Due Diligence
            $table->string('sector')->nullable();
            $table->string('location')->nullable();
            $table->date('event_date')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('strategic_opportunities');
    }
};