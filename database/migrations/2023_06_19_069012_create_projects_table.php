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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('project_id');
            $table->string('project_name');
            $table->string('slug')->unique()->nullable();
            $table->foreignId('user_id')->nullable()->references('user_id')->on('users');
            $table->foreignId('category_id')->references('category_id')->on('categories');
            $table->text('description')->nullable();
            $table->char('funding_goal', 30)->nullable();
            $table->char('current_funding', 30)->nullable();
            $table->char('duration_fund')->nullable();
            $table->boolean('is_validated')->default(false);
            // $table->binary('img_project')->nullable();
            $table->string('img_project');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
