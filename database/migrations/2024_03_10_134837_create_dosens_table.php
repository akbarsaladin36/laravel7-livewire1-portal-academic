<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pa_dosens', function (Blueprint $table) {
            $table->integer('dosen_id',true);
            $table->string('dosen_username',150)->nullable();
            $table->string('dosen_email',150)->unique()->nullable();
            $table->string('dosen_password',150)->nullable();
            $table->string('dosen_full_name',255)->nullable();
            $table->string('nidn',200)->nullable();
            $table->string('dosen_address',200)->nullable();
            $table->string('dosen_phone_number',200)->nullable();
            $table->dateTime('dosen_created_date')->nullable();
            $table->integer('dosen_created_user_id',false)->nullable();
            $table->string('dosen_created_username',100)->nullable();
            $table->dateTime('dosen_updated_date')->nullable();
            $table->integer('dosen_updated_user_id',false)->nullable();
            $table->string('dosen_updated_username',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pa_dosens');
    }
}
