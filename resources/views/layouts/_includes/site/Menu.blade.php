
<div id="loading-icon-bx"></div>
<!-- Header Top ==== -->
<header class="header rs-nav">
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="topbar-left">
                    <ul>
                        <li><a href="faq-1.html"><i class="fa fa-question-circle"></i>Perguntas</a></li>
                        <li><a href="javascript:;"><i class="fa fa-envelope-o"></i>sgpa@website.com</a></li>
                    </ul>
                </div>
                <div class="topbar-right">
                    <ul>
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registrar</a></li>
                        @endguest

                        @auth
                            <li><a href="{{ route('admin.index') }}">Meu perfil</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <input type="submit" value="Logout" id="" class="logout-input" style="border: none; background: transparent; cursor: pointer;">
                                </form>
                            </li>
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
                    {{-- <a href="index.html"><img src="/Site/images/logo.png" alt=""></a> --}}
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
                            <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
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
							{{-- <a href="index.html"><img src="/Site/images/logo.png" alt=""></a> --}}
						</div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ route('site.home') }}">Home </a></li>

							<li><a href="{{ route('site.about') }}">Sobre</a></li>
							<li><a href="#">Foruns</a></li>
							<li><a href="{{ route('site.article') }}">Artigos</a></li>
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
										<img src="/Site/images/adv/adv.jpg" alt=""/>
									</li>
								</ul>
							</li>
                            <li><a href="{{ route('site.contact') }}">Contatos</a></li>
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
<!-- header END ==== -->
