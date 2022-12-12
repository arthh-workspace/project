<?php

namespace Database\Seeders;

use App\Models\rps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rpsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rps = [
            [
                'id'                                =>  1,
                'id_matkul'                         =>  1,
                'versi'                             => 'modern',
                'created_at'                        => '2021-05-17 04:21:52',
                'updated_at'                        => '2021-05-17 04:21:52',
            ],
        ];

        rps::insert($rps);
    }
}
