<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DTD_ADMINTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dtdPassword = md5("khuongthuong12");
        //
        DB  ::table('DTD_ADMIN')->insert(['dtdAccount'=>"atgdotungduong@gmail.com", 
        'dtdPassword'=>$dtdPassword, 
        'dtdStatus'=>0
    ]);
    DB  ::table('DTD_ADMIN')->insert(['dtdAccount'=>"AyaTsuki", 
    'dtdPassword'=>$dtdPassword, 
    'dtdStatus'=>1
    ]);
    }
}
