<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Comment;
use App\Models\Department;
use App\Models\User;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

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
        $comentarios = Comment::with('user')->paginate(5);

        foreach ($comentarios as $comentario) {
            $hora = Carbon::createFromFormat('Y-m-d H:i:s', $comentario->created_at)->format('H:m A');
            $dia = Carbon::createFromFormat('Y-m-d H:i:s', $comentario->created_at)->format('d M');

            $comentario = Arr::add($comentario, 'hora', $hora);
            $comentario = Arr::add($comentario, 'dia', $dia);
        }

        return view('Comentarios.index',get_defined_vars());
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
        return view('Comentarios.crear');
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
            'body'          =>  'required|max:255',
        ]);
        //TODO: fix user_id to auth()->id
        $comentario = Comment::create([
            'body'              =>  $request['body'],
            // 'user_id'           =>  auth()->user()->id,
            'user_id'           =>  1,
        ]);



        Alert::success('Éxito', 'Comentario agregado con éxito');
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
        $comentario = Comment::with('user')->findOrFail($id);
        return view('Comentarios.ver',get_defined_vars());
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
        return view('Comentarios.editar', get_defined_vars());
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
            'body'          =>  'required|max:255',
            'user_id'       =>  'required|numeric',
        ]);

        $comentario = Comment::findOrFail($id);

        $comentario->update([
            'body'              =>  $request['body'],
            'user_id'           =>  $request['user_id'],
        ]);
        //TODO: fix user_id to auth()->id
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
        $comentario = Comment::findOrFail($id);
        $comentario->delete();
        Alert::success('Éxito', 'Comentario eliminada con éxito');
        return redirect()->route('comentarios.index');
    }
}
