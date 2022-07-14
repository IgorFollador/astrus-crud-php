<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagem', function (Blueprint $table) {
            $table->id();
            $table->string('dsImagem', 255);
            $table->string('nomeDoArquivo', 120)->unique();
        
            $table->bigInteger('idProduto')->unsigned()->nullable();
            $table->foreign('idProduto')->references('id')->on('Produto');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagem');
    }
}
