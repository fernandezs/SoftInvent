<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReparacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('articulo_id')->unsigned();
            $table->decimal('costo_reparacion')->nullable();
            $table->timestamp('fecha_ingreso')->nullable();
            $table->timestamp('fecha_egreso')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('garantia')->nullable();
            $table->integer('cliente_id')->unsigned();
            $table->integer('empleado_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reparaciones');
    }
}
