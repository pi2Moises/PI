@extends('layouts.app')

@section('content')

<div class="form-group col-md-12">
<div id="accordion">
  <div class="card-body">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          MEMBROS DO GRUPO
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Autor: Moisés Alexandre de Souza<br>
        Matrícula: 16286101007<br>
        Curso: Análise e Desenvolvimento de Sistemas<br>
        Data: 04/05/2018<br>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
