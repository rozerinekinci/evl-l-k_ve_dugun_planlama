<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mekanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mekans')->insert([
            'mekan_ismi'=>'dügün_salonu',
            'mekan_konum'=>'zekican'


        ]);
        DB::table('mekans')->insert([
            'mekan_ismi'=>'otel',
            'mekan_konum'=>'kolin'


        ]);
    }
}
