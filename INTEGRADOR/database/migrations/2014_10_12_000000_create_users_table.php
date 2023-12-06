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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique(); //ya estaba
            $table->timestamp('email_verified_at')->nullable(); //ya estaba
            $table->string('password');
            $table->string('first_name')->nullable();
            $table->string('last_name1')->nullable();
            $table->string('last_name2')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('rol')->nullable();
            $table->string('avatar')->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
