<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class dosenseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosen = [
            [
                'id'                    => 1,
                'user_id'               => 2,
                'nama'                  => 'Dilan Setiawan',
                'nip'                   => '1234567889',
                'jenis_kelamin'         => 'Laki-Laki',
                'created_at'            => '2021-05-17 04:21:52',
                'updated_at'            => '2021-05-17 04:21:52',
            ],
        ];

        Dosen::insert($dosen);
    }
}
