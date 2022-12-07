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
            [
                'id'                    => 2,
                'user_id'               => 2,
                'nama'                  => 'Naruto',
                'nip'                   => '123456129',
                'jenis_kelamin'         => 'Laki-Laki',
                'created_at'            => '2021-05-17 04:21:52',
                'updated_at'            => '2021-05-17 04:21:52',
            ],
            [
                'id'                    => 3,
                'user_id'               => 4,
                'nama'                  => 'Upin',
                'nip'                   => '12341232889',
                'jenis_kelamin'         => 'Laki-Laki',
                'created_at'            => '2021-05-17 04:21:52',
                'updated_at'            => '2021-05-17 04:21:52',
            ],
            [
                'id'                    => 4,
                'user_id'               => 5,
                'nama'                  => 'Siti Fatimah',
                'nip'                   => '123412aaa31889',
                'jenis_kelamin'         => 'Perempuan',
                'created_at'            => '2021-05-17 04:21:52',
                'updated_at'            => '2021-05-17 04:21:52',
            ],
        ];

        Dosen::insert($dosen);
    }
}
