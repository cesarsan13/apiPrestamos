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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_customer')->constrined('customers','id');
            $table->string('fecha_inicio');
            $table->string('fecha_fin');
            $table->string('cantidad_prestada');
            $table->integer('duracion');
            $table->double('pago_semanal',8,2);
            $table->double('cantidad_restante',8,2);
            $table->double('abonado',8,2);
            $table->double('ganancia',8,2);
            $table->integer('estatus');
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
        Schema::dropIfExists('prestamos');
    }
};
