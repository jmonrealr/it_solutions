<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Project;
use App\Models\Task;
use App\Models\Contract;
use App\Models\User;
use App\Models\Customer;
use RealRashid\SweetAlert\Facades\Alert;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $contract = Contract::create([
            'subject'           =>  'Desarrollo de software',
            'description'       =>  $request['description'],
            'initiated_by'      =>  'Juan Carlos Monreal Romero',
            'start_date'        =>  $request['start_date'],
            'end_date'          =>  $request['end_date'],
            'status_id'         =>  1,
            'type_contract_id'  =>  1,
        ]);

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
        // $project->save();

        //Crear  tareas
        for ($i=0; $i < count($request->activity_name); $i++) { 
            $task = Task::create([
                'name'          =>  $request['activity_name'][$i],
                'end_date'      =>  $request['activity_end_date'][$i],
                'time_hour'     =>  $request['time_hour'][$i],
                'user_id'       =>  $request['user_id'][$i],
                'project_id'    =>  $project->id,
            ]);
            // $task->save();
        }

        $this->generateContract($project);

        Alert::success('Éxito', 'Proyecto guardado con éxito');
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
        $customers = Customer::all();
        $employees = User::all();
        $project = Project::find($id);
        $project->total_cost = $this->numberToMoney($project->total_cost);

        foreach ($project->tasks as $task) {
            $task = Arr::add($task, 'amount', $this->numberToMoney($task->time_hour * $project->cost_hour));
        }
        return view('Proyectos.editar', get_defined_vars());
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
            'description'   =>  'max:255',
            'start_date'    =>  'required',
            'end_date'      =>  'required',
            'cost_hour'     =>  'required',
            'total_cost'    =>  'required',
            'user_id'       =>  'required',
            'customer_id'   =>  'required',
        ]);

        $project = Project::find($id);
        $tasks = $project->tasks;
        $tasksCopy = $tasks->all();

        // Actualizar  proyecto
         $project->update([
             'name'          =>  $request['name'],
             'description'   =>  $request['description'],
             'start_date'    =>  $request['start_date'],
             'end_date'      =>  $request['end_date'],
             'cost_hour'     =>  intval($request['cost_hour']),
             'total_cost'    =>  $this->moneyToNumber($request['total_cost']),
             'customer_id'   =>  $request['customer_id'],
             'contract_id'   =>  $project->contract_id,
         ]);


        // Actualizar  tareas
        for ($i=0; $i < count($request->activity_id); $i++) { 
            if((int)$request['activity_id'][$i] == -1){
                $task = Task::create([
                    'name'          =>  $request['activity_name'][$i],
                    'end_date'      =>  $request['activity_end_date'][$i],
                    'time_hour'     =>  $request['time_hour'][$i],
                    'user_id'       =>  $request['user_id'][$i],
                    'project_id'    =>  $project->id,
                ]);
            }else{
                $taskUpdate = Task::find((int)$request['activity_id'][$i]);
                $indice = 0;
                foreach ($tasks as $oldTask) {
                    // Si la tarea se encuentra en tasks removerla
                    if($taskUpdate->id == $oldTask->id){
                        unset($tasksCopy[$indice]);
                    }
                    $indice += 1;
                }

                $taskUpdate->update([
                    'name'          =>  $request['activity_name'][$i],
                    'end_date'      =>  $request['activity_end_date'][$i],
                    'time_hour'     =>  $request['time_hour'][$i],
                ]);
            }
        }


        // Elimina tareas removidas 
        foreach ($tasksCopy as $task) {
            $task->delete();
        }

        $this->generateContract($project);

        Alert::success('Éxito', 'Proyecto actualizado con éxito');
        return redirect()->route('proyectos.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        // Delete contract from storage
        $contract_path = public_path().'/contracts/'.'CONTRACT-'.strval($project->id).strval($project->customers->id).'.pdf';
        if (file_exists($contract_path)) {
            unlink($contract_path);
        }

        $project->delete();
        Alert::success('Éxito', 'Proyecto eliminado con éxito');
        return redirect()->route('proyectos.index');
    }



    /**
     * Convert string to double
     *
     * @param  string  $value
     * @return double
     */
    public function moneyToNumber($value) {
		$valueWithoutSignDollar = explode("$", $value);
		$valueWhitoutComas = str_replace(",", "", $valueWithoutSignDollar[1]);

		return (float)$valueWhitoutComas;
	}


    /**
     * Convert double to string
     *
     * @param  double  $value
     * @return string
     */
    public function numberToMoney($value){
        return '$' . number_format($value, 2);
    }


    /** 
     * Genera contrato del proyecto
     * 
     * @param App\Models\Project $project
     * @return int 0
    */
    private function generateContract($project){

        $data = [
            'project' => $project,
        ];

        $filename = 'CONTRACT-'.strval($project->id).strval($project->customers->id);

        $pdf = PDF::loadView('Proyectos.plantillaContrato', $data);
        $pdf->save(public_path().'/contracts/'.$filename.'.pdf');

        return 0;
    }

}
