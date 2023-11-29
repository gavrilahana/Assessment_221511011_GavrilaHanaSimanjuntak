<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dataTenanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataTenans = [
            [
                'NamaTenan' => 'Aqua',
                'HP' => '099888658811',
            ],
            [
                'NamaTenan' => 'Cimol',
                'HP' => '099880088811',
            ],
            [
                'NamaTenan' => 'Mie Sedap',
                'HP' => '087765678909',
            ],
            [
                'NamaTenan' => 'Indomie',
                'HP' => '098777889909',
            ],
            [
                'NamaTenan' => 'Nutrisari',
                'HP' => '033244567653',
            ],
        ];

        DB::table('data_tenans')->insert($dataTenans);
    }
}
