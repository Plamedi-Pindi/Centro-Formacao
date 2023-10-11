@extends('layouts.merges.AdminMerge')
@section('title', 'SGPA | Novo Aluno')

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Cadastrar Aluno</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i>Home</a></li>
                <li>Cadastrar Aluno</li>
            </ul>
        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4>Cadastrar Aluno</h4>
                    </div>
                    <div class="widget-inner">
                        <form action="{{ route('admin.novoaluno.post') }}" method="POST" class="edit-profile m-b30">
                            @csrf

                            <div class="row">
                                <div class="col-12">
                                    <div class="ml-auto">
                                        <h3>1. Dados Pessoais</h3>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Nome</label>
                                    <div>
                                        <input class="form-control" type="text" name="name" placeholder="Teu nome" required>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Género</label>
                                    <div>
                                        <select name="gender" id="gender" required>
                                            <option active>Escolha uma opção</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Email</label>
                                    <div>
                                        <input class="form-control" type="text" name="email" placeholder=".....@gmail.com" required>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Telefone</label>
                                    <div>
                                        <input class="form-control" type="text" name="phone" placeholder="+244 9...." required>
                                    </div>
                                </div>

                                <div class="seperator"></div>

                                <div class="col-12 m-t20">
                                    <div class="ml-auto m-b5">
                                        <h3>2. Dados Académico</h3>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Interesse</label>
                                    <div>
                                        <select name="interesse" id="interesse" required>
                                            <option >Escolha uma opção</option>
                                            @foreach ($interesses as $item)
                                                <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div>
                                        <input class="form-control" type="hidden" value="0" name="userType">
                                    </div>
                                </div>


                                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

                            </div>
                            <div class="row">
                                <div class="col-12 m-t20">
                                    <div class="ml-auto">
                                        <h3 class="m-form__section">3. Segurança</h3>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <table id="item-add" style="width:100%;">
                                        <tr class="list-item">
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label class="col-form-label">Senha</label>
                                                        <div>
                                                            <input class="form-control" type="password" required name="password" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label class="col-form-label">Confirmar Senha</label>
                                                        <div>
                                                            <input class="form-control" type="password" required name="confPassword">
                                                        </div>
                                                    </div>


                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i> Cadastrar</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>
@endsection
