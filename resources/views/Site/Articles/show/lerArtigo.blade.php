@extends('layouts.merges.site')
@section('title', 'SGPA | Artigos')

@section('content')

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(/Site/images/articles/{{ $artigo->imagem }});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Detalhes do Artigo: {{ $artigo->titulo }}</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('site.home') }}">Home</a></li>
                    <li>Artigo</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-block">
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <!-- Left part start -->
                        <div class="col-lg-8 col-xl-8">
                            <!-- blog start -->
                            <div class="recent-news blog-lg">
                                <div class="action-box blog-lg">
                                    <img src="/Site/images/articles/{{ $artigo->imagem }}" alt="{{ $artigo->titulo }}">
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">
                                        {{-- <li><a href="#"><i class="fa fa-calendar"></i>May 14 2019</a></li> --}}
                                        <li><a href="#"><i class="fa fa-user"></i>Por {{ $artigo->user->name }}</a>
                                        </li>
                                    </ul>
                                    <h5 class="post-title"><a href="#">{{ $artigo->titulo }}</a></h5>

                                    <p>{{ $artigo->descricao }}</p>

                                    <iframe src="/Site/pdfs/articles/{{ $artigo->pdf }}" frameborder="1"
                                        class="col-lg-12 col-xl-12" height="500px"></iframe>


                                    <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                                    <h6>SHARE </h6>
                                    <ul class="list-inline contact-social-bx">
                                        <li><a href="#" class="btn outline radius-xl"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="btn outline radius-xl"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="btn outline radius-xl"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" class="btn outline radius-xl"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                                </div>
                            </div>

                            <!-- blog END -->
                        </div>
                        <!-- Left part END -->
                        <!-- Side bar start -->
                        <div class="col-lg-4 col-xl-4">
                            <aside class="side-bar sticky-top">
                                <div class="widget">
                                    <h6 class="widget-title">Pesquisar</h6>
                                    <div class="search-bx style-1">
                                        <form role="search" method="post">
                                            <div class="input-group">
                                                <input name="text" class="form-control"
                                                    placeholder="Enter your keywords..." type="text">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="fa fa-search text-primary"></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @foreach ($artigos as $artigo)
                                @endforeach
                                <div class="widget recent-posts-entry">
                                    <h6 class="widget-title">Artigos recomendados</h6>
                                    <div class="widget-post-bx">
                                        @foreach ($artigos as $artigo)

                                            <div class="widget-post clearfix">

                                                <div class="ttr-post-media"> <img
                                                        src="/Site/images/articles/{{ $artigo->imagem }}" width="200"
                                                        height="143" alt=""> </div>
                                                <div class="ttr-post-info">
                                                    <div class="ttr-post-header">

                                                        <h6 class="post-title"><a href="{{ route('admin.read.articles', $artigo->id) }}">{{ $artigo->titulo }}</a></h6>
                                                    </div>
                                                    <ul class="media-post">
                                                        {{-- <li><a href="#"><i class="fa fa-calendar"></i>Oct 23 2019</a> --}}
                                                        </li>
                                                        <li><a href="{{ route('admin.read.articles', $artigo->id) }}"><i class="fa fa-user"></i>{{ $artigo->user->name }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                            </aside>
                        </div>
                        <!-- Side bar END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->

@endsection
