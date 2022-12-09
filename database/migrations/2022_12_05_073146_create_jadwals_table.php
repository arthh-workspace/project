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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_dosen')->unsigned();
            $table->foreign('id_dosen')->references('id')->on('dosens');
            $table->bigInteger('id_koor')->unsigned();
            $table->foreign('id_koor')->references('id')->on('koordinators');
            $table->date('hari');
            $table->string('ruang');
            $table->time('waktu');
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
        Schema::dropIfExists('jadwals');
    }
};
