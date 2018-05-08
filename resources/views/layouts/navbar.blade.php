<nav class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/') }}">Projeto Integrador 3</a>
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
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="{{ url('create_disciplina') }}">Cadastrar Disciplina</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('listadisciplina') }}">Manter Disciplina</a>
                </li>
                
                <li role="separator" class="divider"></li>
                <li>
                    <a class="dropdown-item" href="{{ url('cad_curso') }}">Cadastro Curso</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('milhar/cadmilhar') }}">Manter Curso</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                    <a class="dropdown-item" href="{{ url('milhar/cadmilhar') }}">Manter PPC</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                    <a class="dropdown-item" href="{{ url('milhar/cadmilhar') }}">Manter Professor</a>
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