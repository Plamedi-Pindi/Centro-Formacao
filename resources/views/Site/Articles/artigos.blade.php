@extends('layouts.merges.site')
@section('title', 'SGPA | Artigos')

@section('content')

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(Site/images/background/bg1.webp);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Artigos</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('site.home') }}">Home</a></li>
                    <li>Artigos</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-block">
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <!-- left part start -->
                        <div class="col-lg-8 col-xl-8 col-md-7">
                            <!-- blog grid -->
                            <div id="masonry" class="ttr-blog-grid-3 row">
                                @foreach ($artigos as $artigo)
                                    <div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
                                        <div class="recent-news">
                                            <div class="action-box">
                                                <img src="/Site/images/articles/{{ $artigo->imagem }}" alt="">
                                            </div>
                                            <div class="info-bx">
                                                <ul class="media-post">
                                                    {{-- <li><a href="#"><i class="fa fa-calendar"></i>{{ $artigo-> }}</a></li> --}}
                                                    <li><a href="#"><i class="fa fa-user"></i> Por {{ $artigo->user->name }}</a></li>
                                                </ul>
                                                <h5 class="post-title"><a href="blog-details.html">{{ $artigo->titulo }}</a></h5>
                                                <p>{{ $artigo->descricao }}.</p>
                                                <div class="post-extra">
                                                    <a href="{{ route('admin.read.articles', $artigo->id) }}" class="btn-link">READ MORE</a>
                                                    <a href="{{route('admin.download.articles', $artigo->pdf) }}" class="comments-bx"><i class="fa fa-download"></i>Baixar em PDF</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <!-- blog grid END -->
                            <!-- Pagination -->
                            <div class="pagination-bx rounded-sm gray clearfix">
                                <ul class="pagination">
                                    <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- Pagination END -->
                        </div>
                        <!-- left part END -->
                        <!-- Side bar start -->
                        <div class="col-lg-4 col-xl-4 col-md-5 sticky-top">
                            <aside class="side-bar sticky-top">
                                <div class="widget">
                                    <h6 class="widget-title">Pesquisar</h6>
                                    <div class="search-bx style-1">
                                        <form role="search" method="post">
                                            <div class="input-group">
                                                <input name="text" class="form-control" placeholder="A palavra chave..."
                                                    type="text">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="fa fa-search text-primary"></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="widget recent-posts-entry">
                                    <h6 class="widget-title">Artigos Recomendados</h6>
                                    <div class="widget-post-bx">
                                        @foreach ($sugestao as $item)

                                        <div class="widget-post clearfix">

                                            <div class="ttr-post-media"> <img
                                                    src="/Site/images/articles/{{ $item->imagem }}" width="200"
                                                    height="143" alt=""> </div>
                                            <div class="ttr-post-info">
                                                <div class="ttr-post-header">

                                                    <h6 class="post-title"><a href="{{ route('admin.read.articles', $item->id) }}">{{ $item->titulo }}</a></h6>
                                                </div>
                                                <ul class="media-post">
                                                    {{-- <li><a href="#"><i class="fa fa-calendar"></i>Oct 23 2019</a> --}}
                                                    </li>
                                                    <li><a href="{{ route('admin.read.articles', $item->id) }}"><i class="fa fa-user"></i>{{ $item->user->name }}</a>
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
    <!-- Left & right section END -->
    <!-- Content END-->

@endsection
