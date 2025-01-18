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
        Schema::create('payment', function (Blueprint $table) {
            $table->id('payment_id'); //PK dari tabel pembayaran
            $table->unsignedBigInteger('user_id'); 
            $table->date('payment_date');  	
            $table->enum('status', ['pending', 'completed', 'failed']);  
            $table->string('transaction_id')->unique();  
            $table->timestamps();  
            
            // Foreign key yang merujuk ke users
            $table->foreign('user_id')->references('user_id')->on('pengguna')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
