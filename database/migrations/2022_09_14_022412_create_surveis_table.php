<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('telp');
            $table->string('alamat');
            $table->integer('mekanisme_pelayanan');
            $table->integer('jangka_waktu');
            $table->integer('layanan_pengaduan');
            $table->integer('sarana_prasarana');
            $table->string('nama_pelaksana_pelayanan');
            $table->integer('kualitas_pelaksana_pelayanan');
            $table->integer('jaminan_keamanan');
            $table->integer('jaminan_pelayanan');
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
        Schema::dropIfExists('surveis');
    }
}
