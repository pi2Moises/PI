@extends('layouts.app')
@section('content')
<form method="post" action="{{ url('/edit_bibliografia', $bibliografia->id) }}">
	{{csrf_field()}}
	<div class="form-group col-md-10" style="position:absolute; left:80px; top: 50px;">
		<table class="table table-bordered">
			<h3 align="center">CADASTRAR BIBLIOGRAFIA</h3>
			<thead>
				<tr>
					<th>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputCity">Curso</label>
								<select class="form-control" name="curso">
								  <option>{{$bibliografia->curso}}</option>
								  @foreach ($cursos as $curso)
								  <option value="{{$curso->nome_curso}}" >Curso: {{$curso->nome_curso}}</option>
								  @endforeach
								</select>
							</div>
							<div class="form-group col-md-6">
								<label for="inputCity">Disciplina</label>
								<select class="form-control" name="disciplina">
								  <option>{{$bibliografia->disciplina}}</option>
								  @foreach ($disciplinas as $disciplina)
								  <option value="{{$disciplina->disciplina}}">Disciplina: {{$disciplina->disciplina}}</option>
								  @endforeach
								</select>
							</div>
							<div class="form-group col-md-14" align="center">
								<label for="inputCity">Referência Bibliográfica</label>
							</div>
							<div class="form-group col-md-12">
								<label for="inputCity">Título</label>
								<input type="text" class="form-control" name="titulo" value="{{$bibliografia->titulo}}" required>
							</div>
							<div class="form-group col-md-12">
								<label for="inputCity">Autor</label>
								<input type="text" class="form-control" name="autor" value="{{$bibliografia->autor}}" required>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputCity">ISBN</label>
									<input type="text" class="form-control" name="isbn" value="{{$bibliografia->isbn}}" required>
								</div>
								<div class="form-group col-md-6">
									<label for="inputZip">Ano</label>
									<input type="text" class="form-control" name="ano" value="{{$bibliografia->ano}}" required>
								</div>
								<div class="form-group col-md-12">
									<label for="inputZip">Editora</label>
									<input type="text" class="form-control" name="editora" value="{{$bibliografia->editora}}" required>
								</div>
							</div>
						</div>						
						<br>
						<br>
						<div align="center">
							<button type="submit" class="btn btn-primary">Cadastrar</button>
							<a href="{{url('/listabibliografia')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
						</div>
					</th>
				</tr>
			</thead>
		</table>
	</div>
	
</form>
@endsection