<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Tambah column category
            $table->string('category')->after('name');
            
            // Tambah column stock  
            $table->integer('stock')->default(0)->after('price');
            
            // Rename column weight ke net_weight
            $table->renameColumn('weight', 'net_weight');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // Hapus column category
            $table->dropColumn('category');
            
            // Hapus column stock
            $table->dropColumn('stock');
            
            // Kembalikan rename column
            $table->renameColumn('net_weight', 'weight');
        });
    }
};