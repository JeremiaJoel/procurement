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
        Schema::create('admins', function (Blueprint $table) {
            $table->string('admins');
            //Kolom tambahan untuk menghubungkan ke tabel user
            $table->string('admin_name');
            $table->unsignedBigInteger('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('phone_number');
            $table->string('email');
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
