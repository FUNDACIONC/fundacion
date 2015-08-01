<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComisariasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comisarias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('codigo_comisaria');
			$table->string('nombre');
			$table->string('direccion');
			$table->bigInteger('telefono');
			$table->bigInteger('fk_paciente');
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
		Schema::drop('comisarias');
	}

}
