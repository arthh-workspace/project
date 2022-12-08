<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'nim'                   => '362055401186',
                'nama'                  => 'Rizal Eka Budi Pratama',
                'jenis_kelamin'         => 'L',
                'kelas'                 => 'G',
                'prodi'                 => 'TRPL',
                'username'              => 'mahasiswa',
                'email'                 => 'mahasiswa@gmail.com',
                'email_verified_at'     => NULL,
                'password'              => bcrypt('1'),
                'foto'                  => 'mahasiswa',
                'remember_token'        => null,
                'created_at'            => '2021-05-17 04:21:52',
                'updated_at'            => '2021-05-17 04:21:52',
            ],
        ];

        Mahasiswa::insert($mahasiswa);
    }
}
