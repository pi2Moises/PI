@extends('layouts.app')
@section('content')
<div class="form-group col-md-4">
  <label for="inputZip">Cadastrar nova Bibliografia</label>
  <br>
  <a href="{{url('/cad_bibliografia')}}"><button type="button" class="btn btn-primary">Nova bibliografia</button></a>
</div>
<font size="2">
<div class="col-md-12">
  <table class="table table-hover table-bordered table-striped">
    <H3 align="center">LISTA DE BIBLIOGRAFIAS</H3>
    <thead>
      <tr>
        <th>CURSO</th>
        <th>DISCIPLINA</th>
        <th>TÍTULO</th>
        <th>AUTOR</th>
        <th>ANO</th>
        <th>EDITORA</th>
        <th>AÇÃO</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bibliografias as $bibliografia)
      <tr>
        <td>{{$bibliografia->curso}}</td>
        <td>{{$bibliografia->disciplina}}</td>
        <td>{{$bibliografia->titulo}}</td>
        <td>{{$bibliografia->autor}}</td>
        <td>{{$bibliografia->ano}}</td>
        <td>{{$bibliografia->editora}}</td>
        <td align="center">
          <form method="post" action="{{ url('/delete_bibliografia', $bibliografia->id) }}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Deletar" class="btn btn-danger btn-sm">
            <a href="{{ url('/edit_bibliografia',$bibliografia->id) }}" class="btn btn-success btn-sm">Editar</a>
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
  {{ $bibliografias->links() }}
</div>
@endsection