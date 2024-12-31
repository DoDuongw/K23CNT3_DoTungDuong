<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DTD_BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('DTD_Bills')->insert([
            [
                'dtdIDBills' => 'BILL001',
                'dtdIDCustomres' => 1,
                'dtdDateBills' => '2024-01-01',
                'dtdNameCustomers' => 'Đỗ Tùng Dương',
                'dtdEmail' => 'atgdotungduong@gmail.com',
                'dtdPhoneNumber' => '0375526086',
                'dtdAddress' => '60 tổ 8  Thịnh Quang, Đống Đa, Hà Nội',
                'dtdValue' => 150.75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dtdIDBills' => 'BILL002',
                'dtdIDCustomres' => 2,
                'dtdDateBills' => '2024-01-02',
                'dtdNameCustomers' => 'Tùng',
                'dtdEmail' => 'dotattung1998@gmail.com ',
                'dtdPhoneNumber' => '0986949505',
                'dtdAddress' => 'CT5A Yên Xá Tân Triều Thanh Trì Hà Nội',
                'dtdValue' => 200.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    }

