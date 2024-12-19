<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DTD_Type_ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('DTD_Type_Product')->insert([
            'dtdMaLoai'=>"P001",
            'dtdTenLoai'=>"LAPTOP",
            'dtdStatus'=>0
        ]);
        DB::table('DTD_Type_Product')->insert([
            'dtdMaLoai'=>"P002",
            'dtdTenLoai'=>"CasePC",
            'dtdStatus'=>1
        ]);
        DB::table('DTD_Type_Product')->insert([
            'dtdMaLoai'=>"P003",
            'dtdTenLoai'=>"Camera",
            'dtdStatus'=>0
        ]);
        DB::table('DTD_Type_Product')->insert([
            'dtdMaLoai'=>"P004",
            'dtdTenLoai'=>"Phone",
            'dtdStatus'=>0
        ]);
    }
}
