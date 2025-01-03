<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DugunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('duguns')->insert([
            'dugun_ismi' => 'Ahmet ve Ayşe Düğünü',
            'dugun_tarihi' => '2025-01-01',
            'mekan' => 1,
            'muzik_eglence_id'=>1,
            'musteri_id'=>1,
        ]);
    }
}
