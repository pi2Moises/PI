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
    <link href="{{ ('css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body>
    <H2>Lista de Disciplinas</H2>
    <br>
    <br>
    <font size="2">
    <div class="col-md-12">
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>DISCIPLINA</th>
            <th>DESCRIÇÃO</th>
            <th>SEMESTRE</th>
            <th>CARGA HORÁRIA</th>
            <th>CÓD. DISCIPLINA</th>
            <th>AÇÃO</th>
          </tr>
        </thead>
        <tbody>
          @foreach($disciplinas as $disciplina)
          <tr>
            <!-- <th scope="row"></th> -->
            <td align="center"> {{$disciplina->id}}</td>
            <td>{{$disciplina->disciplina}}</td>
            <td align="center">{{$disciplina->descricao}}</td>
            <td align="center">{{$disciplina->semestre}}</td>
            <td align="center">{{$disciplina->carga_horaria}}</td>
            <td align="center">{{$disciplina->codigo}}</td>
            
            <td align="center">
              <input type="button" value="Deletar" class="btn btn-danger btn-sm">
              <a href="{{ url('/edit_disciplina',$disciplina->id) }}" class="btn btn-success btn-sm">editar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </font>
    <div align="center">
      {{ $disciplinas->links() }}
    </div>
  </body>
</html>