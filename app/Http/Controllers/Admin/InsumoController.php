<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Insumo;
use App\Models\Tipo;
use App\Models\Numero;
use App\Models\Licenciatura;
use Session;
use Barryvdh\DomPDF\Facade\PDF;


class InsumoController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('can:admin.insumos.edit')->only('edit','update');
        

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $insumos=Insumo::paginate(10);
        return view('admin.insumos.index',compact('insumos'));

    }
    
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insumo= new Insumo();
        $tipos= Tipo::pluck('nombre_insumo','id');
        $numeros= Numero::pluck('numero','id');
        $licenciaturas= Licenciatura::pluck('nombre_licenciatura','id');
        return view('admin.insumos.create',compact('insumo','tipos','numeros','licenciaturas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Insumo::$rules);
        $insumo=Insumo::create($request->all());
        Session::flash('mensaje', "$request->user_nombre puedes tomar tu insumo.");
        return redirect()->route('admin.insumos.index',$insumo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Insumo $insumo)
    {
        

        return view('admin.insumos.show', compact('insumo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insumo = Insumo::find($id);
        $tipos= Tipo::pluck('nombre_insumo','id');
        $numeros= Numero::pluck('numero','id');
        $licenciaturas= Licenciatura::pluck('nombre_licenciatura','id');

        return view('admin.insumos.edit', compact('insumo','tipos','numeros','licenciaturas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insumo $insumo)
    {
        request()->validate(Insumo::$rules);

        $insumo->update($request->all());

        return redirect()->route('admin.insumos.index',$insumo)
            ->with('success', 'Registro actualizado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insumo $insumo)
    {
        $insumo->delete();
        return redirect()->route('admin.insumos.index')
        ->with('success', 'El tipo se elimino con exito');;
    }
}