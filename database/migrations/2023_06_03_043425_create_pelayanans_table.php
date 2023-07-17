<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayanans', function (Blueprint $table) {
            $table->id();
            $table->text('layanan_1');
            $table->string('media_layanan_1');

            $table->text('layanan_2');
            $table->string('media_layanan_2');

            $table->text('layanan_3');
            $table->string('media_layanan_3');
            
            $table->text('layanan_4');
            $table->string('media_layanan_4');

            $table->text('layanan_5');
            $table->string('media_layanan_5');

            $table->text('layanan_6');
            $table->string('media_layanan_6');

            $table->text('layanan_7');
            $table->string('media_layanan_7');

            $table->text('layanan_8');
            $table->string('media_layanan_8');

            $table->text('layanan_9');
            $table->string('media_layanan_9');

            // $table->text('keterangan');
            // $table->string('media');
        
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
        Schema::dropIfExists('pelayanans');
    }
}
