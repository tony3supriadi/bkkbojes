<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            [
                'title' => 'Apa itu BKK SMK Negeri 1 Bojongsari',
                'content' => '<strong>BKK (Bursa Kerja Khusus) SMK N 1 Bojongsari</strong> adalah situs lowongan kerja untuk alumni SMK N 1 Bojongsari akan tetapi tetap dapa diakses untuk umum bagi para pencari kerja',
                'order' => 1
            ],
            [
                'title' => 'Siapa saja yang dapat menggunakan situs ini?',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus ornare sem, at lobortis nulla consectetur et. Fusce a tempor mi. Sed lacinia mi id cursus pretium. Sed eros turpis.',
                'order' => 2
            ],
            [
                'title' => 'Lowongan apa saja yang tersedia?',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus ornare sem, at lobortis nulla consectetur et. Fusce a tempor mi. Sed lacinia mi id cursus pretium. Sed eros turpis.',
                'order' => 3
            ],
            [
                'title' => 'Apa yang saya dapatkan ketika saya mendaftar?',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus ornare sem, at lobortis nulla consectetur et. Fusce a tempor mi. Sed lacinia mi id cursus pretium. Sed eros turpis.',
                'order' => 4
            ],
            [
                'title' => 'Dapatkah saya membagikan info lowongan kerja? ',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus ornare sem, at lobortis nulla consectetur et. Fusce a tempor mi. Sed lacinia mi id cursus pretium. Sed eros turpis.',
                'order' => 5
            ],
            [
                'title' => 'Apakah data dan informasi saya aman?',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus ornare sem, at lobortis nulla consectetur et. Fusce a tempor mi. Sed lacinia mi id cursus pretium. Sed eros turpis.',
                'order' => 6
            ],
            [
                'title' => 'Bagaimana ketentuan penggunaan situs ini?',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus ornare sem, at lobortis nulla consectetur et. Fusce a tempor mi. Sed lacinia mi id cursus pretium. Sed eros turpis.',
                'order' => 7
            ],
            [
                'title' => 'Bagaimana cara mendaftar di situs ini?',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus ornare sem, at lobortis nulla consectetur et. Fusce a tempor mi. Sed lacinia mi id cursus pretium. Sed eros turpis.',
                'order' => 8
            ],
            [
                'title' => 'Kenapa saya tidak dapat melamar lowongan kerja di situs ini?',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus ornare sem, at lobortis nulla consectetur et. Fusce a tempor mi. Sed lacinia mi id cursus pretium. Sed eros turpis.',
                'order' => 9
            ],
            [
                'title' => 'Bagaimana cara mengunduh CV saya?',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus ornare sem, at lobortis nulla consectetur et. Fusce a tempor mi. Sed lacinia mi id cursus pretium. Sed eros turpis.',
                'order' => 10
            ]
        ];

        foreach ($faqs as $item) {
            Faq::create($item);
        }
    }
}
