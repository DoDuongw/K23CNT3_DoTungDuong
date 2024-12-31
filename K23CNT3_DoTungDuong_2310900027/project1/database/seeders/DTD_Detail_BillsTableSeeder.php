<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DTD_Detail_BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('DTD_Details_Bills')->insert([
            [
                'dtdIDBills' => 'BILL001', // Assume this ID exists in DTD_Bills
                'dtdIDProduct' => 'LTP001', // Assume this ID exists in DTD_Product
                'dtdAmountBuy' => 2,
                'dtdPrice' => 25000.000,
                'dtdIntoPrice' => 50000.000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dtdIDBills' => 'BILL001',
                'dtdIDProduct' => 'PCG001',
                'dtdAmountBuy' => 1,
                'dtdPrice' => 30000.000,
                'dtdIntoPrice' => 30000.000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dtdIDBills' => 'BILL002',
                'dtdIDProduct' => 'IP001',
                'dtdAmountBuy' => 3,
                'dtdPrice' => 42000.000,
                'dtdIntoPrice' => 126000.000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    }

