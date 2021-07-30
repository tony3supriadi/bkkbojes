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
Route::get('/daftar/konfirmasi', [App\Http\Controllers\DaftarController::class, 'confirm_page'])->name('daftar.konfirmasi');
Route::get('/daftar/berhasil', [App\Http\Controllers\DaftarController::class, 'success_page'])->name('daftar.berhasil');
Route::get('/lupa-sandi', [App\Http\Controllers\LupaSandiController::class, 'index'])->name('lupa-sandi');

Route::group([
    "prefix" => "/akun",
    "as" => "akun."
], function () {
    Route::get('/', [App\Http\Controllers\Akun\AkunController::class, 'redirectTo']);

    Route::group([
        "prefix" => "/profile-saya",
        "as" => "profile."
    ], function () {
        Route::get('/', [App\Http\Controllers\Akun\ProfileController::class, 'redirectTo'])->name('personal');

        Route::get('/personal', [App\Http\Controllers\Akun\ProfileController::class, 'personal'])->name('personal');
        Route::get('/personal/{id}/edit', [App\Http\Controllers\Akun\ProfileController::class, 'personal_edit'])->name('personal.edit');
        Route::put('/personal/{id}', [App\Http\Controllers\Akun\ProfileController::class, 'personal_update'])->name('personal.update');

        Route::get('/pengalaman', [App\Http\Controllers\Akun\ProfileController::class, 'pengalaman'])->name('pengalaman');
        Route::get('/pengalaman/{id}/edit', [App\Http\Controllers\Akun\ProfileController::class, 'pengalaman_edit'])->name('pengalaman.edit');
        Route::put('/pengalaman/{id}', [App\Http\Controllers\Akun\ProfileController::class, 'pengalaman_update'])->name('pengalaman.update');

        Route::get('/pendidikan', [App\Http\Controllers\Akun\ProfileController::class, 'pendidikan'])->name('pendidikan');
        Route::get('/pendidikan/{id}/edit', [App\Http\Controllers\Akun\ProfileController::class, 'pendidikan_edit'])->name('pendidikan.edit');
        Route::put('/pendidikan/{id}', [App\Http\Controllers\Akun\ProfileController::class, 'pendidikan_update'])->name('pendidikan.update');

        Route::get('/keterampilan', [App\Http\Controllers\Akun\ProfileController::class, 'keterampilan'])->name('keterampilan');
        Route::get('/keterampilan/{id}/edit', [App\Http\Controllers\Akun\ProfileController::class, 'keterampilan_edit'])->name('keterampilan.edit');
        Route::put('/keterampilan/{id}', [App\Http\Controllers\Akun\ProfileController::class, 'keterampilan_update'])->name('keterampilan.update');

        Route::get('/organisasi', [App\Http\Controllers\Akun\ProfileController::class, 'organisasi'])->name('organisasi');
        Route::get('/organisasi/{id}/edit', [App\Http\Controllers\Akun\ProfileController::class, 'organisasi_edit'])->name('organisasi.edit');
        Route::put('/organisasi/{id}', [App\Http\Controllers\Akun\ProfileController::class, 'organisasi_update'])->name('organisasi.update');
    });

    Route::get('/resume', [App\Http\Controllers\Akun\AkunController::class, 'resume'])->name('resume');
    Route::post('/resume/exports', [App\Http\Controllers\Akun\AkunController::class, 'resume_exports'])->name('resume-exports');

    Route::get('/pemberitahuan', [App\Http\Controllers\Akun\AkunController::class, 'pemberitahuan'])->name('pemberitahuan');
    Route::get('/pemberitahuan/{id}', [App\Http\Controllers\Akun\AkunController::class, 'pemberitahuan_detail'])->name('pemberitahuan-detail');

    Route::get('/lowongan-tersimpan', [App\Http\Controllers\Akun\AkunController::class, 'lowongan_tersimpan'])->name('lowongan-tersimpan');
    Route::get('/lamaran-terkirim', [App\Http\Controllers\Akun\AkunController::class, 'lamaran_terkirim'])->name('lamaran-terkirim');
    Route::get('/latihan-tes', [App\Http\Controllers\Akun\AkunController::class, 'latihan_tes'])->name('latihan-tes');
});
