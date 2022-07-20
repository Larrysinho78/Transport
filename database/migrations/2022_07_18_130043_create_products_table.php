<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Res_Adm');
            $table->string('Reg_Operador');
            $table->string('Categoria');        /* ->default('Profesional A') */
            $table->string('Operador');
            $table->string('Propietario');
            $table->string('Marca');
            $table->string('Modelo');
            $table->string('Capacidad');
            $table->string('Clase');
            $table->string('Placa');
            $table->string('Rutas_Aut');
            $table->date('Fecha_Emision');
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Final');
            $table->string('Estado');       /*->default('Nuevo')    Nuevo_Renovación */
            $table->string('Qr');
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
        Schema::dropIfExists('products');
    }
}
