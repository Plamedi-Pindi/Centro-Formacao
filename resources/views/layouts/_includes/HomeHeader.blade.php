<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />

	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="Site/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="Site/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>SGPA : Home </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="Site/js/html5shiv.min.js"></script>
	<script src="Site/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="Site/css/assets.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="Site/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="Site/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="Site/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="Site/css/color/color-1.css">

	<!-- REVOLUTION SLIDER CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="Site/vendors/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="Site/vendors/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="Site/vendors/revolution/css/navigation.css">
	<!-- REVOLUTION SLIDER END -->
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
    <header class="header rs-nav header-transparent">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul>
							<li><a href="faq-1.html"><i class="fa fa-question-circle"></i>Perguntas</a></li>
							<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>profgil@website.com</a></li>
						</ul>
					</div>
					<div class="topbar-right">
						<ul>
                            @guest
							    <li><a href="{{ route('login') }}">Login</a></li>
							    <li><a href="{{ route('register') }}">Registrar</a></li>
                            @endguest

                            @auth
                                <li><a href="{{ route('admin.index') }}">Minha Conta</a></li>
							    <li><a href="{{ route('register') }}">Logout</a></li>
                            @endauth
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo">
						{{-- <a href="index.html"><img src="Site/images/logo-white.png" alt=""></a> --}}
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-whatsapp"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<!-- Search Button ==== -->
								<li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
							</ul>
						</div>
                    </div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						<div class="menu-logo">
							<a href="index.html"><img src="Site/images/logo.png" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ route('site.home') }}">Home </a></li>

							<li><a href="javascript:;">Sobre</a></li>
							<li><a href="javascript:;">Forun</a></li>
							<li class="add-mega-menu"><a href="javascript:;">Treinamentos <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu add-menu">
									<li class="add-menu-left">
										<h5 class="menu-adv-title">Our Courses</h5>
										<ul>
											<li><a href="courses.html">Courses </a></li>
											<li><a href="courses-details.html">Courses Details</a></li>
											<li><a href="profile.html">Instructor Profile</a></li>
											<li><a href="event.html">Upcoming Event</a></li>
											<li><a href="membership.html">Membership</a></li>
										</ul>
									</li>
									<li class="add-menu-right">
										<img src="Site/images/adv/adv.jpg" alt=""/>
									</li>
								</ul>
							</li>
                            <li><a href="javascript:;">Contato</a></li>
						</ul>
						{{-- <div class="nav-social-link">
							<a href="javascript:;"><i class="fa fa-facebook"></i></a>
							<a href="javascript:;"><i class="fa fa-whatsapp"></i></a>
							<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
						</div> --}}
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Top END ==== -->
