<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaJurusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pa_jurusans', function (Blueprint $table) {
            $table->integer('jurusan_id',true);
            $table->integer('fakultas_id',false)->nullable();
            $table->string('jurusan_code',50)->nullable();
            $table->string('jurusan_name',100)->nullable();
            $table->text('jurusan_description')->nullable();
            $table->string('jurusan_slug',255)->nullable();
            $table->dateTime('jurusan_created_date')->nullable();
            $table->integer('jurusan_created_user_id',false)->nullable();
            $table->string('jurusan_created_username',100)->nullable();
            $table->dateTime('jurusan_updated_date')->nullable();
            $table->integer('jurusan_updated_user_id',false)->nullable();
            $table->string('jurusan_updated_username',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pa_jurusans');
    }
}
