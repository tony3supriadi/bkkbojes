<?php

namespace Database\Seeders;

use Database\Seeders\Wilayah\KabupatenSeeder;
use Database\Seeders\AdminSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(AdminSeeder::class);
        $this->call([
            KabupatenSeeder::class,
            AdminSeeder::class,
            TentangKamiSeeder::class,
            ProgramstudiSeeder::class,
            KebijakanPrivasiSeeder::class,
            KetentuanPenggunaSeeder::class,
            FaqSeeder::class
        ]);
    }
}
