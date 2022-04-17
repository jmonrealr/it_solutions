<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use RealRashid\SweetAlert\Facades\Alert;



class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('profile')->get();
        // dd($users[0]->departments->first()->name);
        return view('Empleados.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Department::all();
        return view('Empleados.crear', get_defined_vars());
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
            'first_name'            => 'required',
            'paternal_last_name'    => 'required',
            'maternal_last_name'    => 'required',
            'age'                   => 'required',
            'phone_number'          => 'required|unique:profiles',
            'department_id'         => 'required',
            'cargo'                 => 'required',
            'email'                 => 'required|unique:users|email',
            'password'              => 'required',
            'url_image'             => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);


        $user = User::create([
            'name'      => $request['first_name'],
            'email'     => $request['email'],
            'password'  => Hash::make($request['password']),
        ]);


        $profile = Profile::create([
            'first_name'            => $request['first_name'],
            'paternal_last_name'    => $request['paternal_last_name'],
            'maternal_last_name'    => $request['maternal_last_name'],
            'age'                   => $request['age'],
            'phone_number'          => $request['phone_number'],
            'user_id'               => $user->id
        ]);


        if ($request->hasFile('url_image')) {
            $file = $request->file('url_image');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
            $filename = $file->getClientOriginalName();
            $request->merge(['url_image' => $filename]);
        }

        if($request->url_image != null){
            $profile->url_image = 'images/' . $name;
        }

        $profile->save();


        $user->departments()->attach(
            $request['department_id']
        );

        Alert::success('Éxito', 'Empleado guardado con éxito');
        return redirect()->route('empleados.index');
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
        return view('Empleados.ver',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamentos = Department::all();
        $empleado = User::find($id);
        return view('Empleados.editar', get_defined_vars());
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
            'first_name'            => 'required',
            'paternal_last_name'    => 'required',
            'maternal_last_name'    => 'required',
            'age'                   => 'required',
            'phone_number'          => 'required',
            'department_id'         => 'required',
            'email'                 => 'required|email',
            'url_image'             => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        // TODO: If validate fail reurn Alert
        if ($request->hasFile('url_image')) {
            $file = $request->file('url_image');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
            $filename = $file->getClientOriginalName();
            $request->merge(['url_image' => $filename]);
        }

        $employee = User::find($id);
        // $profile = Profile::where('user_id', $employee->id)->first();

        $file_path = public_path() . '/' . $employee->profile->url_image;

        // Si se ingreso una nueva contraseña, la actualiza
        if(empty($request['password'])){
            $request['password'] = $employee->password;
        }else{
            $request['password'] = Hash::make($request['password']);
        }       


        $employee->update([
            'name'      => $request['first_name'],
            'email'     => $request['email'],
            'password'  => $request['password'],
        ]);

        $employee->profile->update([
            'first_name'            => $request['first_name'],
            'paternal_last_name'    => $request['paternal_last_name'],
            'maternal_last_name'    => $request['maternal_last_name'],
            'age'                   => $request['age'],
            'phone_number'          => $request['phone_number'],
        ]);

        if($request->url_image != null){ // There is an image to update
            if($employee->profile->url_image != null ){ // There is an image in the prject to delete
                if(file_exists($file_path)){
                    unlink($file_path);
                }
            }
            $employee->profile->url_image = 'images/' . $name;
        }
        $employee->profile->save();

        
        Alert::success('Éxito', 'Empleado actualizado con éxito');
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = User::findOrFail($id);

        if($empleado->profile->url_image != null){
            $image_path = public_path() . '/' . $empleado->profile->url_image;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $empleado->delete();
        Alert::success('Éxito', 'Empleado eliminado con éxito');
        return redirect()->route('empleados.index');
    }
}
