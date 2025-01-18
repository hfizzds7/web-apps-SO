<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'nama_produk' => 'ASUS ROG Strix XG32VQ',
                'harga' => 4000000.00,
                'quantity' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'ASUS ROG STRIX XG49VQ',
                'harga' => 5400000.00,
                'quantity' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Monitor Asus ROG Strix XG27AQMR Gaming Monitor',
                'harga' => 5500000.00,
                'quantity' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Monitor Gaming LG Full HD UltraGear 31,5',
                'harga' => 3800000.00,
                'quantity' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Monitor LG 27GS60F-B 27 UltraGear FHD IPS 180Hz 1ms Gaming',
                'harga' => 3500000.00,
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'HP 14s-FQ0591AU',
                'harga' => 6000000.00,
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'laptop-hp-pavilion-plus-14-ey0017au-ryzen-5-8r296pa-ar6-1',
                'harga' => 7500000.00,
                'quantity' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'laptop-msi-thin-gf63-12ucx-intel-core-i5-9s7-16r821-1013-1',
                'harga' => 1200000.00,
                'quantity' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'lenovo-LOQ-15IRX9',
                'harga' => 1300000.00,
                'quantity' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'msi-katana-15-B13V',
                'harga' => 1500000.00,
                'quantity' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'asus-geforce-rtx-4070-super-12gb-gddr6x-192bits',
                'harga' => 8000000.00,
                'quantity' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Vga Rog Strix Geforce Rtx 4090 Oc Edition 24gb Gddr6x',
                'harga' => 1000000.00,
                'quantity' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'GeForce GTX 1650 GAMING X 4G',
                'harga' => 7800000.00,
                'quantity' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'VGA Gigabyte GeForce GTX 1050 Ti OC 4G',
                'harga' => 7500000.00,
                'quantity' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
