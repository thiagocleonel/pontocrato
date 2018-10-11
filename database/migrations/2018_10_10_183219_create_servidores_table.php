<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServidoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servidores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula');
            $table->string('nome');
            $table->string('cpf');
            $table->date('data_admissao');
            $table->integer('secretaria_id')->unsigned()->index();
            $table->integer('departamento_id')->unsigned()->index();
            $table->integer('cargo_id')->unsigned()->index();
            $table->integer('jornada_id')->unsigned()->index();
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
        Schema::drop('servidores');
    }
}
