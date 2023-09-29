@extends('layouts.merges.auth')
@section('title', 'SGPA | Login')
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <div class="account-form">
            <div class="account-head" style="background-image:url(/Site/images/background/bg2.jpg);">
                {{-- <a href="index.html"><img src="/Site/images/logo-white-2.png" alt=""></a> --}}
            </div>
            <div class="account-form-inner">
                <div class="account-container">
                    <div class="heading-bx left">
                        <h2 class="title-head">Faça login na <span> Sua conta</span></h2>
                        <p>Não tem uma conta? <a href="{{ route('register') }}">Crie uma aqui</a></p>
                    </div>

                    <x-guest-layout>
                        <x-auth-card>

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form class="contact-bx" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row placeani">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <x-label for="email" :value="__('Email')" />
                                                <x-input name="email" type="email"
                                                    class="form-control block mt-1 w-full" :value="old('email')" required
                                                    autofocus />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <x-label for="password" :value="__('Senha')" />
                                                <x-input name="password" type="password"
                                                    class="form-control block mt-1 w-full" required
                                                    autocomplete="current-password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group form-forget">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="remember_me"
                                                    name="remember">
                                                <label for="remember_me" class="custom-control-label"
                                                    for="customControlAutosizing"> Lembrar</label>
                                            </div>

                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-auto"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Esqueceu a Senha?') }}
                                                </a>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-lg-12 m-b30">
                                        <button name="submit" type="submit" value="Submit"
                                            class="btn button-md">Login</button>
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
    <!-- External JavaScripts -->
    <script src="/Site/js/jquery.min.js"></script>
    <script src="/Site/vendors/bootstrap/js/popper.min.js"></script>
    <script src="/Site/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Site/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/Site/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="/Site/vendors/magnific-popup/magnific-popup.js"></script>
    <script src="/Site/vendors/counter/waypoints-min.js"></script>
    <script src="/Site/vendors/counter/counterup.min.js"></script>
    <script src="/Site/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="/Site/vendors/masonry/masonry.js"></script>
    <script src="/Site/vendors/masonry/filter.js"></script>
    <script src="/Site/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="/Site/js/functions.js"></script>
    <script src="/Site/js/contact.js"></script>
    <script src='/Site/vendors/switcher/switcher.js'></script>
</body>

</html>
