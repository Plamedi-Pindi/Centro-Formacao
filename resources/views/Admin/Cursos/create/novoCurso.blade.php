@extends('layouts.merges.AdminMerge')
@section('title', 'SGPA | Novo Curso')

@section('content')
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Novo Curso</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Novo Curso</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-10 m-b30" style="margin: 0 auto">
                    <div class="widget-box">
                        <div class="email-wrapper">

                            <div class="mail-list-container">
                                {{-- FORM START --}}
                                <form class="mail-compose " method="POST" action="{{ route('admin.curso.post') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-12">
                                        <label for="title">Título</label>
                                        <input class="form-control" type="text" placeholder="Título doartigo"
                                            name="title" required>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="description">Descrição</label>
                                        <textarea name="description" id="" cols="30" rows="10" class="form-control"
                                            placeholder="Descrição do curso....." required></textarea>

                                        {{-- <input class="form-control" type="text" name="description" placeholder="Descrição do artigo"> --}}
                                    </div>

                                    {{-- CATEGORIA --}}
                                    <div class="form-group col-6">
                                        <label for="categoria">Categoria</label>
                                        <select name="categoria" id="categoria" required>
                                            <option>Escolha uma opção</option>
                                            @foreach ($categorias as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    {{-- IMAGEM --}}
                                    <div class="form-group col-12">
                                        <label for="image">Imagem</label><br>
                                        <input type="file" multiple name="image" required>
                                    </div>


                                    <div class="form-group col-12">
                                        <button type="submit" class="btn btn-lg">Criar Curso</button>
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
