<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('NIK')->unique();
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_KK')->nullable();
            $table->string('alamat');
            $table->integer('jumlah_anak')->nullable();
            $table->string('nama_suami')->nullable();
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('ibus');
    }
}
