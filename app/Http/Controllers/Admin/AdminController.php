<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            return view('Admin.Aluno.Home.index');
        }
    }
}
