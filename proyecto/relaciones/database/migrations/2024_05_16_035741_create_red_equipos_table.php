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
        Schema::create('red_equipos', function (Blueprint $table) {
            $table->id();
            $table->string('equip_tipo');
            $table->string('equip_marca');
            $table->string('equip_model');
            $table->string('equip_serial');
            $table->string('inv_code');
            $table->string('ports_dis');
            $table->string('ports_oc');
            $table->string('ports_total');
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
        Schema::dropIfExists('red_equipos');
    }
};
