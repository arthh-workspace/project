<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'id'                    => 1,
                'username'              => 'admin',
                'email'                 => 'admin@gmail.com',
                'email_verified_at'     => NULL,
                'password'              => bcrypt('1'),
                'remember_token'        => null,
                'created_at'            => '2021-05-17 04:21:52',
                'updated_at'            => '2021-05-17 04:21:52',
            ],
        ];

        Admin::insert($admin);
    }
}
