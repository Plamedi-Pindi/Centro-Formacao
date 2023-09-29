@extends('layouts.merges.site')
@section('title', 'SGPA | Contatos')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(Site/images/background/bg1.webp);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Contatos</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('site.home') }}">Home</a></li>
                    <li>Contatos</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <!-- inner page banner -->
        <div class="page-banner contact-page section-sp2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 m-b30">
                        <div class="bg-primary text-white contact-info-bx">
                            <h2 class="m-b10 title-head">Informações <span>de Contatos</span></h2>

                            <div class="widget widget_getintuch">
                                <ul>
                                    <li><i class="ti-location-pin"></i>Kinaxixe, Luanda, Angola</li>
                                    <li><i class="ti-mobile"></i>+224 222 222 222</li>
                                    <li><i class="ti-email"></i>sgpa@website.com</li>
                                </ul>
                            </div>
                            <h5 class="m-t0 m-b20">Siga-nos</h5>
                            <ul class="list-inline contact-social-bx">
                                <li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="btn outline radius-xl"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form class="contact-bx ajax-form"
                            action="http://educhamp.themetrades.com/demo/Site/script/contact.php">
                            <div class="ajax-message"></div>
                            <div class="heading-bx left">
                                <h2 class="title-head">Entra em <span>Contato</span></h2>

                            </div>
                            <div class="row placeani">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Nome</label>
                                            <input name="name" type="text" required
                                                class="form-control valid-character">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Telefone</label>
                                            <input name="phone" type="text" required class="form-control int-value">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Assunto</label>
                                            <input name="subject" type="text" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Escreva a mensagem</label>
                                            <textarea name="message" rows="4" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="g-recaptcha" data-sitekey="6Lf2gYwUAAAAAJLxwnZTvpJqbYFWqVyzE-8BWhVe"
                                                data-callback="verifyRecaptchaCallback"
                                                data-expired-callback="expiredRecaptchaCallback"></div>
                                            <input class="form-control d-none" style="display:none;" data-recaptcha="true"
                                                required data-error="Please complete the Captcha">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button name="submit" type="submit" value="Submit" class="btn button-md"> Enviar Mensagem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
    </div>
    <!-- Content END-->
@endsection
