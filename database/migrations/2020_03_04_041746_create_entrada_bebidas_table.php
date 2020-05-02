<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaBebidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_bebidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('quantidade_entrada');
            $table->decimal('preco_entrada', 6, 2);

            $table->unsignedBigInteger('bebida_id');
            $table->foreign('bebida_id')->references('id')->on('bebidas');

            $table->unsignedBigInteger('entrada_id');
            $table->foreign('entrada_id')->references('id')->on('entradas');

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
        Schema::dropIfExists('entrada_bebidas');
    }
}
