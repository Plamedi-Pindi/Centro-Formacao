<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artigo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){

        $artigos = Artigo::all();

        return view('Admin.Articles.articles', compact('artigos'));
    }

    public function create(){
        return view('Admin.Articles.newArticles');
    }

    public function post(Request $request){
        $artigo = new Artigo();

        /**** Data eceiving ****/
        $artigo->titulo = $request->title;
        $artigo->descricao = $request->description;
        $artigo->id_user = auth()->user()->id;

        /** FOR IMAGE**/
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $imagem = $request->file('image');
            $extensaoImagem = $imagem->getClientOriginalExtension();

            $nomeImagem = md5($imagem->getClientOriginalName().strtotime('now')).'.'.$extensaoImagem;

            $imagem->move(public_path('/Site/images/articles'), $nomeImagem);
            $artigo->imagem = $nomeImagem;

        }

        /**** SAVE REQUEST ***/
        $artigo->save();


        return redirect()->route('admin.articles');
    }


}
