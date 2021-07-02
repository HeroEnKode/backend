<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('system_unit', function (Blueprint $table) {
        
           /* $table->foreign('user_id')->references('id')->on('users');

            $table->string('tipo','1');
            $table->integer('id_superior'); 
            $table->integer('regime_tributario');
            $table->integer('codigo_municipio');
            $table->integer('cep');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fks');
    }
}
