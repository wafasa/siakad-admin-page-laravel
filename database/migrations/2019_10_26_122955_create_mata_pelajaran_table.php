<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataPelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_pelajaran', function (Blueprint $table) {
            $table->bigIncrements('mata_pelajaran_id');
            $table->char('kode_mapel');
            $table->string('nama_mapel');
            $table->integer('jenis_mapel_id');
            $table->integer('kurikulum_id');
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
        Schema::dropIfExists('mata_pelajaran');
    }
}
