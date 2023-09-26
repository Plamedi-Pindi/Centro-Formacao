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

            {{-- <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4>Cursos Sugeridos</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="card-courses-list bookmarks-bx">
                            <div class="card-courses-media">
                                <img src="/Admin/images/courses/pic6.jpg" alt=""/>
                            </div>
                            <div class="card-courses-full-dec">
                                <div class="card-courses-title">
                                    <h4 class="m-b5">Introdução a Cibersegurança</h4>
                                </div>
                                <div class="card-courses-list-bx">
                                    <ul class="card-courses-view">
                                        <li class="card-courses-Categoria">
                                            <h5>Categoria</h5>
                                            <h4>TI</h4>
                                        </li>
                                        <li class="card-courses-review">
                                            <h5>3 Avalhações</h5>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                                <div class="row card-courses-dec">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus referrentur, usu debet tamquam et. Sea ut nullam aperiam, mei cu tollit salutatus delicatissimi. </p>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="#" class="btn radius-xl">Inscrever-se</a>
                                        <a href="#" class="btn red outline radius-xl ">Mais Detalhes</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-courses-list bookmarks-bx">
                            <div class="card-courses-media">
                                <img src="/Admin/images/courses/pic7.jpg" alt=""/>
                            </div>
                            <div class="card-courses-full-dec">
                                <div class="card-courses-title">
                                    <h4 class="m-b5">CCNA 1</h4>
                                </div>
                                <div class="card-courses-list-bx">
                                    <ul class="card-courses-view">
                                        <li class="card-courses-Categoria">
                                            <h5>Categoria</h5>
                                            <h4>TI</h4>
                                        </li>
                                        <li class="card-courses-review">
                                            <h5>3 Avalhações</h5>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </li>
                                        <li class="card-courses-price">
                                            <del>$190</del>
                                            <h5 class="text-primary m-b0">$120</h5>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row card-courses-dec">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus referrentur, usu debet tamquam et. Sea ut nullam aperiam, mei cu tollit salutatus delicatissimi. </p>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="#" class="btn radius-xl">Inscrever-se</a>
                                        <a href="#" class="btn red outline radius-xl ">Mais Detalhes</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-courses-list bookmarks-bx">
                            <div class="card-courses-media">
                                <img src="/Admin/images/courses/pic8.jpg" alt=""/>
                            </div>
                            <div class="card-courses-full-dec">
                                <div class="card-courses-title">
                                    <h4 class="m-b5">Cibersegurança Intermediario</h4>
                                </div>
                                <div class="card-courses-list-bx">
                                    <ul class="card-courses-view">
                                        <li class="card-courses-Categoria">
                                            <h5>Categoria</h5>
                                            <h4>TI</h4>
                                        </li>
                                        <li class="card-courses-review">
                                            <h5>3 Avalhações</h5>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                                <div class="row card-courses-dec">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus referrentur, usu debet tamquam et. Sea ut nullam aperiam, mei cu tollit salutatus delicatissimi. </p>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="#" class="btn radius-xl">Inscrever-se</a>
                                        <a href="#" class="btn red outline radius-xl ">Mais Detalhes</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-courses-list bookmarks-bx">
                            <div class="card-courses-media">
                                <img src="/Admin/images/courses/pic9.jpg" alt=""/>
                            </div>
                            <div class="card-courses-full-dec">
                                <div class="card-courses-title">
                                    <h4 class="m-b5">Cibersegurança Avançado</h4>
                                </div>
                                <div class="card-courses-list-bx">
                                    <ul class="card-courses-view">
                                        <li class="card-courses-Categoria">
                                            <h5>Categoria</h5>
                                            <h4>TI</h4>
                                        </li>
                                        <li class="card-courses-review">
                                            <h5>3 Avalhações</h5>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                                <div class="row card-courses-dec">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus referrentur, usu debet tamquam et. Sea ut nullam aperiam, mei cu tollit salutatus delicatissimi. </p>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="#" class="btn radius-xl">Inscrever-se</a>
                                        <a href="#" class="btn red outline radius-xl ">Mais Detalhes</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </main>
@endsection
