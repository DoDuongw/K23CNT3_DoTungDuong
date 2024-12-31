<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Import Hash facade

class DTD_ADMINTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dtdMatKhau = Hash::make("khuongthuong12"); // Use Hash::make instead of md5

        DB::table('DTD_ADMIN')->insert([
            'dtdTaiKhoan' => "atgdotungduong@gmail.com",
            'dtdMatKhau' => $dtdMatKhau,
            'dtdTrangThai' => 0
        ]);

        DB::table('DTD_ADMIN')->insert([
            'dtdTaiKhoan' => "ayatsuki",
            'dtdMatKhau' => $dtdMatKhau,
            'dtdTrangThai' => 0    
        ]);
    }
}
