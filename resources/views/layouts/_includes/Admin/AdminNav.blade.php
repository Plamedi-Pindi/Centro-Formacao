 <!-- Left sidebar menu start -->
 <div class="ttr-sidebar">
     <div class="ttr-sidebar-wrapper content-scroll">
         <!-- side menu logo start -->
         <div class="ttr-sidebar-logo">
             <a href="#"><img alt="" src="/Admin/images/logo.png" width="122" height="27"></a>
             <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
     <i class="material-icons ttr-fixed-icon">gps_fixed</i>
     <i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
    </div> -->
             <div class="ttr-sidebar-toggle-button">
                 <i class="ti-arrow-left"></i>
             </div>
         </div>
         <!-- side menu logo end -->
         <!-- sidebar menu start -->
         <nav class="ttr-sidebar-navi">
             <ul>
                 <li>
                     <a href="{{ route('admin.index') }}" class="ttr-material-button">
                         <span class="ttr-icon"><i class="ti-home"></i></span>
                         <span class="ttr-label">Dashborad</span>
                     </a>
                 </li>

                 {{-- ADMIN SESSION --}}
                 @if (auth()->user()->userType == '1')

                    {{-- ARTIGOS --}}
                     <li>
                         <a href="#" class="ttr-material-button">
                             <span class="ttr-icon"><i class="ti-email"></i></span>
                             <span class="ttr-label">Artigo</span>
                             <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                         </a>
                         <ul>
                             <li>
                                 <a href="{{ route('admin.articles') }}" class="ttr-material-button"><span class="ttr-label">Listar Artigos</span></a>
                             </li>
                             <li>
                                 <a href="{{ route('admin.newArticles') }}" class="ttr-material-button"><span class="ttr-label">Criar Novo Artigo</span></a>
                             </li>

                         </ul>
                     </li>
                    {{-- CURSOS --}}
                     <li>
                         <a href="#" class="ttr-material-button">
                             <span class="ttr-icon"><i class="ti-email"></i></span>
                             <span class="ttr-label">Cursos</span>
                             <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                         </a>
                         <ul>
                             <li>
                                 <a href="{{ route('admin.articles') }}" class="ttr-material-button"><span class="ttr-label">Listar Cursos</span></a>
                             </li>
                             <li>
                                 <a href="{{ route('admin.newArticles') }}" class="ttr-material-button"><span class="ttr-label">Cadastrar Novo Curso</span></a>
                             </li>

                         </ul>
                     </li>

                     {{-- FORMADORES --}}
                     <li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-email"></i></span>
		                	<span class="ttr-label">Formador</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="{{ route('admin.formadores') }}" class="ttr-material-button"><span class="ttr-label">Listar Formadores</span></a>
		                	</li>
		                	<li>
		                		<a href="{{ route('admin.novoformador') }}" class="ttr-material-button"><span class="ttr-label">Cadastrar Formador</span></a>
		                	</li>
		                </ul>
		            </li>

                    {{-- ALUNOS --}}
                    <li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-email"></i></span>
		                	<span class="ttr-label">Alunos</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="{{ route('admin.alunos') }}" class="ttr-material-button"><span class="ttr-label">Listar Alunos</span></a>
		                	</li>
		                	<li>
		                		<a href="{{ route('admin.novoaluno') }}" class="ttr-material-button"><span class="ttr-label">Cadastrar Alunos</span></a>
		                	</li>
		                </ul>
		            </li>

                    {{-- FORUM --}}


                 @endif

                 {{-- FORMADOR SESSION --}}
                 @if (auth()->user()->userType == '2')
                 @endif

                 {{-- ALUNO SESSION --}}
                 @if (auth()->user()->userType == '0')
                     <li>
                         <a href="{{ route('admin.cursos') }}" class="ttr-material-button">
                             <span class="ttr-icon"><i class="ti-book"></i></span>
                             <span class="ttr-label">Cursos Selecionados</span>
                         </a>
                     </li>

                     <li>
                         <a href="bookmark.html" class="ttr-material-button">
                             <span class="ttr-icon"><i class="ti-bookmark-alt"></i></span>
                             <span class="ttr-label">Cursos Feitos</span>
                         </a>
                     </li>
                 @endif

                 <li>
                     <a href="bookmark.html" class="ttr-material-button">
                         <span class="ttr-icon"><i class="ti-bookmark-alt"></i></span>
                         <span class="ttr-label">Meu Perfil</span>
                     </a>
                 </li>

                 <li class="ttr-seperate"></li>
             </ul>
             <!-- sidebar menu end -->
         </nav>
         <!-- sidebar menu end -->
     </div>
 </div>
 <!-- Left sidebar menu end -->
