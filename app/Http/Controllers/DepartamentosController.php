<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;

class DepartamentosController extends Controller
{
    /**
     * Index para los departamentos
     * 
     * Despliega una lista de los departamentos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Department::get();
        return view('departamentos.index',get_defined_vars());
    }

    /**
     * Crear departamento
     * 
     * Despliega la vista para crear el departamento
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departamentos.crear');
    }

    /**
     * Guardar departamento
     * 
     * Guarda el departamento en la base de datos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required|max:255',
        ]);

        $comentario = Department::create([
            'name'              =>  $request['body'],
        ]);

        Alert::success('Éxito', 'Departamento creado con éxito');
        return redirect()->route('departamentos.index');
    }

    /**
     * Mostrar departamento
     * 
     * Muestra el departamento especificado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departamento = Department::findOrFail($id);
        $users = User::where('id','=',$departamento->user_id)->get();
        return view('departamentos.ver',get_defined_vars());
    }

    /**
     * Editar departamento
     * 
     * Muetra el formulario de edicion del departamento
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamento = Department::findOrFail($id);
        return view('departamentos.editar', get_defined_vars());
    }

    /**
     * Actualizacion del departamento
     * 
     * Actualiza el departamento especificado
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          =>  'required|max:255',
        ]);

        $departamento = Department::findOrFail($id);

        $departamento->update([
            'name'              =>  $request['body'],
        ]);

        Alert::success('Éxito', 'Departamento actualizado con éxito');
        return redirect()->route('departamentos.index');
    }

    /**
     * Eliminar departamento
     * 
     * Elimina el departamento especificado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departamento = Department::findOrFail($id);
        $departamento->delete();
        Alert::success('Éxito', 'Departamento eliminado con éxito');
        return redirect()->route('departamentos.index');
    }
}
