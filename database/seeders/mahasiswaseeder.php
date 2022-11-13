<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [
            [
                'id'                    => 1,
                'user_id'               => 3,
                'nama'                  => 'Rizal Eka Budi Pratama',
                'prodi'                 => 'Teknik Informatika',
                'nim'                   => '362055401186',
                'jenis_kelamin'         => 'Laki-Laki',
                'created_at'            => '2021-05-17 04:21:52',
                'updated_at'            => '2021-05-17 04:21:52',
            ],
        ];

        Mahasiswa::insert($mahasiswa);
    }
}
