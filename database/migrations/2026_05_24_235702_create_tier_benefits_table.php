<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tier_benefits', function (Blueprint $table) {
            $table->id();
            $table->string('tier'); // tier_i, tier_ii, tier_iii
            $table->string('benefit');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tier_benefits');
    }
};