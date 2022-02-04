<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hewan');
            $table->string('umur_hewan');
            $table->integer('jenis_hewan');
            $table->string('ras_hewan');
            $table->string('nama_wali');
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
        Schema::dropIfExists('datapasien');
    }
}
