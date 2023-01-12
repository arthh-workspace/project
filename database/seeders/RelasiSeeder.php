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
            'role'                  => 'super_dosen1',
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

        $dosen2 = Dosen::create(array(
            'nip'                   => '123456789',
            'nama'                  => 'Siti Wami',
            'jenis_kelamin'         => 'P',
            'username'              => 'dosen2',
            'email'                 => 'dosen2@gmail.com',
            'password'              => bcrypt('1'),
            'foto'                  => 'dosen',
        ));
        gugus_kendali::create(array(
            'id_dosen' => $dosen2->id,
        ));
        $this->command->info('Data Dosen 2 dan GKM telah diisi!');

        $dosen3 = Dosen::create(array(
            'nip'                   => '123456597',
            'nama'                  => 'Adya Ginansah',
            'jenis_kelamin'         => 'L',
            'username'              => 'dosen3',
            'email'                 => 'dosen3@gmail.com',
            'password'              => bcrypt('1'),
            'foto'                  => 'dosen',
        ));

        $dosenkoor2 = koordinator::create(array(
            'id_dosen' => $dosen3->id,
            'id_matkul' => $matkul->id,
            'semester' => 5,
        ));
        $this->command->info('Data Dosen 3 dan Koordinator telah diisi!');

        $dosen4 = Dosen::create(array(
            'nip'                   => '123458784',
            'nama'                  => 'Muri Kami',
            'jenis_kelamin'         => 'P',
            'username'              => 'dosen4',
            'email'                 => 'dosen4@gmail.com',
            'password'              => bcrypt('1'),
            'foto'                  => 'dosen',
        ));
        jadwal::create(array(
            'id_dosen' => $dosen4->id,
            'id_koor'  => $dosenkoor->id,
            'hari'     => '2022-12-12',
            'ruang'    => 'B4.7',
            'waktu'     => date(now()),
        ));
        $this->command->info('Data Dosen, Koordinator, dan Matkul telah diisi!');
    }
}
