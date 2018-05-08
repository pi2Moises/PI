@extends('layouts.app')

@section('content')
<div class="form-group col-md-4">
  <label for="inputZip">Cadastrar nava disciplina</label>
  <br>
  <a href="{{url('/create_disciplina')}}"><button type="button" class="btn btn-primary">Nova Disciplina</button></a>
</div>

    <font size="2">
    <div class="col-md-12">
      <table class="table table-hover table-bordered table-striped">
        <H3 align="center">LISTA DE DISCIPLINAS</H3>
        <thead>
          <tr>
            {{-- <th>ID</th> --}}
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
            {{-- <td align="center"> {{$disciplina->id}}</td> --}}
            <td>{{$disciplina->disciplina}}</td>
            <td align="center">{{$disciplina->descricao}}</td>
            <td align="center">{{$disciplina->semestre}}</td>
            <td align="center">{{$disciplina->carga_horaria}}</td>
            <td align="center">{{$disciplina->codigo}}</td>
            
            <td align="center">
              <form method="post" action="{{ url('/delete_disciplina', $disciplina->id) }}">

                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" value="Deletar" class="btn btn-danger btn-sm">
                <a href="{{ url('/edit_disciplina',$disciplina->id) }}" class="btn btn-success btn-sm">Editar</a>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </font>
    <div align="center">
      <br>
      <br>
      <br>
      {{ $disciplinas->links() }}
    </div>

@endsection
