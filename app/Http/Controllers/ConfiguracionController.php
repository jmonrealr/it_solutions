<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ConfiguracionController extends Controller
{
    /**
     * 
     */
    public function index($id){
        User::find($id)->get();
        return view('Configuraciones.index',get_defined_vars());
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
        Alert::success('Éxito', 'Perfil actualizado con éxito');
        return redirect()->route('Configuraciones.index');
    }
}
