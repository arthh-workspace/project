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
        Schema::create('evaluasi_rps_pertemuans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rps_mingguan');
            $table->unsignedBigInteger('id_kuliah');
            $table->enum('kesesuaian', ['S', 'TS']);
            $table->timestamps();

            $table->foreign('id_rps_mingguan')->references('id')->on('rps_pertemuans')->onDelete('cascade');
            $table->foreign('id_kuliah')->references('id')->on('perkuliahans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluasi_rps_pertemuans');
    }
};
