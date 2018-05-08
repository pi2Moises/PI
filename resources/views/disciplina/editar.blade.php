@extends('layouts.app')
@section('content')

@if(session('success'))
<p class="alert-success">
  {{session('success')}}
</p>
@endif
<form method="post" action="{{ url('/edit_disciplina', $disciplina->id) }}">
  {{csrf_field()}}
  <div class=" form-group col-md-8" style="position:absolute; left:200px; top: 100px;">
    <table class="table table-bordered">
      <h3 align="center">ALTERAR DISCIPLINA</h3>
      <thead>
        <tr>
          <th>
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
            <div align="center">
              <button type="submit" class="btn btn-primary">Salvar</button>
              <a href="{{url('/listadisciplina')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
            </div>
          </div>
        </th>
      </tr>
    </thead>
  </table>
  
</form>
@endsection