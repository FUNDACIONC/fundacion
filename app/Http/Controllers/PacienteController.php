<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\paciente as paciente;

use Illuminate\Http\Request;

class PacienteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$paciente= Paciente::all();
        return \View::make('paciente_list', compact('pacientes'));
        //
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('paciente');
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$paciente = new Paciente;
        $paciente ->create($request->all());
        return redirect('paciente');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$paciente = Paciente::find($request->identificacion_paciente);
        $paciente->tipo_documento = $request->tipo_documento;
        $paciente->nombres =$request->nombres;
        $paciente->apellidos =$request->apellidos;
        $paciente->direccion =$request->direccion;
        $paciente->genero =$request->genero; 
        $paciente->email =$request->email;
        $paciente->fecha_nacimiento =$request->fecha_nacimiento; 
        $paciente->telefono =$request->telefono;
        $paciente->eps =$request->eps;
        $paciente->estado=$request->estado;
        $paciente->fk_sede =$request->fk_sede;   
        
     $paciente->save();
        return redirect('paciente');
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		 $paciente = Paciente::find($identificacion_paciente);
         $paciente->delete();
         return redirect()->back();//
	}

    public function search(Request $request)
	{
		 $paciente = Paciente::where('identificacion_paciente','like', '%'.$request->identificacion_paciente.'%')->get();
         return \View::make('paciente_list', compact('pacientes'));
/*
       $pacientes = Paciente::where('nombres', '=',$request->nombres)->get();
       $pacientes = Paciente::where('created_at','>',$date)->get();
       $pacientes = Paciente::where('created_at','<',$date)->get();
       $pacientes = Paciente::where('created_at','>',$date)
                       ->where('nombres','=',$nombres)->get();
        $pacientes = Paciente::where('nombres','>',$name_1)
                       ->orWhere('nombres','=',$name_2)
                       ->get();
 //*/
	}
}
