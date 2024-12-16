<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DtdVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('dtdvattu')->insert([
            'dtdMaVTu'=>'DD01',
            'dtdTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'dtdDvTinh'=>'Bộ',
            'dtdPhanTram'=>40,
        ]);
        DB::table('dtdvattu')->insert([
            'dtdMaVTu'=>'DD01',
            'dtdTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'dtdDvTinh'=>'Bộ',
            'dtdPhanTram'=>40,
        ]);
        
    }
}
