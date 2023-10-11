<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Area;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = User::where('userType', '0')->get();

        return view('Admin.Aluno.list.list', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $interesses = Area::all();
        return view('Admin.Aluno.create.newaluno', compact('interesses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = new User;


        $aluno->name = $request->name;
        $aluno->genero = $request->gender;
        $aluno->email = $request->email;
        $aluno->telefone = $request->phone;
        $aluno->id_area = $request->interesse;
        $aluno->userType = $request->userType;
        $aluno->password = $request->password;

        if($request->password === $request->confPassword){
            $aluno->save();
            return redirect()->route('admin.alunos');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = User::findOrFail($id);
        $interesse = Area::findOrFail($aluno->id_area);
        $interesses = Area::all();
        return view('Admin.Aluno.update.update', compact('aluno', 'interesse', 'interesses'));
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
        $aluno = User::findOrFail($id);
        $aluno->name = $request->name;
        $aluno->genero = $request->gender;
        $aluno->email = $request->email;
        $aluno->telefone = $request->phone;
        $aluno->id_area = $request->interesse;
        $aluno->userType = $request->userType;
        $aluno->password = $request->password;

        if($request->password === $request->confPassword){
            $aluno->update();
            return redirect()->route('admin.alunos');
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
