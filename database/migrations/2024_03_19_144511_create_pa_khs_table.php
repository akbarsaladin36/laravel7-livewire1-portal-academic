<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaKHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pa_khs', function (Blueprint $table) {
            $table->integer('khs_id',true);
            $table->integer('krs_id',false)->nullable();
            $table->string('nilai_max',20)->nullable();
            $table->string('nilai_min',20)->nullable();
            $table->dateTime('khs_created_date')->nullable();
            $table->integer('khs_created_user_id',false)->nullable();
            $table->string('khs_created_username')->nullable();
            $table->dateTime('khs_updated_date')->nullable();
            $table->integer('khs_updated_user_id',false)->nullable();
            $table->string('khs_updated_username')->nullable();
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
        Schema::dropIfExists('pa_khs');
    }
}
