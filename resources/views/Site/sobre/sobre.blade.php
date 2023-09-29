@extends('layouts.merges.site')
@section('title', 'SGPA | Sobre')

@section('content')

    <!-- Inner Content Box ==== -->
    <div class="page-content">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(Site/images/background/bg1.webp);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Sobre Nós</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('site.home') }}">Home</a></li>
                    <li>Sobre</li>
                </ul>
            </div>
        </div>
        <!-- Page Heading Box END ==== -->
        <!-- Page Content Box ==== -->
        <div class="content-block">
            <!-- About Us ==== -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="feature-container">
                                <div class="feature-md text-white m-b20">
                                    <a href="#" class="icon-cell"><img src="Site/images/icon/icon1.png"
                                            alt="" /></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Quem somos</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="feature-container">
                                <div class="feature-md text-white m-b20">
                                    <a href="#" class="icon-cell"><img src="Site/images/icon/icon2.png"
                                            alt="" /></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Nossa missão</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="feature-container">
                                <div class="feature-md text-white m-b20">
                                    <a href="#" class="icon-cell"><img src="Site/images/icon/icon3.png"
                                            alt="" /></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Nossos valores</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod..</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="feature-container">
                                <div class="feature-md text-white m-b20">
                                    <a href="#" class="icon-cell"><img src="Site/images/icon/icon4.png"
                                            alt="" /></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Our Philosophy</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod..</p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Us END ==== -->
            <!-- Our Story ==== -->
            <div class="section-area bg-gray section-sp1 our-story">
                <div class="container">
                    <div class="row align-items-center d-flex">
                        <div class="col-lg-5 col-md-12 heading-bx">
                            <h2 class="m-b10">Nossa História</h2>
                            <h5 class="fw4">It is a long established fact that a reade.</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>
                            <a href="#" class="btn">Leia Mais</a>
                        </div>
                        <div class="col-lg-7 col-md-12 heading-bx p-lr">
                            <div class="video-bx">
                                <img src="Site/images/about/pic1.jpg" alt="" />
                                <a href="https://www.youtube.com/watch?v=x_sJzVe9P_8" class="popup-youtube video"><i
                                        class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Story END ==== -->

        </div>
        <!-- Page Content Box END ==== -->
    </div>
    <!-- Inner Content Box END ==== -->

@endsection
