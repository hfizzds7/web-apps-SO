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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id('transaction_id');  // Kolom transaction_id sebagai primary key
            $table->unsignedBigInteger('payment_id');  
            $table->decimal('amount', 10, 2);  // Kolom amount untuk jumlah transaksi
            $table->date('transaction_date');  // Kolom tanggal transaksi
            $table->enum('status', ['pending', 'completed', 'failed']);   
            $table->timestamps();

            // Foreign key yang merujuk ke payments
            $table->foreign('payment_id')->references('payment_id')->on('payment')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
