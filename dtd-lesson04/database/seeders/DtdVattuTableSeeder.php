<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Faker\factory as Faker;
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
            'dtdMaVTu'=>'DD02',
            'dtdTenVTu'=>'Đầu DVD Hitachi 3 cửa',
            'dtdDvTinh'=>'Bộ',
            'dtdPhanTram'=>40,
        ]);   
        //php
        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            DB::table('dtdvattu')->insert([
                'dtdMaVTu'=>$faker->word(4),
                // 'MaNCC'=>$faker->word(15),
                'dtdTenVTu'=>$faker->sentence(5),
                'dtdDvTinh'=>$faker->word(3),
                'dtdPhanTram'=>$faker->randomfloat('2',0,100)
                ]);
    }
    }
}
