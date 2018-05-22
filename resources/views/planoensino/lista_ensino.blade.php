@extends('layouts.app')
@section('content')
<div class="form-group col-md-4">
  <label for="inputZip">Cadastrar novo plano de ensino</label>
  <br>
  <a href="{{url('/cad_ensino')}}"><button type="button" class="btn btn-primary">Novo Plano de Ensino</button></a>
</div>
<font size="2">
<div class="col-md-12">
  <table class="table table-hover table-bordered table-striped">
    <H3 align="center">LISTA PLANO DE ENSINO</H3>
    <thead>
      <tr>
        <th>CURSO</th>
        <th>ANO</th>
        <th>SEM</th>
        <th>NOME DISCIPLINA</th>
        <th>NOME PROFESSOR</th>
        <th>AÇÃO</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ensinos as $ensino)
      <tr>
        <td>{{$ensino->curso}}</td>
        <td>{{$ensino->ano}}</td>
        <td>{{$ensino->semestre}}</td>
        <td>{{$ensino->nome_disciplina}}</td>
        <td>{{$ensino->nome_professor}}</td>
        <td>
          <form method="post" action="{{ url('/delete_ensino', $ensino->id) }}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Deletar" class="btn btn-danger btn-sm">
            <a href="{{ url('/edit_ensino',$ensino->id) }}" class="btn btn-success btn-sm">Editar</a>
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
  {{ $ensinos->links() }}
</div>
@endsection