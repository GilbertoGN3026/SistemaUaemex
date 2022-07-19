<?php

namespace App\Http\Controllers\Admin;
use App\Models\Numero;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NumeroController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.numeros.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $numeros=Numero::all();
        return view('admin.numeros.index',compact('numeros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.numeros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $numero = Numero::create($request->all());

        return redirect()->route('admin.numeros.index',$numero)
        ->with('success', 'El insumo se creo con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($numero)
    {
        return view('admin.numeros.show',compact('numero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Numero $numero)
    {
        return view('admin.numeros.edit',compact('numero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Numero $numero)
    {
        request()->validate(Numero::$rules);

        $numero->update($request->all());

        return redirect()->route('admin.numeros.index',$numero)
            ->with('success', 'Numero updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($numero)
    {
        //
    }
}