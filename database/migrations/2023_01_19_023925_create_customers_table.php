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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('fecha_nacimiento');
            $table->string('direccion');
            $table->string('colonia');
            $table->string('cp');
            $table->string('telefono');
            $table->string('capacidad');
            $table->string('credencial1');
            $table->string('credencial2');
            $table->string('baja');
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
        Schema::dropIfExists('customers');
    }
};
