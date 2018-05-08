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
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body>
    <h2>Cadastro de Disciplina</h2>
    <br>
    <br>
    @if(session('success'))
      <p class="alert-success">
        {{session('success')}}
      </p>
    @endif
    <form method="put" action="{{ url('/edit_disciplina', $disciplina->id) }}"> 
      {{csrf_field()}}

      <div class="col-md-12">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputCity">Nome da Disciplina</label>
            <input type="text" class="form-control" name="disciplina" required value="{{ $disciplina->disciplina}}">
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="inputCity">Descrição da Disciplina</label>
              <input type="text" class="form-control" name="descricao" placeholder="Teórico ou Prático" required value="{{ $disciplina->descricao}}">
            </div>
            <div class="form-group col-md-4">
              <label for="inputZip">Código da Disciplina</label>
              <input type="text" class="form-control" name="codigo" required value="{{ $disciplina->codigo}}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputZip">Semestre</label>
              <input type="text" class="form-control" name="semestre" required value="{{ $disciplina->semestre}}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputZip">Carga Horária</label>
              <input type="text" class="form-control" name="carga_horaria" Placeholder="Valores: 30, 60, 90, 120" required value="{{ $disciplina->carga_horaria}}">
            </div>
          </div>
        </div>
        
      </div>
      <div align="center">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{url('/home')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
      </div>
    </form>
  </body>
</html>