<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_articulo')->unique();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->string('marca')->nullable();
            $table->decimal('precio_costo');
            $table->decimal('precio_venta');
            $table->integer('cantidad');
            $table->integer('cantidad_minima');
            $table->integer('categoria_id')->unsigned();
            $table->string('foto')->nullable();
            $table->enum('estado', ['disponible' => 'Disponible',
                                     'no_disponible' => 'No disponible'])->default('disponible');
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
        Schema::dropIfExists('articulos');
    }
}
