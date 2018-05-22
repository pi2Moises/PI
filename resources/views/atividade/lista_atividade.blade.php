@extends('layouts.app')
@section('content')
<div class="form-group col-md-4">
  <label for="inputZip">Cadastrar nova atividade</label>
  <br>
  <a href="{{url('/cad_atividade')}}"><button type="button" class="btn btn-primary">Nova Atividade</button></a>
</div>
<font size="2">
<div class="col-md-12">
  <table class="table table-hover table-bordered table-striped">
    <H3 align="center">CRONOGRAMA DE ATIVIDADES</H3>
    <thead>
      <tr>
        <th>AULA</th>
        <th>CONTEÚDO</th>
        <th>AÇÃO</th>
      </tr>
    </thead>
    <tbody>
      @foreach($atividades as $atividade)
      <tr>
        <td>{{$atividade->aula}}</td>
        <td>{{$atividade->conteudo}}</td>
        <td align="center">
          <form method="post" action="{{ url('/delete_atividade', $atividade->id) }}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Deletar" class="btn btn-danger btn-sm">
            <a href="{{ url('/edit_atividade',$atividade->id) }}" class="btn btn-success btn-sm">Editar</a>
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
  {{ $atividades->links() }}:
</div>
@endsection