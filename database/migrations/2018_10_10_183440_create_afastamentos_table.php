<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfastamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afastamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->integer('tipo_afastamento_id')->unsigned()->index();
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->integer('servidor_id')->unsigned()->index();
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
        Schema::drop('afastamentos');
    }
}
