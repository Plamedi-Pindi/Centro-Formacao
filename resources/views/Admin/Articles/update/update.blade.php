@extends('layouts.merges.AdminMerge')
@section('title', 'SGPA | Novo Artigo')

@section('content')
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Novo Artigo</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Novo Artigo</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-10 m-b30" style="margin: 0 auto">
                    <div class="widget-box">
                        <div class="email-wrapper">

                            <div class="mail-list-container">
                                {{-- FORM START --}}
                                <form class="mail-compose " method="POST" action="{{ route('admin.update.articles', $artigo->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-12">
                                        <label for="title">Título</label>
                                        <input class="form-control" type="text" placeholder="Título doartigo" name="title" value="{{ $artigo->titulo }}">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="description">Descrição</label>
                                        <input class="form-control" type="text" name="description" placeholder="Descrição do artigo" value="{{ $artigo->descricao }}">
                                    </div>

                                    {{-- IMAGEM --}}
                                    <div class="form-group col-12">
                                        <label for="image">Imagem</label><br>
                                        <input type="file"  multiple name="image" value="{{ $artigo->imagem }}">
                                    </div>

                                    {{-- PDF --}}
                                    <div class="form-group col-12">
                                        <label for="pdf">Selecionar PDF</label><br>
                                        <input type="file"
                                            accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                            multiple name="pdf" value="{{ $artigo->pdf }}">
                                    </div>
                                    <div class="form-group col-12">
                                        <button type="submit" class="btn btn-lg">Atualizar Argito</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Your Profile Views Chart END-->
            </div>
        </div>
    </main>

@endsection
