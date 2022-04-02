<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\TypeContract;
use App\Models\Status;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratos = Contract::get();
        return view('contratos.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contratos.crear');
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
            'subject'           =>  'required|max:255',
            'description'       =>  'required|max:255',
            'initiated_by'      =>  'required|max:255',
            'start_date'        =>  'required|max:255',
            'end_date'          =>  'required|max:255',
            'status_id'         =>  'required|numeric',
            'type_contract_id'  =>  'required|numeric',
        ]);

        $contrato = Contract::create([
            'subject'           =>  $request['subject'],
            'description'       =>  $request['description'],
            'intiated_by'       =>  $request['locatintiated_byion'],
            'start_date'        =>  $request['start_date'],
            'end_date'          =>  $request['end_date'],
            'status_id'         =>  $request['status_id'],
            'type_contract_id'  =>  $request['type_contract_id'],
        ]);

        Alert::success('Éxito', 'Contrato guardado con éxito');
        return redirect()->route('contratos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contrato = Contract::findOrFail($id)->with(['status','type_contract']);
        return view('contratos.ver',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contrato = Contract::findOrFail($id)->get();
        return view('contratos.editar',get_defined_vars());
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
            'subject'           =>  'required|max:255',
            'description'       =>  'required|max:255',
            'initiated_by'      =>  'required|max:255',
            'start_date'        =>  'required|max:255',
            'end_date'          =>  'required|max:255',
            'status_id'         =>  'required|numeric',
            'type_contract_id'  =>  'required|numeric',
        ]);
        
        $contrato = Contract::findOrFail($id)->get();
        
        $contrato->update([
            'subject'           =>  $request['subject'],
            'description'       =>  $request['description'],
            'intiated_by'       =>  $request['locatintiated_byion'],
            'start_date'        =>  $request['start_date'],
            'end_date'          =>  $request['end_date'],
            'status_id'         =>  $request['status_id'],
            'type_contract_id'  =>  $request['type_contract_id'],
        ]);
        Alert::success('Éxito', 'Contrato actualizado con éxito');
        return redirect()->route('contratos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contrato = Contract::findOrFail($id)->get();
        $contrato->delete();
        Alert::success('Éxito', 'Contrato eliminado con éxito');
        return redirect()->route('contratos.index');
    }
}
