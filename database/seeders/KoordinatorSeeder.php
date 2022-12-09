<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\koordinator;

class KoordinatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $koor = [
            [
                'id_matkul'                 => 2,
                'semester'                  => 5,
            ],
        ];

        koordinator::insert($koor);
    }
}
