<?php

// app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // <-- 1. Import Trait

class Product extends Model
{
    use SoftDeletes; // <-- 2. Gunakan Trait

    protected $fillable = [
        'name', 
        'category', 
        'description', 
        'price', 
        'stock', 
        'image', 
        'net_weight'
    ]; 
    
    // Opsional: Pastikan Model terhubung ke nama tabel yang benar (jika bukan 'products')
    // protected $table = 'nama_table_anda'; 
}
