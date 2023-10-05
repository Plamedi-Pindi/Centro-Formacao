@extends('layouts.merges.auth')
@section('title', 'SGPA | Registrar')

@section('content')


    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <div class="account-form">
            <div class="account-head" style="background-image:url(site/images/background/bg2.jpg);">
                {{-- <a href="index.html"><img src="site/images/logo-white-2.png" alt=""></a> --}}
            </div>
            <div class="account-form-inner">
                <div class="account-container">
                    <div class="heading-bx left">
                        <h2 class="title-head">Registra-te <span>Agora</span></h2>
                        <p>Faça login na sua conta
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Clique aqui') }}
                            </a>
                        </p>
                    </div>
                    <x-guest-layout>
                        <x-auth-card>

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('register') }}" class="contact-bx">
                                @csrf
                                <div class="row placeani">
                                    <div class="col-lg-12">
                                        <div class="row reg-container">
                                            {{-- PART 1 --}}
                                            <div class="">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <x-label for="name" :value="__('Nome')" />
                                                            <x-input name="name" type="text" :value="old('name')"
                                                                required class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <x-label for="email" :value="__('Email')" />
                                                            <x-input name="email" type="email" :value="old('email')"
                                                                required class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <x-label for="password" :value="__('Senha')" />
                                                            <x-input name="password" type="password" class="form-control"
                                                                required autocomplete="new-password"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- CONFIRM PASSWORD --}}
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
                                                            <x-input name="password_confirmation" type="password"
                                                                class="form-control" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- PART 2 --}}
                                            <div class="">
                                                {{-- PHONE --}}
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <x-label for="phone" :value="__('Telefone')" />
                                                            <x-input name="phone" type="tel" class="form-control"
                                                                required  />
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- GENDER --}}
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <select name="gender" id="gender" class="gender" required>
                                                                <option>Género</option>
                                                                <option value="Masculino">Masculino</option>
                                                                <option value="Femenino">Femenino</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- INTEREST --}}
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <select name="interesse" id="interesse" class="interesse" required>
                                                                <option>Interesse</option>
                                                                @foreach ($areas as $area)
                                                                    <option value="{{ $area->id }}">{{ $area->nome }}
                                                                    </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12 m-b30">
                                        <button name="submit" type="submit" value="Submit"
                                            class="btn button-md">Registrar</button>
                                    </div>
                                    <div class="col-lg-12">
                                        <h6>Faça login com redes sociais</h6>
                                        <div class="d-flex">
                                            <a class="btn flex-fill m-r5 facebook" href="#"><i
                                                    class="fa fa-facebook"></i>Facebook</a>
                                            <a class="btn flex-fill m-l5 google-plus" href="#"><i
                                                    class="fa fa-google-plus"></i>Google Plus</a>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </x-auth-card>
                    </x-guest-layout>
                </div>
            </div>
        </div>
    </div>

@endsection
