<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'                    => 1,
                'name'                  => 'admin',
                'username'              => 'admin',
                'email'                 => 'admin@gmail.com',
                'email_verified_at'     => NULL,
                'password'              => bcrypt('1'),
                'role'                  => 'admin',
                'remember_token'        => null,
                'created_at'            => '2021-05-17 04:21:52',
                'updated_at'            => '2021-05-17 04:21:52',
            ],
            [
                'id'                    => 5,
                'name'                  => 'gugus',
                'username'              => 'gugus_k',
                'email'                 => 'gugus@gmail.com',
                'email_verified_at'     => NULL,
                'password'              => bcrypt('1'),
                'role'                  => 'gugus_kendali',
                'remember_token'        => null,
                'created_at'            => '2021-05-17 04:21:52',
                'updated_at'            => '2021-05-17 04:21:52',
            ],
            [
                'id'                    => 2,
                'name'                  => 'Dilan Setiawan',
                'username'              => 'dosen_p',
                'email'                 => 'dosen@gmail.com',
                'email_verified_at'     => NULL,
                'password'              => bcrypt('1'),
                'role'                  => 'dosen_pengampu',
                'remember_token'        => null,
                'created_at'            => '2021-05-17 04:21:52',
                'updated_at'            => '2021-05-17 04:21:52',
            ],
            [
                'id'                    => 4,
                'name'                  => 'siti',
                'username'              => 'dosen_k',
                'email'                 => 'dosen2@gmail.com',
                'email_verified_at'     => NULL,
                'password'              => bcrypt('1'),
                'role'                  => 'dosen_koor',
                'remember_token'        => null,
                'created_at'            => '2021-05-17 04:21:52',
                'updated_at'            => '2021-05-17 04:21:52',
            ],
            [
                'id'                    => 3,
                'name'                  => 'Rizal Eka Budi Pratama',
                'username'              => '362055401186',
                'email'                 => 'mahasiswa@gmail.com',
                'email_verified_at'     => NULL,
                'password'              => bcrypt('1'),
                'role'                  => 'mahasiswa',
                'remember_token'        => null,
                'created_at'            => '2021-05-17 04:21:52',
                'updated_at'            => '2021-05-17 04:21:52',
            ],
        ];

        User::insert($users);
    }
}
