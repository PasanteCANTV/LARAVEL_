<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tele_devices', function (Blueprint $table) {
            $table->id();
            $table->string('serial_tlf');
            $table->string('inv_tlf');
            $table->string('marca_tlf');
            $table->string('modelo_tlf');
            $table->string('status_tlf');
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
        Schema::dropIfExists('tele_devices');
    }
};
