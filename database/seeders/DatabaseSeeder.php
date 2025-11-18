<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // DAFTARKAN SEEDER PRODUK ANDA DI SINI
        $this->call([
            ProductSeeder::class, // <-- BARIS INI WAJIB DITAMBAHKAN
        ]);
    }
}