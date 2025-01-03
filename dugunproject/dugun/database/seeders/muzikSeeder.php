<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class muzikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('muzik_eglences')->insert([
            'tür'=>'ilk_dans',

        ]);
        DB::table('muzik_eglences')->insert([
            'tür'=>'halay',]);

    }
}
