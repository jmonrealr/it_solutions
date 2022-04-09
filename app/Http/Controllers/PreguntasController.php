<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use RealRashid\SweetAlert\Facades\Alert;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $preguntas = Question::with('answers')->get();
        $preguntas = Question::with('answers')->paginate(5);
        // $preguntas = Question::paginate(5);
        return view('Preguntas.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preguntas = Question::get();
        return view('Preguntas.crear',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required|max:255',
            'description'   =>  'required|max:255',
            //'user_id'       =>  'required|numeric',
        ]);

        $pregunta = Question::create([
            'name'              =>  $request['name'],
            'description'       =>  $request['description'],
            // 'user_id'           =>  auth()->user()->id,
            'user_id'           =>  1,
        ]);

        Alert::success('Éxito', 'Pregunta creado con éxito');
        return redirect()->route('preguntas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pregunta = Question::findOrFail($id);
        //$user = User::findOrFail($anuncio->user_id);
        return view('Preguntas.ver',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pregunta = Question::findOrFail($id);
        //$user = User::findOrFail($anuncio->user_id);
        return view('Preguntas.editar',get_defined_vars());
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
        $request->validate([
            'name'          =>  'required|max:255',
            'description'   =>  'required|max:255',
            //'user_id'       =>  'required|numeric',
        ]);

        $pregunta = Question::findOrFail($id);

        $pregunta->update([
            'name'              =>  $request['name'],
            'description'       =>  $request['description'],
            //'user_id'           =>  $request['user_id'],
        ]);

        Alert::success('Éxito', 'Pregunta actualizada con éxito');
        return redirect()->route('preguntas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pregunta = Question::findOrFail($id);
        $pregunta->delete();
        Alert::success('Éxito', 'Pregunta eliminada con éxito');
        return redirect()->route('preguntas.index');
    }
}
