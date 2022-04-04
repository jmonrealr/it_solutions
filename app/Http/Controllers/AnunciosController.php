<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use RealRashid\SweetAlert\Facades\Alert;

class AnunciosController extends Controller
{
    /**
     * Index para los anuncios
     * 
     * Despliega una lista de los anuncios 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anuncios = Announcement::with('user')->get();
        return view('Anuncios.index',get_defined_vars());
    }

    /**
     * Crear anuncio
     * 
     * Despliega la vista para crear el anuncio
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Anuncios.crear');
    }

    /**
     * Guardar anuncio
     * 
     * Guarda el anuncio en la base de datos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required|max:255',
            'description'   =>  'required|max:255',
            'location'      =>  'required|max:255',
            'total_cost'    =>  'required|decimal',
            'views_conter'  =>  'required|numeric',
        ]);

        $anuncio = Announcement::create([
            'name'              =>  $request['name'],
            'description'       =>  $request['description'],
            'location'          =>  $request['location'],
            'total_cost'        =>  $request['total_cost'],
            'views_counter'     =>  $request['views_counter'],
            'user_id'           =>  $request['user_id'],
        ]);

        Alert::success('Éxito', 'Anuncio creado con éxito');
        return redirect()->route('anuncios.index');
    }

    /**
     * Mostrar Anuncio
     * 
     * Muestra el anuncio especificado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anuncio = Announcement::findOrFail($id)->with('user');
        return view('Anuncios.ver',get_defined_vars());
    }

    /**
     * Editar anuncio
     * 
     * Muetra el formulario de edicion del anuncio
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anuncio = Announcement::findOrFail($id)->with('user');
        return view('Anuncios.editar', get_defined_vars());
    }

    /**
     * Actualizacion del anuncio
     * 
     * Actualiza el anuncio especificado
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          =>  'required|max:255',
            'description'   =>  'required|max:255',
            'location'      =>  'required|max:255',
            'total_cost'    =>  'required|decimal',
            'views_conter'  =>  'required|numeric',
        ]);

        $anuncio = Announcement::findOrFail($id);

        $anuncio->update([
            'name'              =>  $request['name'],
            'description'       =>  $request['description'],
            'location'          =>  $request['location'],
            'total_cost'        =>  $request['total_cost'],
            'views_counter'     =>  $request['views_counter'],
            'user_id'           =>  $request['user_id'],
        ]);

        Alert::success('Éxito', 'Anuncio actualizado con éxito');
        return redirect()->route('anuncios.index');
    }

    /**
     * Eliminar anuncio
     * 
     * Elimina el anuncio especificado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anuncio = Announcement::findOrFail($id);
        $anuncio->delete();
        Alert::success('Éxito', 'Anuncio eliminada con éxito');
        return redirect()->route('anuncios.index');
    }
}
