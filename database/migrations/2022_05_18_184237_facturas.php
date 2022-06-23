<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Facturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('fac_id');
            // $table->foreignId('prov_id')->references('prov_id')->on('provedor');
            $table->string('fac_nombre');///Trasferencia Efectivo Tarjeta
            $table->string('fac_cedula');///Trasferencia Efectivo Tarjeta
            
            $table->date('fac_fecha');
            $table->float('fac_total');
            $table->integer('fac_estado')->default(1);//1 activo //2 inactivo
            
            $table->string('fac_tipo_pago');///Trasferencia Efectivo Tarjeta
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
