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
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id('keranjang_id');  // Kolom keranjang_id sebagai primary key
            $table->unsignedBigInteger('produk_id');  // Kolom produk_id merujuk ke products
            $table->integer('quantity');  // Kolom quantity produk dalam keranjang
            $table->decimal('harga', 10, 2);  // Kolom harga produk dalam keranjang
            $table->unsignedBigInteger('user_id');  // Kolom user_id merujuk ke users
            $table->timestamps();

            // Foreign key yang merujuk ke products
            $table->foreign('produk_id')->references('produk_id')->on('produk')->onDelete('cascade');
            // Foreign key yang merujuk ke users
            $table->foreign('user_id')->references('user_id')->on('pengguna')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang');
    }
};
