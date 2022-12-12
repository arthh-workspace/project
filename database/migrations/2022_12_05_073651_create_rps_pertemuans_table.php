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
        Schema::create('rps_pertemuans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rps');
            $table->integer('pertemuan_ke');
            $table->integer('capaian_pembelajaran_pertemuan');
            $table->timestamps();

            $table->foreign('id_rps')->references('id')->on('rps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rps_pertemuans');
    }
};
