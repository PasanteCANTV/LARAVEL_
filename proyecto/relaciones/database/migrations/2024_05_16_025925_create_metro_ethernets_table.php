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
        Schema::create('metro_ethernets', function (Blueprint $table) {
            $table->id();
            $table->string('meth_ip-sw');
            $table->string('meth_vlan');
            $table->string('iplan_bloq');
            $table->string('ip_loopback');
            $table->string('meth_ipwan');
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
        Schema::dropIfExists('metro_ethernets');
    }
};
