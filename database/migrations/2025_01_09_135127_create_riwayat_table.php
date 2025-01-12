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
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id('riwayat_id');  // Kolom history_id sebagai primary key
            $table->unsignedBigInteger('payment_id');  
            $table->enum('status', ['pending', 'completed', 'failed']);  
            $table->unsignedBigInteger('change_by');  
            $table->timestamps();

            // Foreign key yang merujuk ke payments
            $table->foreign('payment_id')->references('payment_id')->on('payment')->onDelete('cascade');
            // Foreign key untuk user yang melakukan perubahan
            $table->foreign('change_by')->references('user_id')->on('pengguna')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat');
    }
};
