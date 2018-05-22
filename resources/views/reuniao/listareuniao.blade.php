@extends('layouts.app')
@section('content')
<div class="form-group col-md-4">
  <label for="inputZip">Cadastrar nova reunião</label>
  <br>
  <a href="{{url('/cad_reuniao')}}"><button type="button" class="btn btn-primary">Nova Reunião</button></a>
</div>
<font size="2">
<div class="col-md-12">
  <table class="table table-hover table-bordered table-striped">
    <H3 align="center">LISTA DE REUNIÕES</H3>
    <thead>
      <tr>
        <th>DATA REUNIÃO</th>
        <th>LOCAL REUNIÃO</th>
        <th>PARTICIPANTES</th>
        <th>AÇÃO</th>
      </tr>
    </thead>
    <tbody>
      @foreach($reunioes as $reuniao)
      <tr>
        <td>{{$reuniao->dt_reuniao}}</td>
        <td>{{$reuniao->local_reuniao}}</td>
        <td>{{$reuniao->participantes}}</td>
        <td align="center">
          <form method="post" action="{{ url('/delete_reuniao', $reuniao->id) }}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Deletar" class="btn btn-danger btn-sm">
            <a href="{{ url('/detalhes',$reuniao->id) }}" class="btn btn-primary btn-sm">Visualizar</a>
            <a href="{{ url('/edit_reuniao',$reuniao->id) }}" class="btn btn-success btn-sm">Editar</a>
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
  {{ $reunioes->links() }}:
</div>
@endsection