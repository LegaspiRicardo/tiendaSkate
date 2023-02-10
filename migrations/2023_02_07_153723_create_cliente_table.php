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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->nullable();
            $table->string('correo', 100)->nullable();
            $table->string('clave', 100)->nullable();
            $table->integer('telefono')->nullable();
            $table->string('calle', 100)->nullable();
            $table->integer('numero')->nullable();
            $table->string('colonia', 100)->nullable();
            $table->integer('cp', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
};
