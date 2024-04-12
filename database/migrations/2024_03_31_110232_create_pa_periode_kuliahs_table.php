<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaPeriodeKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pa_periode_kuliahs', function (Blueprint $table) {
            $table->string('periode_kuliah_start_year_id',10)->nullable();
            $table->string('periode_kuliah_finish_year_id',10)->nullable();
            $table->string('periode_kuliah_semester_code',30)->nullable();
            $table->string('periode_kuliah_semester_name',100)->nullable();
            $table->dateTime('periode_kuliah_created_date')->nullable();
            $table->integer('periode_kuliah_created_user_id')->nullable();
            $table->string('periode_kuliah_created_username')->nullable();
            $table->dateTime('periode_kuliah_updated_date')->nullable();
            $table->integer('periode_kuliah_updated_user_id')->nullable();
            $table->string('periode_kuliah_updated_username')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pa_periode_kuliahs');
    }
}
