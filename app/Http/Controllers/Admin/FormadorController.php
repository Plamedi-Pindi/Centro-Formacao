<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class FormadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formadores = User::where('userType','2')->get();
        return view('Admin.Formador.list.formadores', compact('formadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Formador.create.novoformador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formador = new User;


        $formador->name = $request->name;
        $formador->genero = $request->gender;
        $formador->email = $request->email;
        $formador->telefone = $request->phone;
        $formador->userType = $request->userType;
        $formador->password = $request->password;

        if($request->password === $request->confPassword){
            $formador->save();
            return redirect()->route('admin.formadores');
        }
        else{
            return redirect()->back()->with('alert', 'As senhas introduzidas são diferentes!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formador = User::findOrFail($id);
        return view('Admin.Formador.update.update', compact('formador'));
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
        $formador = User::findOrFail($id);
        $formador->name = $request->name;
        $formador->genero = $request->gender;
        $formador->email = $request->email;
        $formador->telefone = $request->phone;
        $formador->userType = $request->userType;
        $formador->password = $request->password;

        if($request->password === $request->confPassword){
            $formador->update();
            return redirect()->route('admin.formadores');
        }
        else{
            return redirect()->back()->with('alert', 'As senhas introduzidas são diferentes!');
        }
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('sucess', 'Registro elimindado com sucesso!');
    }
}
