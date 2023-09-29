<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
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
        return view('Site.Articles.artigos');
    }

     /*############## CONTACTS ###############*/
     public function contact(){
        return view('Site.Contanct.contact');
     }




}
