<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_units', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name','30');
            $table->string('razao_social','120');
            $table->string('cnpj','100');
            $table->string('nome_fantasia','120');
            $table->string('incricao_estadual','30');
            $table->string('inscricao_estadual_st','30')->nullable();
            $table->string('incricao_municipal','15');
            $table->string('cnae','7');
            $table->string('logradouro','120');
            $table->string('numero','60');
            $table->string('complemento','60');
            $table->string('bairro','120');        
            $table->string('fone','14');
            $table->string('ativa','1')->default('1');

            // fks
            $table->string('tipo','1');
            $table->integer('id_superior')->nullable(); 
            $table->integer('regime_tributario');
            $table->integer('codigo_municipio');
            $table->integer('cep');

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
        Schema::dropIfExists('init');
    }
}
