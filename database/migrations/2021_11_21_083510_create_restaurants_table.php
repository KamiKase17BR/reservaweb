<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
               $table->id()->unique();
               $table->integer('id_parceiro');
               $table->string('imagem');
               $table->string('nomerestaurante');
               $table->string('descricao');
               $table->string('cnpj');
               $table->string('ie');
               $table->string('cep');
               $table->string('endereco');
               $table->string('bairro');
               $table->string('cidade');
               $table->string('estado');
               $table->string('representante');
               $table->string('rg');
               $table->string('cpf');
               $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
