@extends('layouts.app')
@section('content')	

@if(session('success'))
<p class="alert-success">
	{{session('success')}}
</p>
@endif
<form method="post" action="{{ url('/create_disciplina') }}">
	{{csrf_field()}}
	<div>
		<div class="col-md-8" style="position:absolute; left:200px; top: 100px;">
			<table class="table table-bordered">
				<h3 align="center">CADASTRO DE DISCIPLINAS</h3>
				<thead>
					<tr>
					@if($errors->any())
					<div class="alert alert-danger">
						<ul>						
							@foreach($errors->all() as $erro)
								<li>{{$erro}}</li>
							@endforeach						
						{{-- {{'dados inválidos'}} --}}	
						</ul>						
					</div>
					@endif
						<th>
							<div class="form-row">
								<div class="form-group col-md-12">
									<label for="inputCity">Nome da Disciplina</label>
									<input type="text" class="form-control" name="disciplina" value="{{old('disciplina')}}" required>
								</div>
								<div class="form-row">
									<div class="form-group col-md-8">
										<label for="inputCity">Descrição da Disciplina</label>
										<input type="text" class="form-control" name="descricao" placeholder="Teórico ou Prático" value="{{old('descricao')}}" required>
									</div>
									<div class="form-group col-md-4">
										<label for="inputZip">Código da Disciplina</label>
										<input type="text" class="form-control" name="codigo" value="{{old('codigo')}}" required>
									</div>
									<div class="form-group col-md-6">
										<label for="inputZip">Semestre</label>
										<input type="text" class="form-control" name="semestre" value="{{old('semestre')}}" required>
									</div>
									<div class="form-group col-md-6">
										<label for="inputZip">Carga Horária</label>
										<input type="text" class="form-control" name="carga_horaria" Placeholder="Valores: 30, 60, 90, 120" value="{{old('carga_horaria')}}" required>
									</div>
								</div>
							</div>
							<div align="center">
								<button type="submit" class="btn btn-primary">Salvar</button>
								<a href="{{url('/listadisciplina')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
							</div>
						</div>
					</div>
				</form>
			</th>
			
		</tr>
	</thead>
</table>
@endsection