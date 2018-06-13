@extends('layouts.app')
@section('content')
<form method="post" action="{{ url('/cad_bibliografia') }}">
	{{csrf_field()}}
	<div class="form-group col-md-10" style="position:absolute; left:80px; top: 50px;">
		<table class="table table-bordered">
			<h3 align="center">CADASTRAR BIBLIOGRAFIA</h3>
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
							<div class="form-group col-md-6">
								<label for="inputCity">Curso</label>
								<select class="form-control" name="curso">
								  <option>Selecione</option>
								  @foreach ($cursos as $curso)
								  <option value="{{$curso->nome_curso}}" >{{$curso->nome_curso}}</option>
								  @endforeach
								</select>
							</div>
							<div class="form-group col-md-6">
								<label for="inputCity">Disciplina</label>
								<select class="form-control" name="disciplina">
								  <option>Selecione</option>
								  @foreach ($disciplinas as $disciplina)
								  <option value="{{$disciplina->disciplina}}">{{$disciplina->disciplina}}</option>
								  @endforeach
								</select>
							</div>
							<div class="form-group col-md-14" align="center">
								<label for="inputCity">Referência Bibliográfica</label>
							</div>
							<div class="form-group col-md-12">
								<label for="inputCity">Título</label>
								<input type="text" class="form-control" name="titulo" required>
							</div>
							<div class="form-group col-md-12">
								<label for="inputCity">Autor</label>
								<input type="text" class="form-control" name="autor" required>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputCity">ISBN</label>
									<input type="text" class="form-control" name="isbn" required>
								</div>
								<div class="form-group col-md-6">
									<label for="inputZip">Ano</label>
									<input type="text" class="form-control" name="ano" required>
								</div>
								<div class="form-group col-md-12">
									<label for="inputZip">Editora</label>
									<input type="text" class="form-control" name="editora" required>
								</div>
							</div>
						</div>						
						<br>
						<br>
						<div align="center">
							<button type="submit" class="btn btn-primary">Cadastrar</button>
							<a href="{{url('/listacurso')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
						</div>
					</th>
				</tr>
			</thead>
		</table>
	</div>
	
</form>
@endsection