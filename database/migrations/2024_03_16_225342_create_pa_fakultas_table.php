<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaFakultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pa_fakultas', function (Blueprint $table) {
            $table->integer('fakultas_id',true);
            $table->string('fakultas_code',50)->nullable();
            $table->string('fakultas_name',150)->nullable();
            $table->string('fakultas_slug',255)->nullable();
            $table->text('fakultas_description')->nullable();
            $table->dateTime('fakultas_created_date')->nullable();
            $table->integer('fakultas_created_user_id',false)->nullable();
            $table->string('fakultas_created_username',100)->nullable();
            $table->dateTime('fakultas_updated_date')->nullable();
            $table->integer('fakultas_updated_user_id',false)->nullable();
            $table->string('fakultas_updated_username',100)->nullable();
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
        Schema::dropIfExists('pa_fakultas');
    }
}
