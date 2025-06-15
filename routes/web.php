<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\DiscussionController;

// Route untuk halaman Home
Route::get('/', function () {
    return view('welcome');
})->name('home'); // <<< TAMBAHKAN .name('home') INI

// Route untuk halaman About
Route::get('/about', [AboutController::class, 'index'])->name('about.index'); // <<< TAMBAHKAN .name('about.index') INI

// Route untuk halaman Discussion
Route::get('/discussion', [DiscussionController::class, 'index'])->name('discussion.index'); // <<< TAMBAHKAN .name('discussion.index') INI

// Route untuk halaman daftar beasiswa (Scholarships Index)
// Hapus duplikasi, cukup satu dengan nama yang benar
Route::get('/scholarships', [ScholarshipController::class, 'index'])->name('scholarship.index');

// Route untuk detail beasiswa (Scholarships Show)
Route::get('/scholarships/{id}', [ScholarshipController::class, 'show'])->name('scholarship.show');