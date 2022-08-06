<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipo;
class TipoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.tipos.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tipos= Tipo::all()->sortBy('nombre_insumo');
        return view('admin.tipos.index',compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipo::$rules);
        $tipo = Tipo::create($request->all());

        return redirect()->route('admin.tipos.index',$tipo)
        ->with('success', 'El Tipo se creo con exito.');
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo $tipo)
    {
        return view('admin.tipos.show',compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo $tipo)
    {
        return view('admin.tipos.edit',compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo $tipo)
    {
        request()->validate(Tipo::$rules);

        $tipo->update($request->all());
        return redirect()->route('admin.tipos.index',$tipo)
        ->with('success', 'El tipo se actualizo con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo $tipo)
    {
        $tipo->delete();
        return redirect()->route('admin.tipos.index')
        ->with('success', 'El tipo se elimino con exito');;
    }
}