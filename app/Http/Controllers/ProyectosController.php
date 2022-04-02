<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Project;
use App\Models\Task;
use App\Models\Contract;
use App\Models\User;
use App\Models\Customer;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();    
        return view('Proyectos.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        $employees = User::all();
        return view('Proyectos.crear', get_defined_vars());
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
            'description'   =>  'max:255',
            'start_date'    =>  'required',
            'end_date'      =>  'required',
            'cost_hour'     =>  'required',
            'total_cost'    =>  'required',
            'user_id'       =>  'required',
            'customer_id'   =>  'required',
        ]);
        

        // dd($request->all());

        //Crear  contrato
        // $contract = Contract::create([
        //     'subject'           =>  $request['name'],
        //     'description'       =>  $request['description'],
        //     'initiated_by'      =>  $request['start_date'],
        //     'start_date'        =>  $request['end_date'],
        //     'end_date'          =>  $request['cost_hour'],
        //     'status_id'         =>  $request['total_cost'],
        //     'type_contract_id'  =>  $request['customer_id'],
        // ]);

        //Crear  proyecto
        $project = Project::create([
            'name'          =>  $request['name'],
            'description'   =>  $request['description'],
            'start_date'    =>  $request['start_date'],
            'end_date'      =>  $request['end_date'],
            'cost_hour'     =>  intval($request['cost_hour']),
            'total_cost'    =>  $this->moneyToNumber($request['total_cost']),
            'customer_id'   =>  $request['customer_id'],
            'contract_id'   =>  1,
        ]);
        $project->save();

        //Crear  tareas
        for ($i=0; $i < count($request->activity_name); $i++) { 
            $task = Task::create([
                'name'          =>  $request['activity_name'][$i],
                'end_date'      =>  $request['activity_end_date'][$i],
                'time_hour'     =>  $request['time_hour'][$i],
                'user_id'       =>  $request['user_id'][$i],
                'project_id'    =>  $project->id,
            ]);
            $task->save();
        }

        return redirect()->route('proyectos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        setlocale(LC_MONETARY, 'es_MX');

        $project = Project::find($id);
        $project->total_cost = $this->numberToMoney($project->total_cost);
        foreach ($project->tasks as $task) {
            $task = Arr::add($task, 'amount', $this->numberToMoney($task->time_hour * $project->cost_hour));
        }
        return view('Proyectos.ver', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function moneyToNumber($value) {
		$valueWithoutSignDollar = explode("$", $value);
		$valueWhitoutComas = str_replace(",", "", $valueWithoutSignDollar[1]);

		return (float)$valueWhitoutComas;
	}

    public function numberToMoney($value){
        return '$' . number_format($value, 2);
    }

}
