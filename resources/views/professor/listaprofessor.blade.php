@extends('layouts.app')
@section('content')
<div class="form-group col-md-4">
  <label for="inputZip">Cadastrar novo professor</label>
  <br>
  <a href="{{url('/cad_professor')}}"><button type="button" class="btn btn-primary">Novo Professor</button></a>
</div>
<font size="2">
<div class="col-md-12">
  <table class="table table-hover table-bordered table-striped">
    <H3 align="center">LISTA DE CURSOS</H3>
    <thead>
      <tr>
        <th>NOME_CURSO</th>
        <th>TIPO CURSO</th>
        <th>MODALIDADE</th>
        <th>TURNO</th>
        <th>NUM_VAGAS</th>
        <th>CARGA_HORARIA</th>
        <th>COORDENADOR</th>
        <th>AÇÃO</th>
      </tr>
    </thead>
    <tbody>
     {{--  @foreach($cursos as $curso)
      <tr>
        <td>{{$curso->nome_curso}}</td>
        <td>{{$curso->t_curso}}</td>
        <td align="center">{{$curso->modalidade}}</td>
        <td align="center">{{$curso->turno_func}}</td>
        <td align="center">{{$curso->num_vagas}}</td>
        <td align="center">{{$curso->carga_h_curso}}</td>
        <td align="center">{{$curso->coord_curso}}</td>      
        <td align="center">
          <form method="post" action="{{ url('/delete_curso', $curso->id) }}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Deletar" class="btn btn-danger btn-sm">
            <a href="{{ url('/edit_curso',$curso->id) }}" class="btn btn-success btn-sm">Editar</a>
          </form>
        </td>
      </tr>
      @endforeach --}}
    </tbody>
  </table>
</div>
</font>
<div align="center">
  {{-- {{ $cursos->links() }} --}}
</div>
@endsection