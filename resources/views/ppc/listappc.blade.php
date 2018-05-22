@extends('layouts.app')
@section('content')
<div class="form-group col-md-4">
  <label for="inputZip">Cadastrar novo PPC</label>
  <br>
  <a href="{{url('/cad_ppc')}}"><button type="button" class="btn btn-primary">Novo PPC</button></a>
</div>
<font size="2">
<div class="col-md-12">
  <table class="table table-hover table-bordered table-striped">
    <H3 align="center">LISTA PPC</H3>
    <thead>
      <tr>
        <th>CURSO</th>
        <th>PERFIL_CURSO</th>
        <th>PERFIL_EGRESSO</th>
        <th>ACESSO CURSO</th>
        <th>REPRESENTAÇÃO GRÁFICA</th>
        <th>AÇÃO</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ppcs as $ppc)
      <tr>
        <td>{{$ppc->curso}}</td>
        <td>{{$ppc->perfil_curso}}</td>
        <td>{{$ppc->perfil_egresso}}</td>
        <td>{{$ppc->acesso_curso}}</td>
        <td>{{$ppc->rep_grafica}}</td>
        <td align="center">
          <form method="post" action="{{ url('/delete_ppc', $ppc->id) }}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Deletar" class="btn btn-danger btn-sm">
            <a href="{{ url('/edit_ppc',$ppc->id) }}" class="btn btn-success btn-sm">Editar</a>
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
  {{ $ppcs->links() }}
</div>
@endsection