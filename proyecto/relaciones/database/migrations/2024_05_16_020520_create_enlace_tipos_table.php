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
        Schema::create('enlace_tipos', function (Blueprint $table) {
            $table->id();
            $table->string('enlace_tip');
            $table->string('enlace_ipwan');
            /* $table->unsignedBigInteger('circuito_id');
            $table->foreign('circuito_id')->references('id')->on('circuitos')
            ->onDelete('cascade')
            ->onUpdate('cascade'); */
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
        Schema::dropIfExists('enlace_tipos');
    }
};
