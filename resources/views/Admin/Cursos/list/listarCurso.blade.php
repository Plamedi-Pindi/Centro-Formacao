@extends('layouts.merges.AdminMerge')
@section('title', 'SGPA | Cursos')

@section('content')
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Cursos</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i>Home</a></li>
                    <li>Cursos</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="email-wrapper">

                            <div class="mail-list-container">
                                <div class="mail-toolbar">
                                    <div class="check-all">
                                        <div class="custom-control custom-checkbox checkbox-st1">
                                            <input type="checkbox" class="custom-control-input" id="check1">
                                            <label class="custom-control-label" for="check1"></label>
                                        </div>
                                    </div>
                                    <div class="mail-search-bar">
                                        <input type="text" class="form-control" placeholder="Search" />
                                    </div>
                                    <div class="dropdown all-msg-toolbar">
                                        <span class="btn btn-info-icon" data-toggle="dropdown"><i
                                                class="fa fa-ellipsis-v"></i></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                            <li><a href="#"><i class="fa fa-arrow-down"></i> Archive</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> Snooze</a></li>
                                            <li><a href="#"><i class="fa fa-envelope-open"></i> Mark as unread</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="next-prev-btn">
                                        <a href="#"><i class="fa fa-angle-left"></i></a>
                                        <a href="#"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="mail-box-list">
                                    @foreach ($cursos as $curso)
                                        <div class="mail-list-info">
                                            <div class="checkbox-list">

                                            </div>
                                            {{-- IMAGE CALL --}}
                                            <div class="articles-img">
                                                <img src="/Site/images/curso/{{ $curso->imagem }}">
                                            </div>


                                            <div class="mail-list-title">
                                                <h6>{{ $curso->nome }}</h6>
                                            </div>

                                            <div class="mail-list-title">
                                                <h6></h6>
                                            </div>

                                            <div class="mail-list-title-info">
                                                <p>{{ $curso->categoria->nome }}</p>
                                            </div>

                                            <div class="mail-list-time">
                                                <span>{{ $curso->user->name }}</span>
                                            </div>

                                            <ul class="mailbox-toolbar">
                                                {{-- DELETE AN ARTICLE --}}
                                                <li data-toggle="tooltip" title="Delete">
                                                    <a href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </li>
                                                {{-- SHOW AN ARTICLES DETAILS --}}
                                                <li data-toggle="tooltip" title="ver">
                                                    <i class="fa fa-eye">

                                                    </i>
                                                </li>
                                                {{-- DOWNLOAD AN ARTICLE --}}
                                                <li data-toggle="tooltip" title="download">

                                                        <a href=""><i class="fa fa-arrow-down"></i></a>

                                                </li>
                                                {{-- UPADATE AM ARTICLE --}}
                                                <li data-toggle="tooltip" title="editar">
                                                    <a href="">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                </li>


                                            </ul>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Your Profile Views Chart END-->
            </div>
        </div>
    </main>
@endsection
