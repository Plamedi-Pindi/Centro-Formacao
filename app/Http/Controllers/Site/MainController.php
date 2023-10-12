<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Artigo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /*############## INDEX ###############*/
    function index(){
        return view('Site.Home.index');
    }

     /*############## ABOUT ###############*/
    public function about(){
        return view('Site.sobre.sobre');
    }

     /*############## ARTICLES ###############*/
    public function article(){
        $artigos = Artigo::all();
        $sugestao = Artigo::paginate(6);
        return view('Site.Articles.artigos', compact('artigos', 'sugestao'));
    }

     /*############## CONTACTS ###############*/
     public function contact(){
        return view('Site.Contanct.contact');
     }




}
