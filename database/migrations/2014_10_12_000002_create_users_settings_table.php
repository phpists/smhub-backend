<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users_settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('user_id');
            $table->string('login');
            $table->string('password');
            $table->boolean('black_list_status');
            $table->boolean('white_list_status');
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
