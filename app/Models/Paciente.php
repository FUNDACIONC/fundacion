<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model {

	protected $table = 'pacientes';
	protected $fillable = ['identificacion_paciente','tipo_documento','nombres','apellidos','direccion','genero','email','fecha_nacimiento','telefono','eps','estado','fk_sede'];
	protected $guarded = ['id'];
	//

}
