<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DTD_CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('DTD_Customers')->insert([
            [
                'dtdIDCustomers' => 'CUST001',
                'dtdNameCustomers' => 'Đỗ Tùng Dương',
                'dtdEmail' => 'atgdotungduong@gmail.com',
                'dtdPassword' => Hash::make('khuongthuong12'), // Use Hash for secure passwords
                'dtdPhoneNumber' => '0375526086',
                'dtdAddress' => '60 Tổ 8 Thịnh Quang Đống Đa Hà Nội',
                'dtdRegistrationDate' => '2024-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dtdIDCustomers' => 'CUST002',
                'dtdNameCustomers' => 'Tùng',
                'dtdEmail' => 'dotattung19998@gmail.com',
                'dtdPassword' => Hash::make('khuongthuong12'),
                'dtdPhoneNumber' => '0986949505',
                'dtdAddress' => 'CT5A Yên Xá Tân Triều Thanh Trì Hà Nội',
                'dtdRegistrationDate' => '2024-01-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    }

