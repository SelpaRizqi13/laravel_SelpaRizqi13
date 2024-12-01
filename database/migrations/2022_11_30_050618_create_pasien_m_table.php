<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien_m', function (Blueprint $table) {
            $table->id();
            $table->char('profilrumahsakit_id', 2);
            $table->string('nama_pasien');
            $table->string('alamat_pasien');
            $table->string('no_telp_pasien');
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
        Schema::dropIfExists('pasien_m');
    }
}
