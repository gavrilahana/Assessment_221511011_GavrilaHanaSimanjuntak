<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dataKasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataKasirs = [
            [
                'Nama' => 'Alan',
                'HP' => '099888888811',
            ],
            [
                'Nama' => 'Walker',
                'HP' => '099880088811',
            ],
            [
                'Nama' => 'Gav',
                'HP' => '087765678909',
            ],
            [
                'Nama' => 'Hana',
                'HP' => '098777889909',
            ],
            [
                'Nama' => 'Rila',
                'HP' => '033244567653',
            ],
        ];

        DB::table('data_kasirs')->insert($dataKasirs);
    }
}
