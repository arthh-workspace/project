<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\gugus_kendali;
use App\Models\jadwal;
use App\Models\koordinator;
use App\Models\matkul;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens');
        DB::table('gugus_kendalis');
        DB::table('koordinators');
        DB::table('jadwals');

        $dosen1 = Dosen::create(array(
            'nip'                   => '1234567889',
            'nama'                  => 'Mangku Jajang',
            'jenis_kelamin'         => 'L',
            'username'              => 'dosen1',
            'email'                 => 'dosen1@gmail.com',
            'password'              => bcrypt('1'),
            'foto'                  => 'dosen',
        ));
        $this->command->info('dosen telah diisi!');

        gugus_kendali::create(array(
            'id_dosen' => $dosen1->id,
        ));
        $this->command->info('Data Dosen dan GKM telah diisi!');

        $matkul = matkul::create(array(
            'nama_matkul' => 'Project Aplikasi Lanjut',
            'jumlah_sks'  => 22
        ));
        $this->command->info('Data Mata Kuliah telah diisi!');

        $dosenkoor = koordinator::create(array(
            'id_dosen' => $dosen1->id,
            'id_matkul' => $matkul->id,
            'semester' => 5,
        ));
        $this->command->info('Data Dosen dan Koordinator telah diisi!');

        jadwal::create(array(
            'id_dosen' => $dosen1->id,
            'id_koor'  => $dosenkoor->id,
            'hari'     => '2022-12-12',
            'ruang'    => 'B4.7',
            'waktu'     => date(now()),
        ));
        $this->command->info('Data Dosen, Koordinator, dan Matkul telah diisi!');
    }
}
