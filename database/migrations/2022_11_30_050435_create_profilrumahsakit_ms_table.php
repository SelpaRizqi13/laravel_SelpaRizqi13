<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilrumahsakitMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilrumahsakit_m', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rumahsakit');
            $table->string('alamat_rumahsakit');
            $table->string('email_rumahsakit');
            $table->string('nomor_telp_rumahsakit');
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
        Schema::dropIfExists('profilrumahsakit_m');
    }
}
