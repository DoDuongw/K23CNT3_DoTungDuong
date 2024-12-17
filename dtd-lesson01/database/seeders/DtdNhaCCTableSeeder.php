<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Faker\factory as Faker;
class DtdNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        foreach (range(1,100) as $index) {
            DB::table('dtdnhacc')->insert([
                'dtdMaNCC'=>$faker->uuid(),
                // 'MaNCC'=>$faker->word(15),
                'dtdTenNCC'=>$faker->sentence(5),
                'dtdDiachi'=>$faker->address(),
                'dtdDienthoai'=>$faker->phoneNumber(15),
                'dtdemail'=>$faker->email(),
                'dtdstatus'=>$faker->boolean()
                ]);
    }
}
}
