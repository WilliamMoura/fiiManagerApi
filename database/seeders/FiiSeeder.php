<?php

namespace Database\Seeders;

use App\Models\Fii;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(Fii::TABLE_NAME)->insert([
            [
                'fii_cod' => 'MXRF11',
                'fii_price' => '10.28'
            ],
            [
                'fii_code' => 'SPTW11',
                'fii_price' => '52.30'
            ],
            [
                'fii_code' => 'MCCI11',
                'fii_price' => '102.25'
            ]
        ]);
    }
}
