<?php

namespace Database\Seeders;

use App\Models\TentangKami;
use Illuminate\Database\Seeder;

class TentangKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $daftarTentang = [
            [
                "tentang_kami" => "Latar Belakang",
                "deskripsi_tentang_kami" => "<p>Kemudahan teknologi memudahkan kita mengakses informasi lowongan kerja, sayangnya terlalu banyak informasi justru menjadi tantangan untuk melakukan seleksi dalam memilih dan memvalidasi informasi lowongan kerja yang ada di internet. Tidak hanya itu, jaminan keamanan data juga menjadi perhatian agar tidak disalahgunakan, berangkat dari situ, kami membangun situs ini untuk memberikan solusi terhadap masalah yang dialami para pencari kerja khususnya siswa SMK N 1 Bojongsari, walaupun tidak terbatas untuk siswa atau alumni saja, tapi juga dapat diakses oleh pengguna umum.</p><p>Bagi Instansi/ perusahaan juga dapat lebih mudah mendapatkan calon tenaga kerja lulusan SMK yang sesuai dengan kualifikasi perusahaan, mengirimkan informasi lowongan kerja ke situs ini, untuk mendapatkan calon tenaga kerja yang sesuai dengan kriteria/ kualifikasi yang diinginkan.</p>",
                "urutan" => 1
            ],
            [
                "tentang_kami" => "Fitur / Layanan Kami",
                "deskripsi_tentang_kami" => "<h5>Untuk calon tenaga kerja :</h5><ul><li>Pendaftaran Akun</li><li>Mesin pencarian lowongan kerja dengan filter untuk memudahkan pencarian yang lebih spesifik</li><li>Fitur Ajukan Lamaran untuk melamar pekerjaan langsung</li><li>Dashboard profil untuk memperbaharui profil dan Resume</li><li>Laman Pengumuman untuk mengetahui update terkini</li><li>Email Subscription, langganan email untuk menerima informasi terkini terkait informasi lowongan yang dilamar</li><li>Unduh untuk mencetak Resume</li></ul>",
                "urutan" => 2
            ],
            [
                "tentang_kami" => "Legalitas",
                "deskripsi_tentang_kami" => "Surat Keputusan Kepala SMK N 1 Bojongsari Nomor -",
                "urutan" => 3
            ],
            [
                "tentang_kami" => "Kepengurusan",
                "deskripsi_tentang_kami" => "<p><strong>Penanggung Jawab</strong><br />Lorem ipsum dolor sit amet</p>
                <p><strong>Pembina</strong><br />Lorem ipsum dolor sit amet</p>
                <p><strong>Ketua BKK</strong><br />Lorem ipsum dolor sit amet</p>
                <p><strong>Petugas Administrasi/tata Usaha & Pendaftaran</strong><br />Lorem ipsum dolor sit amet</p>
                <p><strong>Petugas Penyuluhan & Bimbingan Jabatan dan Analisis Jabatan</strong><br />Lorem ipsum dolor sit amet</p>
                <p><strong>Petugas Informasi Pasar Kerja & Penelusuran Alumni</strong><br />Lorem ipsum dolor sit amet</p>
                <p><strong>Petugas Penempatan Kerja dan Kunjungan Perusahaan</strong><br />Lorem ipsum dolor sit amet</p>
                <p><strong>Web Administrator</strong><br />Lorem ipsum dolor sit amet</p>",
                "urutan" => 4
            ],
            [
                "tentang_kami" => "Hubungi Kami",
                "deskripsi_tentang_kami" => "<strong>Alamat : </strong> - <br /><strong>Telepon : </strong> - <br /><strong>Email : </strong> - <br />",
                "urutan" => 5
            ]
        ];

        foreach ($daftarTentang as $item) {
            TentangKami::create($item);
        }
    }
}
