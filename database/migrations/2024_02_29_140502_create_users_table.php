<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('user_id',true);
            $table->string('user_username',100)->nullable();
            $table->string('user_email',150)->unique()->nullable();
            $table->string('user_password',150)->nullable();
            $table->string('user_nim',12)->nullable();
            $table->string('user_nik',20)->nullable();
            $table->integer('user_fakultas_id',false)->nullable();
            $table->integer('user_jurusan_id',false)->nullable();
            $table->string('user_first_name',150)->nullable();
            $table->string('user_last_name',150)->nullable();
            $table->text('user_address')->nullable();
            $table->string('user_phone_number',50)->nullable();
            $table->string('user_religion',20)->nullable();
            $table->string('user_father_name',150)->nullable();
            $table->text('user_father_address')->nullable();
            $table->string('user_father_job',50)->nullable();
            $table->string('user_mother_name',150)->nullable();
            $table->text('user_mother_address')->nullable();
            $table->string('user_mother_job',50)->nullable();
            $table->string('user_status_cd',30)->nullable();
            $table->dateTime('user_created_date')->nullable();
            $table->integer('user_created_user_id',false)->nullable();
            $table->string('user_created_username',100)->nullable();
            $table->dateTime('user_updated_date')->nullable();
            $table->integer('user_updated_user_id',false)->nullable();
            $table->string('user_updated_username',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
