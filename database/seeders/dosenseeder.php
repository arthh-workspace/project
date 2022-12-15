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
                'nip'                   => '1234567889',
                'nama'                  => 'Dilan Setiawan',
                'jenis_kelamin'         => 'L',
                'username'              => 'dosen',
                'email'                 => 'dosen@gmail.com',
                'email_verified_at'     => NULL,
                'password'              => bcrypt('1'),
                'foto'                  => 'images/dosen/default.jpg',
                'remember_token'        => null,
                'created_at'            => '2021-05-17 04:21:52',
                'updated_at'            => '2021-05-17 04:21:52',
            ],
        ];

        Dosen::insert($dosen);
    }
}
