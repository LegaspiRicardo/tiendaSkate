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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('modelo', 255);
            $table->string('marca', 255)->nullable();
            $table->integer('precio');
            $table->integer('cantidad');
            $table->string('color')->nullable();
            $table->string('material')->nullable();
            $table->string('tamano')->nullable();
            $table->string('estatus');
            $table->string('descripcion',255)->nullable();
            $table->string('img1', 255);
            $table->string('img2', 255);
            $table->string('img3', 255);
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
        Schema::dropIfExists('productos');
    }
};
