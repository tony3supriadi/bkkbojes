<?php


use App\Http\Controllers\{LoginController, DaftarController, LupaSandiController};
use App\Http\Controllers\{HomeController, LowonganController, PengumumanController, DaftarMitraController};
use App\Http\Controllers\{TestimonialController, FaqController, TentangKamiController};
use App\Http\Controllers\{KetentuanPenggunaanController, KebijakanPrivasiController};
use App\Http\Controllers\Akun\{AkunController, ProfileController};
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'redirectTo']);

/** Routes Akun - Guest */
//Navbar - Footer
Route::get('lowongan', [LowonganController::class, 'index'])->name('lowongan');
Route::get('lowongan-detail', [LowonganController::class, 'lowongan_detail'])->name('lowongan-detail');
Route::get('pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('daftar-mitra', [DaftarMitraController::class, 'index'])->name('daftar-mitra');
Route::get('testimonial', [TestimonialController::class, 'index'])->name('testimonial');
Route::get('faq', [FaqController::class, 'index'])->name('faq');
Route::get('tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');
Route::get('ketentuan-penggunaan', [KetentuanPenggunaanController::class, 'index'])->name('ketentuan-penggunaan');
Route::get('kebijakan-privasi', [KebijakanPrivasiController::class, 'index'])->name('kebijakan-privasi');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);

//Daftar Akun
Route::get('daftar', [DaftarController::class, 'index'])->name('daftar');
Route::post('daftar', [DaftarController::class, 'register']);
Route::get('/daftar/konfirmasi', [DaftarController::class, 'confirm_page'])->name('verification.notice');
Route::post('/daftar/konfirmasi/resend', [DaftarController::class, 'confirm_resend'])
    ->name('verification.resend')->middleware(['auth:personal', 'throttle:6,1']);
Route::get('/daftar/konfirmasi/{id}/{hash}', [DaftarController::class, 'confirm_verify'])
    ->name('verification.verify')->middleware(['auth:personal', 'signed', 'throttle:6,1']);
Route::get('/daftar/berhasil', [DaftarController::class, 'success_page'])->name('daftar.berhasil');

Route::get('/lupa-sandi', [LupaSandiController::class, 'index'])->name('lupa-sandi');

Route::post('/logout', [LoginController::class, 'logout'])->name('akun.logout');

/** Routes Akun - Login */
Route::group([
    "prefix" => "/akun",
    "as" => "akun.",
    "middleware" => ["auth:personal", "verified"]
], function () {
    Route::get('/', [AkunController::class, 'redirectTo']);

    Route::group([
        "prefix" => "/profile-saya",
        "as" => "profile."
    ], function () {
        Route::get('/', [ProfileController::class, 'redirectTo'])->name('personal');

        Route::get('/personal', [ProfileController::class, 'personal'])->name('personal');
        Route::get('/personal/{id}/edit', [ProfileController::class, 'personal_edit'])->name('personal.edit');
        Route::put('/personal/{id}', [ProfileController::class, 'personal_update'])->name('personal.update');

        Route::get('/pengalaman', [ProfileController::class, 'pengalaman'])->name('pengalaman');
        Route::get('/pengalaman/tambah', [ProfileController::class, 'pengalaman_create'])->name('pengalaman.create');
        Route::post('/pengalaman', [ProfileController::class, 'pengalaman_store'])->name('pengalaman.store');
        Route::get('/pengalaman/{id}/edit', [ProfileController::class, 'pengalaman_edit'])->name('pengalaman.edit');
        Route::put('/pengalaman/{id}', [ProfileController::class, 'pengalaman_update'])->name('pengalaman.update');
        Route::delete('/pengalaman/{id}', [ProfileController::class, 'pengalaman_destroy'])->name('pengalaman.destroy');

        Route::get('/pendidikan', [ProfileController::class, 'pendidikan'])->name('pendidikan');
        Route::get('/pendidikan/create', [ProfileController::class, 'pendidikan_create'])->name('pendidikan.create');
        Route::post('/pendidikan', [ProfileController::class, 'pendidikan_store'])->name('pendidikan.store');
        Route::get('/pendidikan/{id}/edit', [ProfileController::class, 'pendidikan_edit'])->name('pendidikan.edit');
        Route::put('/pendidikan/{id}', [ProfileController::class, 'pendidikan_update'])->name('pendidikan.update');
        Route::delete('/pendidikan/{id}', [ProfileController::class, 'pendidikan_destroy'])->name('pendidikan.destroy');

        Route::get('/keterampilan', [ProfileController::class, 'keterampilan'])->name('keterampilan');
        Route::get('/keterampilan/edit', [ProfileController::class, 'keterampilan_edit'])->name('keterampilan.edit');
        Route::put('/keterampilan', [ProfileController::class, 'keterampilan_update'])->name('keterampilan.update');
        Route::delete('/keterampilan/{id}', [ProfileController::class, 'keterampilan_destroy'])->name('keterampilan.destroy');

        Route::get('/organisasi', [ProfileController::class, 'organisasi'])->name('organisasi');
        Route::get('/organisasi/tambah', [ProfileController::class, 'organisasi_create'])->name('organisasi.create');
        Route::post('/organisasi', [ProfileController::class, 'organisasi_store'])->name('organisasi.store');
        Route::get('/organisasi/{id}/edit', [ProfileController::class, 'organisasi_edit'])->name('organisasi.edit');
        Route::put('/organisasi/{id}', [ProfileController::class, 'organisasi_update'])->name('organisasi.update');
        Route::delete('/organisasi/{id}', [ProfileController::class, 'organisasi_destroy'])->name('organisasi.destroy');
    });

    Route::get('/resume', [AkunController::class, 'resume'])->name('resume');
    Route::get('/resume/download', [AkunController::class, 'resume_download'])->name('resume-download');
    Route::get('/resume/view/stream', [AkunController::class, 'resume_stream'])->name('resume-stream');

    Route::get('/pemberitahuan', [AkunController::class, 'pemberitahuan'])->name('pemberitahuan');
    Route::get('/pemberitahuan/{id}', [AkunController::class, 'pemberitahuan_detail'])->name('pemberitahuan-detail');

    Route::get('/lowongan-tersimpan', [AkunController::class, 'lowongan_tersimpan'])->name('lowongan-tersimpan');
    Route::get('/lamaran-terkirim', [AkunController::class, 'lamaran_terkirim'])->name('lamaran-terkirim');
    Route::get('/latihan-tes', [AkunController::class, 'latihan_tes'])->name('latihan-tes');
});


/** Routes Admin */
Route::get('/bkk-admin', [App\Http\Controllers\Admin\AdminController::class, 'redirectTo']);
Route::get('/app', [App\Http\Controllers\Admin\AdminController::class, 'redirectTo']);
Route::get('/app/v1', [App\Http\Controllers\Admin\AdminController::class, 'redirectTo']);

Route::group([
    "prefix" => "/app/v1/bkk-admin",
    "as" => "admin."
], function () {

    Route::get("/login", [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('auth.login');
    Route::post("/login", [App\Http\Controllers\Admin\AuthController::class, 'login']);

    Route::get("/akses-ditolak", [App\Http\Controllers\Admin\AuthController::class, 'deniedAccess'])->name('akses-ditolak');

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
});
