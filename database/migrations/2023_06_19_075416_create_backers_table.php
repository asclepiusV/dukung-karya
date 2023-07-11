<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('backers', function (Blueprint $table) {
            $table->id('backer_id');
            $table->foreignId('project_id')->references('project_id')->on('projects');
            $table->foreignId('user_id')->references('user_id')->on('users');
            $table->foreignId('reward_id')->references('reward_id')->on('rewards');
            $table->integer('contribution_amount');
            $table->timestamp('contribution_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backers');
    }
};