<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'redirectTo']);

Route::get('/lowongan', [App\Http\Controllers\LowonganController::class, 'index'])->name('lowongan');
Route::get('/pengumuman', [App\Http\Controllers\PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/daftar-mitra', [App\Http\Controllers\DaftarMitraController::class, 'index'])->name('daftar-mitra');
Route::get('/testimonial', [App\Http\Controllers\DaftarMitraController::class, 'index'])->name('testimonial');
Route::get('/faq', [App\Http\Controllers\DaftarMitraController::class, 'index'])->name('faq');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');

Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'index'])->name('daftar');
Route::post('/daftar', [App\Http\Controllers\DaftarController::class, 'process_register']);

Route::get('/daftar/konfirmasi', [App\Http\Controllers\DaftarController::class, 'confirm_page'])->name('daftar.konfirmasi');

Route::post('/daftar/konfirmasi/resend', [App\Http\Controllers\DaftarController::class, 'confirm_resend'])
    ->name('daftar.konfirmasi.resend')
    ->middleware(["auth", "throttle:6,1"]);
Route::post('/daftar/konfirmasi/{id}/{hash}', [App\Http\Controllers\DaftarController::class, 'confirm_process'])
    ->name('daftar.konfirmasi.process')
    ->middleware(["auth", "throttle:6,1", "signed"]);

Route::get('/daftar/berhasil', [App\Http\Controllers\DaftarController::class, 'success_page'])->name('daftar.berhasil');

Route::get('/lupa-sandi', [App\Http\Controllers\LupaSandiController::class, 'index'])->name('lupa-sandi');

Route::group([
    "prefix" => "/akun",
    "as" => "akun.",
    "middleware" => ["auth:personal"]
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

/** Routes Admin */
Route::get('/bkk-admin', [App\Http\Controllers\Admin\AdminController::class, 'redirectTo']);
Route::get('/app', [App\Http\Controllers\Admin\AdminController::class, 'redirectTo']);
Route::get('/app/v1', [App\Http\Controllers\Admin\AdminController::class, 'redirectTo']);

Route::group([
    "prefix" => "/app/v1/bkk-admin",
    "as" => "admin."
], function () {

    Route::group([
        "middleware" => ["auth:admin", "authIsAdmin"]
    ], function () {
        Route::get("/", [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('index');
        Route::get("/dashboard", [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

        //Master Data
        Route::delete("/pengguna", [App\Http\Controllers\Admin\PenggunaController::class, "bulk_destroy"])->name("pengguna.bulk-destroy");
        Route::resource("/pengguna", App\Http\Controllers\Admin\PenggunaController::class)
            ->except(["show"]);
        
        Route::delete("/mitra", [App\Http\Controllers\Admin\MitraController::class, "bulk_destroy"])->name("mitra.bulk-destroy");
        Route::resource("/mitra", App\Http\Controllers\Admin\MitraController::class)
                ->except(["show"]);

        //Transaction
        Route::delete("/lowongan", [App\Http\Controllers\Admin\LowonganController::class, "bulk_destroy"])->name("lowongan.bulk-destroy");
        Route::resource("/lowongan", App\Http\Controllers\Admin\LowonganController::class)
            ->except(["show"]);

        Route::delete("/pengumuman", [App\Http\Controllers\Admin\PengumumanController::class, "bulk_destroy"])->name("pengumuman.bulk-destroy");
        Route::resource("/pengumuman", App\Http\Controllers\Admin\PengumumanController::class)
                ->except(["show"]);

        //Pages
        Route::delete("/faq", [App\Http\Controllers\Admin\FaqController::class, "bulk_destroy"])->name("faq.bulk-destroy");
        Route::resource("/faq", App\Http\Controllers\Admin\FaqController::class)
            ->except(["show"]);

        Route::delete("/ketentuan-pengguna", [App\Http\Controllers\Admin\KetentuanPenggunaanController::class, "bulk_destroy"])->name("ketentuan-pengguna.bulk-destroy");
        Route::resource("/ketentuan-pengguna", App\Http\Controllers\Admin\KetentuanPenggunaanController::class)
            ->except(["show"]);

        Route::delete("/kebijakan-privasi", [App\Http\Controllers\Admin\KebijakanPrivasiController::class, "bulk_destroy"])->name("kebijakan-privasi.bulk-destroy");
        Route::resource("/kebijakan-privasi", App\Http\Controllers\Admin\KebijakanPrivasiController::class)
            ->except(["show"]);

        Route::delete("/tentang-kami", [App\Http\Controllers\Admin\TentangKamiController::class, "bulk_destroy"])->name("tentang-kami.bulk-destroy");
        Route::resource("/tentang-kami", App\Http\Controllers\Admin\TentangKamiController::class)
            ->except(["show"]);

        Route::delete("/testimonial", [App\Http\Controllers\Admin\TestimonialController::class, "bulk_destroy"])->name("testimonial.bulk-destroy");
        Route::resource("/testimonial", App\Http\Controllers\Admin\TestimonialController::class)
            ->except(["show"]);

        //Setting
        Route::delete("/manage-admin", [App\Http\Controllers\Admin\ManageAdminController::class, "bulk_destroy"])->name("manage-admin.bulk-destroy");
        Route::resource("/manage-admin", App\Http\Controllers\Admin\ManageAdminController::class)
            ->except(["show"]);
        
        Route::delete("/alamat", [App\Http\Controllers\Admin\AlamatController::class, "bulk_destroy"])->name("alamat.bulk-destroy");
        Route::resource("/alamat", App\Http\Controllers\Admin\AlamatController::class)
            ->except(["show"]);

        Route::delete("/hak-cipta", [App\Http\Controllers\Admin\HakCiptaController::class, "bulk_destroy"])->name("hak-cipta.bulk-destroy");
        Route::resource("/hak-cipta", App\Http\Controllers\Admin\HakCiptaController::class)
            ->except(["show"]);
        
        Route::delete("/link", [App\Http\Controllers\Admin\LinkController::class, "bulk_destroy"])->name("link.bulk-destroy");
        Route::resource("/link", App\Http\Controllers\Admin\LinkController::class)
            ->except(["show"]);

        Route::post("/logout", [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    });

    Route::get("/login", [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('auth.login');
    Route::post("/login", [App\Http\Controllers\Admin\AuthController::class, 'login']);

    Route::get("/akses-ditolak", [App\Http\Controllers\Admin\AuthController::class, 'deniedAccess'])->name('akses-ditolak');
});
