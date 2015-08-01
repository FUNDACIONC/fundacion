<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\funcionario as funcionario;

use Illuminate\Http\Request;

class FuncionarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$funcionario = funcionario::all();
        return \View::make('list', compact('funcionarios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		return \View::make('new');
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$funcionario = new funcionario;
        $funcionario ->create($request->all());
        return redirect('funcionario');
		//
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
		$funcionario = funcionario::find($identificacion_funcionario);
        return \View::make('update', compact('funcionario'));
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
	    $funcionario = funcionario::find($request->identificacion_funcionario);
        $funcionario->tipo_documento = $request->tipo_documento;
        $funcionario->nombres =$request->nombres;
        $funcionario->apellidos =$request->apellidos;
        $funcionario->cargo =$request->cargo; 
        $funcionario->especialidad =$request->especialidad;
        $funcionario->direccion =$request->direccion;
        $funcionario->email =$request->email;
        $funcionario->fecha_nacimiento =$request->fecha_nacimiento; 
        $funcionario->telefono =$request->telefono;
        $funcionario->genero =$request->genero; 
     $funcionario->save();
        return redirect('funcionario');


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
    	 $funcionario = funcionario::find($identificacion_funcionario);
         $funcionario->delete();
         return redirect()->back();
		//
	}

    public function search(Request $request)
    {
   	      $funcionario = Funcionario::where('nombres','like', '%'.$request->nombres.'%')->get();
         return \View::make('list', compact('funcionarios'));
            //
	}

}
