<?php

namespace Database\Seeders;

use App\Models\KetentuanPenggunaan;
use Illuminate\Database\Seeder;

class KetentuanPenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ketentuan_pengguna = [
            [
                'nama_ketentuan' => 'Perjanjian yang mengikat',
                'deskripsi_ketentuan' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nisi diam, tincidunt vitae nisl sit amet, mattis venenatis ligula. Morbi euismod lorem non efficitur rutrum. Nunc semper est risus, ac consectetur sapien consectetur id. Morbi dui massa, fringilla ac ullamcorper et, accumsan vitae mauris. Nunc placerat odio non leo scelerisque bibendum. In tincidunt felis placerat, condimentum ex quis, lobortis sapien. Etiam sit amet sapien commodo, lobortis enim sit amet, scelerisque nibh. Nullam at molestie elit. Curabitur pulvinar sapien sed ipsum mollis eleifend a in arcu. Sed malesuada nibh vestibulum dolor scelerisque elementum. Cras id nibh cursus, semper quam vitae, viverra nunc. Etiam pulvinar justo arcu, et faucibus nulla sollicitudin eget. Quisque pretium sit amet urna in semper. Etiam molestie, neque et condimentum gravida, nibh libero efficitur sem, vitae maximus lacus urna at eros. Aliquam fermentum orci tortor, a lacinia tortor malesuada non.</p><p>Mauris porta velit ac ligula feugiat convallis. Fusce sodales vitae magna at iaculis. Aenean non tellus dictum, mollis massa sed, tristique odio. Donec laoreet risus sed dui pulvinar, sit amet tempus purus gravida. Mauris sed diam dolor. Integer sit amet felis tincidunt metus imperdiet aliquam vitae faucibus felis. Aliquam turpis nisi, eleifend et libero eget, ultrices sagittis massa. Mauris vehicula ullamcorper metus, non cursus dolor feugiat nec. Nunc lacinia mollis neque ac consectetur. Aliquam vitae laoreet erat, eu pretium nisi. Maecenas sed mi dui. Curabitur turpis nisi, consectetur in blandit et, dapibus aliquet elit. Nulla neque purus, hendrerit eu euismod non, imperdiet vitae elit.</p><p>Praesent et faucibus dui. Fusce congue egestas mi id elementum. Nam maximus enim quis justo sodales congue. Sed non nisi non risus porta ultricies sed lobortis ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent est erat, maximus cursus auctor ut, lacinia vel orci. Sed gravida dolor vel libero hendrerit fermentum.</p>',
                'urutan' => 1
            ],
            [
                'nama_ketentuan' => 'Definisi',
                'deskripsi_ketentuan' => '',
                'urutan' => 2
            ],
            [
                'nama_ketentuan' => 'Pendaftaran',
                'deskripsi_ketentuan' => '',
                'urutan' => 3
            ],
            [
                'nama_ketentuan' => 'Kata Sandi dan Keamanan',
                'deskripsi_ketentuan' => '',
                'urutan' => 4
            ],
            [
                'nama_ketentuan' => 'Hak Milik Intelektual (Intellectual Property Right)',
                'deskripsi_ketentuan' => '',
                'urutan' => 5
            ],
            [
                'nama_ketentuan' => 'Ketersediaan situs web Bursa Kerja Khusus SMK N 1 Bojongsari',
                'deskripsi_ketentuan' => '',
                'urutan' => 6
            ],
            [
                'nama_ketentuan' => 'Penggunaan anda atas situs web Bursa Kerja Khusus SMK N 1 Bojongsari',
                'deskripsi_ketentuan' => '',
                'urutan' => 7
            ],
            [
                'nama_ketentuan' => 'Penggunaan anda atas layanan',
                'deskripsi_ketentuan' => '',
                'urutan' => 8
            ],
            [
                'nama_ketentuan' => 'Ketentuan tambahan berlaku untuk Pengusaha',
                'deskripsi_ketentuan' => '',
                'urutan' => 9
            ],
            [
                'nama_ketentuan' => 'Ketentuan Tambahan berlaku untuk Pemegang Akun Perusahaan yang menggunakan situs web Bursa Kerja Khusus SMK N 1 Bojongsari',
                'deskripsi_ketentuan' => '',
                'urutan' => 10
            ],
            [
                'nama_ketentuan' => 'Ketentuan tambahan berlaku untuk Calon',
                'deskripsi_ketentuan' => '',
                'urutan' => 11
            ],
            [
                'nama_ketentuan' => 'Konten dan pengiriman pengguna',
                'deskripsi_ketentuan' => '',
                'urutan' => 12
            ],
            [
                'nama_ketentuan' => 'Kewajiban Bursa Kerja Khusus SMK N 1 Bojongsari',
                'deskripsi_ketentuan' => '',
                'urutan' => 13
            ],
            [
                'nama_ketentuan' => 'Penafian',
                'deskripsi_ketentuan' => '',
                'urutan' => 14
            ],
            [
                'nama_ketentuan' => 'Situs web pihak ketiga',
                'deskripsi_ketentuan' => '',
                'urutan' => 15
            ],
            [
                'nama_ketentuan' => 'Kebijakan Periklanan dan Sponsorship',
                'deskripsi_ketentuan' => '',
                'urutan' => 16
            ],
            [
                'nama_ketentuan' => 'Kebijakan Periklanan dan Sponsorship',
                'deskripsi_ketentuan' => '',
                'urutan' => 17
            ],
            [
                'nama_ketentuan' => 'Pengembalian dana',
                'deskripsi_ketentuan' => '',
                'urutan' => 18
            ],
            [
                'nama_ketentuan' => 'Hukum yang berlaku',
                'deskripsi_ketentuan' => '',
                'urutan' => 19
            ],
            [
                'nama_ketentuan' => 'Penggunaan Internasional',
                'deskripsi_ketentuan' => '',
                'urutan' => 20
            ],
            [
                'nama_ketentuan' => 'Penggunaan Internasional',
                'deskripsi_ketentuan' => '',
                'urutan' => 21
            ],
            [
                'nama_ketentuan' => 'Umum',
                'deskripsi_ketentuan' => '',
                'urutan' => 22
            ]
        ];

        foreach ($ketentuan_pengguna as $item) {
            KetentuanPenggunaan::create($item);
        }
    }
}
