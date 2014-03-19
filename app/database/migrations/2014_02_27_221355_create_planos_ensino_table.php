<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanosEnsinoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planos_ensino', function($table) {
            $table->increments('id');
            $table->text('competencias');
            $table->text('recursos');
            $table->text('avaliacao');
            $table->text('instrumentos');
            $table->text('acompanhamento');
            $table->text('referencias');
            $table->datetime('data_plano');
            $table->integer('turma_id')->unsigned();

            $table->foreign('turma_id')->references('id')->on('turma')->onDelete('CASCADE')->onUpdate('NO ACTION');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('planosEnsino');
	}

}
