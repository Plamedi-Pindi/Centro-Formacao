@extends('layouts.merges.AdminMerge')
@section('title', 'SGPA | Formadores')

@section('content')
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Formadors</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i>Home</a></li>
                    <li>Formadors</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="email-wrapper">

                            <div class="mail-list-container">
                                <div class="mail-toolbar">

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
                                <table>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Género</th>
                                            <th>Email</th>
                                            <th>Telefone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="mail-box-list">

                                            @foreach ($formadores as $formador)
                                                <tr>
                                                    <div class="mail-list-info">

                                                        <td>{{ $formador->id }}</td>

                                                        <td class="nome">
                                                            {{ $formador->name }}
                                                        </td>

                                                        <td>
                                                            {{ $formador->genero }}
                                                        </td>

                                                        <td>
                                                            {{ $formador->email }}
                                                        </td>

                                                        <td>
                                                            {{ $formador->telefone }}

                                                            <ul class="mailbox-toolbar">
                                                                <li data-toggle="tooltip" title="Delete">
                                                                    <a href="{{ route('admin.eliminarformador', $formador->id) }}">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </li>
                                                                <li data-toggle="tooltip" title="Archive">
                                                                    <a href="{{ route('admin.atualizarformador',  $formador->id) }}">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </div>
                                                </tr>
                                            @endforeach
                                        </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Your Profile Views Chart END-->
            </div>
        </div>
    </main>
@endsection
