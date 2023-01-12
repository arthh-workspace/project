<?php

namespace Database\Seeders;

use App\Models\rps_pertemuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pertemuanseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rps_pertemuan = [
            [
                'id'                                =>  1,
                'id_rps'                            =>  1,
                'pertemuan_ke'                      =>  1,
                'capaian_pembelajaran_pertemuan'    =>  'Mahasiswa mampu menerapkan dasar pemograman PHP',
                'created_at'                        => '2021-05-17 04:21:52',
                'updated_at'                        => '2021-05-17 04:21:52',
            ],
        ];

        rps_pertemuan::insert($rps_pertemuan);
    }
}
