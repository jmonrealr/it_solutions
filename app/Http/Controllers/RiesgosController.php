<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Risk;
// use RealRashid\SweetAlert\Facade\Alert;

class RiesgosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riesgos = Risk::all();


        return view('Riesgos.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Riesgos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required','description' => 'required','solution' => 'required',]);
        Risk::create($request->all());
        // Alert::success('Éxito', 'Riesgo guardado con éxito');
        return redirect()->route('riesgos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $riesgo = Risk::findOrFail($id);
        return view('Riesgos.ver',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $riesgo = Risk::findOrFail($id);
        return view('Riesgos.editar',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required','description' => 'required','solution' => 'required',]);
        $riesgo = Risk::findOrFail($id);
        $riesgo->update($request->all());        
        // Alert::success('Éxito', 'Riesgo actualizado con éxito');
        return redirect()->route('riesgos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $riesgo = Risk::findOrFail($id);
        $riesgo->delete();
        // Alert::success('Éxito', 'Riesgo eliminado con éxito');
        return redirect()->route('riesgos.index');
    }
}
