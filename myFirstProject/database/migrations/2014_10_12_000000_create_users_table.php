<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();                          // Primary key
            $table->string('name');                // Full name
            $table->string('email')->unique();     // Login email
            $table->timestamp('email_verified_at')->nullable(); // Optional verification
            $table->string('password');            // Hashed password
            $table->string('role')->default('customer'); // Role: admin, pharmacist, customer
            $table->string('phone')->nullable();   // Optional phone
            $table->text('address')->nullable();   // Optional address
            $table->rememberToken();               // For auth remember me
            $table->timestamps();                  // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};