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


    /***** STORE START ******/
    public function store(Request $request){
        $artigo = new Artigo();

        /**** Data eceiving ****/
        $artigo->titulo = $request->title;
        $artigo->descricao = $request->description;
        $artigo->id_user = auth()->user()->id;

        /** FOR IMAGE FILE **/
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $imagem = $request->file('image');
            $extensaoImagem = $imagem->getClientOriginalExtension();

            $nomeImagem = md5($imagem->getClientOriginalName().strtotime('now')).'.'.$extensaoImagem;

            $imagem->move(public_path('/Site/images/articles'), $nomeImagem);
            $artigo->imagem = $nomeImagem;

        }

        /**** FOR PDF FILE ****/
        if($request->hasFile('pdf') && $request->file('pdf')->isValid()){
            $pdf = $request->file('pdf');

            // will get the file extension
            $pdfExtension = $pdf->getClientOriginalExtension();
            // will form file new name
            $pdfName = md5($pdf->getClientOriginalName().strtotime('now')).'.'.$pdfExtension;
            //Moving pdf file to a foulder
            $pdf->move(public_path('Site/pdfs/articles'), $pdfName);
            // Assigning value to article pdf file in database
            $artigo->pdf = $pdfName;
        }

        /**** SAVE REQUEST ***/
        $artigo->save();

        return redirect()->route('admin.articles');
    }



    /***** DOWNLOAD START ******/
    public function download(Request $request, $pdf){
        return response()->download(public_path('Site/pdfs/articles', $pdf));
    }



    /***** DESTROY START ******/
    public function destroy($id){
        Artigo::findOrFail($id)->delete();
        return redirect()->back();
    }


    public function updateView($id){
        $artigo = Artigo::findOrFail($id);

        return view('Admin.Articles.update.update', compact('artigo'));
    }

    /***** UPDATE START ******/
    public function update( Request $request, $id){
        $artigo = Artigo::findOrFail($id);


        $artigo->titulo = $request->title;
        $artigo->descricao = $request->description;
        $artigo->id_user = auth()->user()->id;

        /** FOR IMAGE FILE **/
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $imagem = $request->file('image');
            $extensaoImagem = $imagem->getClientOriginalExtension();

            $nomeImagem = md5($imagem->getClientOriginalName().strtotime('now')).'.'.$extensaoImagem;

            $imagem->move(public_path('/Site/images/articles'), $nomeImagem);
            $artigo->imagem = $nomeImagem;

        }

        /**** FOR PDF FILE ****/
        if($request->hasFile('pdf') && $request->file('pdf')->isValid()){
            $pdf = $request->file('pdf');

            // will get the file extension
            $pdfExtension = $pdf->getClientOriginalExtension();
            // will form file new name
            $pdfName = md5($pdf->getClientOriginalName().strtotime('now')).'.'.$pdfExtension;
            //Moving pdf file to a foulder
            $pdf->move(public_path('Site/pdfs/articles'), $pdfName);
            // Assigning value to article pdf file in database
            $artigo->pdf = $pdfName;
        }

        /**** UPADATE REQUEST ***/
        $artigo->update();

        return redirect()->route('admin.articles');
    }
    /***** DESTROY END ******/


}
