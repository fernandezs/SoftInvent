<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num_cliente');
            $table->string('nombre');
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->enum('doc_tipo', ['dni' => 'DNI',
                                     'cuit' => 'CUIT',
                                     'cedula' => 'Cedula'])->default('dni');
            $table->string('doc_numero')->nullable();
            $table->enum('tipo', ['consumidor_final' => 'Consumidor Final',
                                  'empleado' => 'Empleado',
                                  'monotributista' => 'Monotributista',
                                  'responsable_inscripto' => 'Responsable Inscripto',
                                  'revendedor' => 'Revendedor',
                                  'comerciante' => 'Comerciante',
                                  'gremio' => 'Gremio'])->default('Consumidor Final');
            $table->string('direccion')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
