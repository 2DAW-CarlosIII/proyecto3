<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->boolean('disponible');
            $table->string('descripcion');
            $table->string('imagen');
            $table->boolean('roto');
            $table->string('desc_rotura');
            $table->date('ult_reparacion');
            $table->timestamps();

            $table->foreign('tipo')->references('id')->on('vehicles_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
