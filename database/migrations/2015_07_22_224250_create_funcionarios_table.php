<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('identificacion_funcionario');
			$table->string('tipo_documento');
		    $table->string('nombres');
		    $table->string('apellidos');
		    $table->string('cargo');
		    $table->string('especialidad');
		    $table->string('direccion');
		    $table->string('email');
		    $table->date('fecha_nacimiento');
		    $table->bigInteger('telefono');
		    $table->char('genero');
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
		Schema::drop('funcionarios');
	}

}
