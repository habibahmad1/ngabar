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
        Schema::create('reedems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('code')->unique();
            $table->integer('duration');
            $table->integer('kuota')->default(1);
            $table->boolean('status_redeemed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reedems');
    }
};
