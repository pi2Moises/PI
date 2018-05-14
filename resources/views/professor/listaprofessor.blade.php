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
    <H3 align="center">LISTA DE PROFESSORES</H3>
    <thead>
      <tr>
        <th>NOME_PROFESSOR</th>
        <th>CPF</th>
        <th>TITULAÇÃO</th>
        <th>FORMAÇÃO</th>
        <th>CURRICULO</th>
        {{-- <th>DT_ATUALIZAÇÃO</th> --}}
        <th>MATRICULA</th>
        <th>AÇÃO</th>
      </tr>
    </thead>
    <tbody>
      @foreach($professores as $professor)
      <tr>
        <td>{{$professor->nome_prof}}</td>
        <td>{{$professor->cpf}}</td>
        <td align="center">{{$professor->titulacao}}</td>
        <td align="center">{{$professor->formacao}}</td>
        <td align="center">{{$professor->curriculo}}</td>
        <td align="center">{{$professor->matricula}}</td>      
        <td align="center">
          <form method="post" action="{{ url('/delete_professor', $professor->id) }}">
            
              {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE">
              <input type="submit" value="Deletar" class="btn btn-danger btn-sm">
              <a href="{{ url('/edit_professor',$professor->id) }}" class="btn btn-success btn-sm">Editar</a>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</font>
<br>
<br>
<br>
<br>
<div align="center">
  {{ $professores->links() }}
</div>
@endsection