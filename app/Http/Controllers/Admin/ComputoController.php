<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computo;
use App\Models\Servicio;
use App\models\Usuar;
use App\models\Licenciatura;



class ComputoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computos=Computo::all();
        return view('computos.index',compact('computos'));
    }
    public function index2()
    {
        $computos=Computo::all();
        return view('computos.index2',compact('computos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $computo= new Computo();
        $servicios= Servicio::pluck('nombre_servicio','id');
        $licenciaturas= Licenciatura::pluck('nombre_licenciatura','id');
        $usuarios= Usuar::pluck('tipo_usuario','id');
        
        return view('computos.create',compact('computo','servicios','licenciaturas','usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Computo::$rules);
        $computo=Computo::create($request->all());
        
        return redirect()->route('computos.index',$computo)->with('success', 'Puedes ocupar la Copmutadora.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Computo $computo)
    {
        return view('computos.show', compact('computo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computo = Computo::find($id);
        $servicios= Servicio::pluck('nombre_servicio','id');
        $usuarios= Usuar::pluck('tipo_usuario','id');
        $licenciaturas= Licenciatura::pluck('nombre_licenciatura','id');

        return view('computos.edit', compact('computo','servicios','licenciaturas','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computo $computo)
    {
        request()->validate(Computo::$rules);

        $computo->update($request->all());

        return redirect()->route('computos.index',$computo)
            ->with('success', 'El registro se actualizo con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computo $computo)
    {
        $computo->delete();
        return redirect()->route('computos.index2')
        ->with('success', 'El registro se elimino con exito');;
    }
}