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
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('type');
            $tale->string('description');
            $table->text('body');
            $table->string('image')->nullable();
            $table->enum('status', ['draft', 'live', 'removed'])->default('draft');
            $tale->string('keyphrase')->nullable();
            $table->string('seo-title')->nullable();
            $table->string('slug')->nullable();
            $table->string('meta')->nullable();
            $table->unsignedBigInteger('author')->required();
            $table->foreign('author')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('category')->required();
            $table->foreign('category')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
