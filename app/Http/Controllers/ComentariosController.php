<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class ComentariosController extends Controller
{
    /**
     * Index para los comentarios
     * 
     * Despliega una lista de los comentarios
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentario = Comment::get();
        return view('comentarios.index',get_defined_vars());
    }

    /**
     * Crear comentario
     * 
     * Despliega la vista para crear el comentario
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::get();
        return view('comentarios.crear',get_defined_vars());
    }

   /**
     * Guardar comentario
     * 
     * Guarda el comentario en la base de datos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required|max:255',
            'user_id'       =>  'required|numeric',
        ]);

        $comentario = Comment::create([
            'body'              =>  $request['body'],
            'user_id'           =>  $request['user_id'],
        ]);

        Alert::success('Éxito', 'Comentario creado con éxito');
        return redirect()->route('comentarios.index');
    }

    /**
     * Mostrar comentario
     * 
     * Muestra el comentario especificado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comentario = Comment::findOrFail($id);
        $user = User::findOrFail($comentario->user_id);
        return view('comentarios.ver',get_defined_vars());
    }

    /**
     * Editar comentario
     * 
     * Muetra el formulario de edicion del comentario
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::get();
        $comentario = Comment::findOrFail($id);
        $last_user = User::findOrFail($comentario->user_id);
        return view('comentarios.editar', get_defined_vars());
    }

    /**
     * Actualizacion del comentario
     * 
     * Actualiza el comentario especificado
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          =>  'required|max:255',
            'user_id'       =>  'required|numeric',
        ]);

        $comentario = Comment::findOrFail($id);

        $comentario->update([
            'body'              =>  $request['body'],
            'user_id'           =>  $request['user_id'],
        ]);

        Alert::success('Éxito', 'Comentario actualizado con éxito');
        return redirect()->route('comentarios.index');
    }

    /**
     * Eliminar comentario
     * 
     * Elimina el comentario especificado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cometnario = Comment::findOrFail($id);
        $comentario->delete();
        return redirect()->route('comentarios.index');
    }
}
