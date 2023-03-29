<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemanfaatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemanfaatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_perizinan');
            $table->string('kabupaten');
            $table->string('kapanewon');
            $table->string('kelurahan');
            $table->string('desa');
            $table->string('persil');
            $table->string('luas');
            $table->string('uraian');
            $table->date('tanggal_mulai');
            $table->string('tanggal_akhir');
            $table->string('file_SK');
            $table->string('file_SK_2');
            $table->string('file_SK_3');
            $table->string('file_SK_4');
            $table->string('file_SK_5');
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
        Schema::dropIfExists('pemanfaatan');
    }
}
