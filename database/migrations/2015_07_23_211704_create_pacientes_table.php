<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pacientes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('identificacion_paciente');
			$table->string('tipo_documento');
			$table->string('nombres');
			$table->string('apellidos');
			$table->string('direccion');
            $table->char('genero');
			$table->string('email');
			$table->date('fecha_nacimiento');
			$table->bigInteger('telefono');
			$table->string('eps');
			$table->char('estado');
			$table->Integer('fk_sede');
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
		Schema::drop('pacientes');
	}

}
