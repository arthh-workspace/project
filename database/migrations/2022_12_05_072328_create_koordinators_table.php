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
        Schema::create('koordinators', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_dosen')->unsigned();
            $table->foreign('id_dosen')->references('id')
              ->on('dosens');
            $table->bigInteger('id_matkul')->references('id')
            ->on('matkuls');
            $table->integer('semester');
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
        Schema::dropIfExists('koordinators');
    }
};
