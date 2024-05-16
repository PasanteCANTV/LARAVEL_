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
        Schema::create('telef_lines', function (Blueprint $table) {
            $table->id();
            $table->string('num_tlf');
            $table->string('ddi_access');
            $table->string('14-24_access');
            $table->string('12_access');
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
        Schema::dropIfExists('telef_lines');
    }
};
