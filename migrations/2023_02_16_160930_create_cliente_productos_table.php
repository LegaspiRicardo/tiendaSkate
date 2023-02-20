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
        Schema::create('cliente_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cliente');
            $table->unsignedBigInteger('producto');
            $table->timestamps();



            $table->foreign('cliente')->references('id')->on('clientes');
            $table->foreign('producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente_productos');
    }
};
