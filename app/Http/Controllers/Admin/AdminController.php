<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Curso;

class AdminController extends Controller
{
    function index(){
        $userType = Auth()->user()->userType;

        if($userType == '1'){
            return view('Admin.Gerente.index');
        }
        if($userType == '2'){
            return view('Admin.Formador.home.index');
        }
        else{

            $user = auth()->user()->id_area;
            $interesses = Curso::where('id_area', $user)->get();

            // return $interesse;
            // $user->
            return view('Admin.Aluno.Home.index', compact('interesses'));
        }
    }
}
