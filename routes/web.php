<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// 1. HOME - Halaman Utama
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. ABOUT - Tentang Kami
Route::get('/about', function () {
    return view('about');
})->name('about');

// 3. PROGRAM - Program & Produk
Route::get('/program', [ProductController::class, 'index'])->name('program.index'); 
Route::get('/program/{id}', [ProductController::class, 'show'])->name('program.show');
// 4. OUR TEAM - Tim Kami
Route::get('/team', function () {
    return view('ourteam');
})->name('ourteam');

// 5. CONTACT US - Hubungi Kami
Route::get('/contact', function () {
    return view('contactus');
})->name('contactus');

// 6. REDIRECT - Alias untuk about
Route::redirect('/about-us', '/about');

// 7. FALLBACK - Halaman 404 (harus paling bawah)
Route::fallback(function () {
    return view('404');
});