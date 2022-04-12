<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class PerfilConfigController extends Controller
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
        return redirect()->route('configuracion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('profile')->find($id);
        return view('configuracion.index',get_defined_vars());
    }
}
