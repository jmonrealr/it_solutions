<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\TypeContract;
use App\Models\Status;
use RealRashid\SweetAlert\Facades\Alert;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratos = Contract::with('status', 'type_contract')->get();
        return view('Contratos.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Status::all();
        $type_contracts = TypeContract::all();
        return view('Contratos.crear', [
            'statuses' => $statuses,
            'type_contracts' => $type_contracts
        ]);
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
            'start_date'        =>  'required|date',
            'end_date'          =>  'required|date',
            'status_id'         =>  'required|numeric',
            'type_contract_id'  =>  'required|numeric',
        ]);

        $contrato = Contract::create($request->all());
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
        $contrato = Contract::findOrFail($id);
        $statuses = Status::all();
        $type_contracts = TypeContract::all();
        return view('Contratos.ver', [
            'contrato' => $contrato,
            'statuses' => $statuses,
            'type_contracts' => $type_contracts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contrato = Contract::findOrFail($id);
        $statuses = Status::all();
        $type_contracts = TypeContract::all();
        return view('Contratos.editar', [
            'contrato' => $contrato,
            'statuses' => $statuses,
            'type_contracts' => $type_contracts
        ]);
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
        // dd($request->all());
        $request->validate([
            'subject'           =>  'required|max:255',
            'description'       =>  'required|max:255',
            'initiated_by'      =>  'required|max:255',
            'start_date'        =>  'required|date',
            'end_date'          =>  'required|date',
            'status_id'         =>  'required|numeric',
            'type_contract_id'  =>  'required|numeric',
        ]);

        $contrato = Contract::findOrFail($id);
        $contrato->update($request->all());
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
        $contrato = Contract::findOrFail($id);
        $contrato->delete();
        Alert::success('Éxito', 'Contrato eliminado con éxito');
        return redirect()->route('contratos.index');
    }
}
