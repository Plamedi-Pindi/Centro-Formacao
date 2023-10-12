<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Curso;

class CursosController extends Controller
{
    public function index()
    {
        return view('Admin.Cursos.home.Cursos');
    }

    /****** CREATE A NEW CURSO ******/
    public function create()
    {
        $categorias = Area::all();

        return view('Admin.Cursos.create.novoCurso', compact('categorias'));
    }

    /****** CURSO LIST******/
    public function cursoList(){

        $cursos = Curso::all();
        return view('Admin.Cursos.list.listarCurso', compact('cursos'));
    }


    /****** STORE A NEW CURSO ******/
    public function store(Request $request)
    {
        $curso = new Curso;

        $curso->nome = $request->title;
        $curso->descricao = $request->description;
        $curso->id_area = $request->categoria;
        $curso->id_user = auth()->user()->id;

        /** FOR IMAGE FILE **/
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagem = $request->file('image');
            $extensaoImagem = $imagem->getClientOriginalExtension();

            $nomeImagem = md5($imagem->getClientOriginalName() . strtotime('now')) . '.' . $extensaoImagem;

            $imagem->move(public_path('/Site/images/curso'), $nomeImagem);
            $curso->imagem = $nomeImagem;
        }


        /**** SAVE REQUEST ***/
        $curso->save();

        return redirect()->route('admin.cursoList');
    }

}
