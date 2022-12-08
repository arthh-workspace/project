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
            $table->foreignId('id_rps_mingguan');
            $table->foreignId('id_kuliah');
            $table->enum('kesesuaian', ['S', 'TS']);
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
        Schema::dropIfExists('evaluasi_rps_pertemuans');
    }
};
