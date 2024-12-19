<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DTD_ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("DTD_Product")->insert([
            'dtdIDProduct'=>"LTP001",
            'dtdNameProduct'=>"Laptop Acer",
            'dtdImages'=>"https://product.hstatic.net/200000722513/product/23-laptop-gaming-quoc-dan-3_812a88427add4149971f9c8573153ede_1024x1024_9cb67d6931d1424b943cecdc8488a8dc_1024x1024.png",
            'dtdAmount'=>50,
            'dtdPrice'=>25000000,
            'dtdMaLoai'=>"P001",
        ]);
        DB::table("DTD_Product")->insert([
            'dtdIDProduct'=>"PCG001",
            'dtdNameProduct'=>"PC Gaming For player",
            'dtdImages'=>"https://product.hstatic.net/200000722513/product/post-21_9315710d2f3443829da83b440060aaab_grande.jpg",
            'dtdAmount'=>50,
            'dtdPrice'=>30000000,
            'dtdMaLoai'=>"P002",
        ]);
        DB::table("DTD_Product")->insert([
            'dtdIDProduct'=>"CMR001",
            'dtdNameProduct'=>"Webcam Logitech Brio 4k",
            'dtdImages'=>"https://product.hstatic.net/200000722513/product/brio-gallery-2_d046dcf21eb146e59211a52cdb78fb90_1e30408cb9a7461da7354a063f09c649_1024x1024.png",
            'dtdAmount'=>150,
            'dtdPrice'=>4000000,
            'dtdMaLoai'=>"P003",
        ]);
        DB::table("DTD_Product")->insert([
            'dtdIDProduct'=>"IP001",
            'dtdNameProduct'=>"Iphone16 Promax",
            'dtdImages'=>"https://cdn.nguyenkimmall.com/images/thumbnails/1024/717/product/1006/V-IPHONE-16-PRO-128GB-DEN_wuvh-hq.jpg",
            'dtdAmount'=>50,
            'dtdPrice'=>42000000,
            'dtdMaLoai'=>"P004",
        ]);
    }
}
