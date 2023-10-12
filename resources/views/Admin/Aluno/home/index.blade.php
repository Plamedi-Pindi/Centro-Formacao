@extends('layouts.merges.AdminMerge')

@section('title', 'Admin Dashboard')

@section('content')
    <!--Main container start -->
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Dashboard</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Dashboard</li>
                </ul>
            </div>

            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4>Cursos Sugeridos</h4>
                    </div>
                    <div class="widget-inner">
                        @foreach ($interesses as $interesse)
                            <div class="card-courses-list bookmarks-bx">
                                <div class="card-courses-media">
                                    <img src="/Site/images/curso/{{ $interesse->imagem }}" alt="" />
                                </div>
                                <div class="card-courses-full-dec">
                                    <div class="card-courses-title">
                                        <h4 class="m-b5">{{ $interesse->nome }}</h4>
                                    </div>
                                    <div class="card-courses-list-bx">
                                        <ul class="card-courses-view">

                                            <li class="card-courses-categories">
												<h5>Professore</h5>
												<h4>{{ $interesse->user->name }}</h4>
											</li>
                                            <li class="card-courses-categories">
												<h5>Categoria</h5>
												<h4>{{ $interesse->categoria->nome }}</h4>
											</li>


                                        </ul>
                                    </div>
                                    <div class="row card-courses-dec">
                                        <div class="col-md-12">
                                            <p>{{ $interesse->descricao }}</p>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="#" class="btn radius-xl">Inscrever-se</a>
                                            <a href="#" class="btn red outline radius-xl ">Mais Detalhes</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
