<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Licenciatura;
use Illuminate\Http\Request;
use PharIo\Manifest\License;

class LicenciaturaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.licenciaturas.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licenciaturas=Licenciatura::all()->sortBy('nombre_licenciatura');
        return view ('admin.licenciaturas.index', compact ('licenciaturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.licenciaturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Licenciatura::$rules);
        $licenciatura=Licenciatura::create($request->all());
        return redirect()->route('admin.licenciaturas.index',$licenciatura)->with('success', 'El insumo se creo con exito.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($licenciatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Licenciatura $licenciatura)
    {
        return view('admin.licenciaturas.edit',compact('licenciatura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Licenciatura $licenciatura)
    {
        request()->validate(Licenciatura::$rules);

        $licenciatura->update($request->all());
        return redirect()->route('admin.licenciaturas.index',$licenciatura)
        ->with('success', 'La licenciatura se actualizo con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licenciatura $licenciatura)
    {
        $licenciatura->delete();
        return redirect()->route('admin.licenciaturas.index')
        ->with('success', 'La licenciatura se elimino con exito.');;
    }
}