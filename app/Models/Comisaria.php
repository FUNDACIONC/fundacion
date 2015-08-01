<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comisaria extends Model {

	protected $table = 'comisarias';
	protected $fillable = ['nombre','direccion','telefono','fk_paciente'];
	protected $guarded = ['codigo_comisaria'];


}
