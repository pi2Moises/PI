<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Projeto Integrador 3</title>
        <!-- Scripts -->
        <script src="{{ url('assets/js/app.js') }}" defer></script>
        <script type="text/javascript" src="{{ url('assets/js/jquary.js') }}" defer></script>
        <script type="text/javascript" src="{{ url('assets/js/jquery-3.2.1.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ url('assets/js/jquery.mask.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ url('assets/js/jquery.maskedinput.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        
        {{-- <style type="text/css">
            .fundo{
                background-color: #808080;
            }
        </style> --}}
        <script type="text/javascript">
            $(document).ready(function(){
                $('#dt_inicio_vinc_curso').mask('99/99/9999',{placeholder:"00/00/0000"});
            });
        </script>
    </head>
    <body id="corpo" class="fundo">
        @guest
        <div id="app">
            @else
            <nav class="navbar navbar-default" style="background-color: #e3f2fd;">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>

                        <!-- <a class="navbar-brand" href="{{ url('/') }}">PPC-3</a> -->
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('/img/par - iesb.png') }}" width="50" height="60"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            
                            <!-- HABILITA PÁGINA DE LOGIN DE USUÁRIOS AO SISTEMA NA PÁGINA INICIAL-->
                            <!-- <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li> -->
                            <!-- --------------------------------------------------------------------------------------- -->
                            <!-- HABILITA PÁGINA DE CADASTRO DE USUÁRIOS AO SISTEMA NA PÁGINA INICIAL-->
                            <!-- <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>    -->
                            <!-- --------------------------------------------------------------------------------------- -->
                            <li>
                              <a class="nav-link" href="{{ url('/home') }}">{{ __('Início') }}</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    {{-- <li>
                                        <a class="dropdown-item" href="{{ url('create_disciplina') }}">Cadastrar Disciplina</a>
                                    </li> --}}
                                    <li>
                                        <a class="dropdown-item" href="{{ url('listadisciplina') }}">Manter Disciplina</a>
                                    </li>
                                    
                                    {{-- <li role="separator" class="divider"></li> --}}
                                    {{-- <li>
                                        <a class="dropdown-item" href="{{ url('cad_curso') }}">Cadastro Curso</a>
                                    </li> --}}
                                    <li>
                                        <a class="dropdown-item" href="{{ url('listacurso') }}">Manter Curso</a>
                                    </li>
                                    {{-- <li role="separator" class="divider"></li> --}}
                                    <li>
                                        <a class="dropdown-item" href="{{ url('milhar/cadmilhar') }}">Manter PPC</a>
                                    </li>
                                    {{-- <li role="separator" class="divider"></li> --}}
                                    <li>
                                        <a class="dropdown-item" href="{{ url('listaprofessor') }}">Manter Professor</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sistema <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Sobre</a></li>
                                    <li><a href="#">Usuários Cadastrados</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}  <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                                    @endguest
                                </ul>
                            </li>
                        </ul>
                        </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
                {{-- <style type="text/css">
                    footer{
                        position: fixed;
                        bottom: 0;
                        left: 0;
                    }
                </style> --}}
                <footer class="footer navbar-fixed-bottom" style="background-color: #e3f2fd;">
                   {{-- <div class="p-3 mb-2 bg-primary text-white"> --}}
                       <div align="center"> 
                            <h4>PPC-3 | Projeto Pedagógico de Curso</h4>
                            
                            {{-- <p><b>AUTOR:</b> Moisés Alexandre de Souza</p> --}}
                            {{-- <p><b>CURSO:</b> Análise e Desenvolvimento de Sistemas</p> --}}
                            {{-- Análise e Desenvolvimento de Sistemas --}}
                        {{--    <p>Moisés Alexandre de Souza </p> --}}
                        </div>
                   {{-- </div> --}}
                </footer>
            </body>
        </html>