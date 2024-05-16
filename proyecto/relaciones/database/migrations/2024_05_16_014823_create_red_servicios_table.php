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
        Schema::create('red_servicios', function (Blueprint $table) {
            $table->id();

            $table->string('cant_sw_ins');
            $table->string('cant_port_dis');
            $table->string('cant_port_oc');
            $table->string('cant_puntos-act');
            $table->string('cant_hubs');
            $table->string('cant_porthub_dis');
            $table->string('cant_porthub_oc');
            $table->string('cant_porthub_serial');
            $table->string('cant_port_eth-rout');

            $table->unsignedBigInteger('cuarto_id');
            $table->foreign('cuarto_id')->references('id')->on('cuartos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('red_servicios');
    }
};
