<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model {
	protected $table = 'funcionarios';
	protected $fillable = ['tipo_documento','nombres','apellidos','cargo','especialidad','direccion','email','fecha_nacimiento','telefono','genero'];
	protected $guarded = ['identificacion_funcionario'];

	//

}
