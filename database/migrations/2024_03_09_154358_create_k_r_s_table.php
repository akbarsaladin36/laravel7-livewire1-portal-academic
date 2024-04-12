<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKRSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pa_krs', function (Blueprint $table) {
            $table->integer('krs_id',true);
            $table->integer('dosen_id',false)->nullable();
            $table->string('mata_kuliah_code',100)->nullable();
            $table->string('mata_kuliah_name',255)->nullable();
            $table->integer('kelas_kuliah_id')->nullable();
            $table->string('sifat_mata_kuliah',20)->nullable();
            $table->string('sks',10)->nullable();
            $table->dateTime('created_krs_date')->nullable();
            $table->integer('created_krs_user_id',false)->nullable();
            $table->string('created_krs_user_username',150)->nullable();
            $table->dateTime('updated_krs_date')->nullable();
            $table->integer('updated_krs_user_id',false)->nullable();
            $table->string('updated_krs_user_username',150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pa_krs');
    }
}
