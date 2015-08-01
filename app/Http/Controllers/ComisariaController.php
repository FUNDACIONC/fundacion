<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\comisaria as comisaria;

use Illuminate\Http\Request;

class ComisariaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $comisarias = Comisaria::all();
        return \View::make('comisaria_list',compact('comisarias'));
		//
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
		$comisaria = new Comisaria;
        $comisaria ->create($request->all());
        return redirect('comisaria');//
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
		$comisaria = Comisaria::find($codigo_comisaria);
             return \View::make('update',compact('comisaria'));
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
		$comisaria = Comisaria::find($request->codigo_comisaria);
        $comisaria->nombre = $request->nombre;
        $comisaria->direccion =$request->direccion;
        $comisaria->telefono=$request->telefono;
        $comisaria->fk_paciente =$request->fk_paciente;
        
        $comisaria->save();
        return redirect('comisaria');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		 $comisaria = Comisaria::find($codigo_comisaria);
         $comisaria->delete();
         return redirect()->back();//
	}

	 public function search(Request $request)
	{
		 $comisarias = Comisaria::where('codigo_comisaria','like', '%'.$request->codigo_comisaria.'%')->get();
         return \View::make('comisaria_list', compact('comisarias'));
 //
	}

}
