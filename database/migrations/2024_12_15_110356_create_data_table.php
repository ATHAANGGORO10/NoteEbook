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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('banner')->nullable();
            $table->string('cover')->nullable();
            $table->string('icons')->nullable();
            $table->string('title');
            $table->string('author');
            $table->string('label');
            $table->string('category');
            $table->string('code')->nullable();
            $table->string('url');
            $table->string('shinopsis')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
