<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nama');
            $table->enum('kelas', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->string('prodi');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
<<<<<<< HEAD:database/migrations/2022_11_21_072138_create_mahasiswas_table.php
=======
            $table->enum('role', ['admin', 'gugus_kendali',
                                  'dosen_koor', 'dosen_pengampu',
                                  'mahasiswa','super_dosen1',
                                  'super_dosen2','super_dosen3','super_dosen4']
                    )->default('admin');
>>>>>>> 64a1ed44b9a73acea72eae6a2fa673fa7563f383:database/migrations/2014_10_12_000000_create_users_table.php
            $table->string('password');
            $table->string('foto');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
};
