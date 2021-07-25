<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/lowongan', [App\Http\Controllers\LowonganController::class, 'index'])->name('lowongan');
Route::get('/pengumuman', [App\Http\Controllers\PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/daftar-mitra', [App\Http\Controllers\DaftarMitraController::class, 'index'])->name('daftar-mitra');
Route::get('/testimonial', [App\Http\Controllers\DaftarMitraController::class, 'index'])->name('testimonial');
Route::get('/faq', [App\Http\Controllers\DaftarMitraController::class, 'index'])->name('faq');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'index'])->name('daftar');
Route::get('/lupa-sandi', [App\Http\Controllers\LupaSandiController::class, 'index'])->name('lupa-sandi');
