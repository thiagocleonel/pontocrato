<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJornadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jornadas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('descricao');
            $table->boolean('segunda');
            $table->boolean('terca');
            $table->boolean('quarta');
            $table->boolean('quinta');
            $table->boolean('sexta');
            $table->boolean('sabado');
            $table->boolean('domingo');
            $table->time('primeira_entrada');
            $table->time('primeira_saida');
            $table->time('segunda_entrada');
            $table->time('segunda_saida');
            $table->time('carga_semanal');
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
        Schema::drop('jornadass');
    }
}
