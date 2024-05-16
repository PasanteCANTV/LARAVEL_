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
        Schema::create('voz_servicios', function (Blueprint $table) {
            $table->id();

            $table->string('cant_fxb_tlf');
            $table->string('cant_fxb_tlf_dis');
            $table->string('cant_fxb_tlf_oc');
            $table->string('cant_tlf_line');
            $table->string('cant_line_ddi');
            $table->string('cant_line_14-24');
            $table->string('cant_line_12');
            $table->string('line_inv');
            $table->string('central_local');         


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
        Schema::dropIfExists('voz_servicios');
    }
};
