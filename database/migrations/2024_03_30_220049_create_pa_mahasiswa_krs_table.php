<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaMahasiswaKRSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pa_mahasiswa_krs', function (Blueprint $table) {
            $table->integer('mahasiswa_krs_id',true);
            $table->integer('krs_id',false)->nullable();
            $table->dateTime('mahasiswa_krs_created_date')->nullable();
            $table->integer('mahasiswa_krs_created_user_id',false)->nullable();
            $table->string('mahasiswa_krs_created_username',150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pa_mahasiswa_krs');
    }
}
