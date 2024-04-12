<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pa_kelas', function (Blueprint $table) {
            $table->integer('kelas_id',true);
            $table->integer('fakultas_id',false);
            $table->integer('jurusan_id',false);
            $table->string('kelas_code',30)->nullable();
            $table->string('kelas_name',200)->nullable();
            $table->string('jumlah_mahasiswa',100)->nullable();
            $table->dateTime('kelas_created_date')->nullable();
            $table->integer('kelas_created_user_id',false)->nullable();
            $table->string('kelas_created_username')->nullable();
            $table->dateTime('kelas_updated_date')->nullable();
            $table->integer('kelas_updated_user_id',false)->nullable();
            $table->string('kelas_updated_username')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pa_kelas');
    }
}
