<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Profile;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::with('user.tasks')->where('user_id', '=', auth()->id())->first();
//        dd($profile);

        $department = auth()->user()->departments()->get();
//        dd($department);
        return view('configuracion.index', [
            'profile' => $profile,
            'department' => $department[0]
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('configuracion.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //TODO: update profile information and validation
        $request->validate([
            'first_name' => 'required|string|max:255',
            'paternal_last_name' => 'required|string|max:255',
            'maternal_last_name' => 'nullable|string|max:255',
            'phone_number' => 'nullable|max:15|min:10',
            'url_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'age' => 'nullable|numeric|gt:17',
        ]);
        $profile = Profile::where('user_id', '=', auth()->id())->first();

        if ($request->hasFile('url_image')) {
            $file = $request->file('url_image');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
            $filename = $file->getClientOriginalName();
            $request->merge(['url_image' => $filename]);
        }
        $file_path = public_path() . '/' . $profile->url_image;
        $profile->update($request->all());
        if($request->url_image != null){ // There is an image to update
            if($profile->url_image != null ){ // There is an image in the prject to delete
                if(file_exists($file_path)){
                    unlink($file_path);
                }
            }
            $profile->url_image = 'images/' . $name;
        }
        $profile->save();
        Alert::success('Éxito', 'Perfil actualizado con éxito');
        return redirect()->route('profile.index');
    }

    /**
     * Show the form for editing the specified resource password.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_password()
    {
        return view('configuracion.password');
    }
}
