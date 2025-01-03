<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class musteri extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('musteris')->insert([
           'ad'=>'ahmet',
            'soyad'=>'çelik',
            'telefon'=>'089',
            'email'=>'ahmet@gmail.com',
            'adres'=>'istanbul',
        ]);
    }
}
