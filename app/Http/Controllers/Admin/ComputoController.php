<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computo;
use App\Models\Servicio;
use App\models\Usuar;


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
        return view('admin.computos.index',compact('computos'));
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
        $usuarios= Usuar::pluck('tipo_usuario','id');
       
        return view('admin.computos.create',compact('computo','tipos','numeros'));
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
        return redirect()->route('admin.computos.index',$computo)->with('success', 'El insumo se creo con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $usuarios= Usuar::pluck('numero','id');
       

        return view('admin.computos.edit', compact('computo','servicios','usuarios'));
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

        return redirect()->route('admin.computos.index',$computo)
            ->with('success', 'Numero updated successfully');
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
        return redirect()->route('admin.computos.index')
        ->with('success', 'El tipo se elimino con exito');;
    }
}