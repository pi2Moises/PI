@extends('layouts.app')
@section('content')
<form method="post" action="{{ url('/edit_ensino',$ensinos->id) }}">
	{{csrf_field()}}
	<div class="form-group col-md-10" style="position:absolute; left:100px; top: 50px;">
		<table class="table table-bordered">
			<h3 align="center">Cadastro de Plano de Ensino</h3>
			<h4 align="left">Status</h4>
			<h4 align="center">Identificação Nº: 12345</h4>
			<thead>
				<tr>
					<th>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputState">Curso</label>
									<select name="curso" class="form-control">
										@foreach($cursos as $curso)
										<option>{{$curso->nome_curso}}</option>										
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group col-md-3">
								<label for="inputCity">Ano</label>
								<input type="text" class="form-control" name="ano" value="{{$ensinos->ano}}" required>
							</div>
							<div class="form-group col-md-3">
								<label for="inputCity">Semestre</label>
								<input type="text" class="form-control" name="semestre" value="{{$ensinos->semestre}}" required>
							</div>
							<div class="form-group col-md-6">
								<label for="inputState">Disciplina</label>
									<select name="disciplina" class="form-control">
										@foreach($disciplinas as $disciplina)
										<option>{{$disciplina->codigo}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="inputState">Nome da Disciplina</label>
									<select name="nome_disciplina" class="form-control">
										@foreach($disciplinas as $disciplina)
										<option>{{$disciplina->disciplina}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputCity">Carga Horária Semestral</label>
									<input type="text" class="form-control" name="carga_horaria_curso" placeholder="999" value="{{$ensinos->carga_horaria_curso}}" required>
								</div>
								<div class="form-group col-md-6">
									<label for="inputState">Período do Curso</label>
									<select name="periodo_curso" class="form-control">
										<option selected>Selecione</option>
										<option>1º Semestre</option>
										<option>2º Semestre</option>
									</select>	
								</div>
								</div>
								<div class="form-group col-md-6">
									<label for="inputState">Professor(a)</label>
									<select name="matri_professor" class="form-control">
										@foreach($professores as $professor)
										<option>{{$professor->matricula}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group col-md-6">
									<label for="inputState">Nome Professor(a)</label>
									<select name="nome_professor" class="form-control">
										@foreach($professores as $professor)
										<option>{{$professor->nome_prof}}</option>
										@endforeach
									</select>	
								</div>
								<div class="form-group col-md-12">
									<p align="center"><label for="inputCity">Ementa</label></p>
									<textarea class="form-control" rows="4" name="ementa">{{$ensinos->ementa}}</textarea>
								</div>
								<div class="form-group col-md-12">
									<p align="center"><label for="inputCity">Competência e Habilidades</label></p>
									<textarea class="form-control" rows="4" name="compet_hab">{{$ensinos->compet_hab}}</textarea>
								</div>
								<div class="form-group col-md-12">
									<p align="center"><label for="inputCity">Metodologia de Ensino</label></p>
									<textarea class="form-control" rows="4" name="metod_ensino">{{$ensinos->metod_ensino}}</textarea>
								</div>
								<p align="center"><label for="inputCity">Cronograma de Atividades</label></p>
								<div class="form-group col-md-4">
									<label for="inputState">Aula</label>
									<select name="cronograma_aula" class="form-control">
										@foreach($atividades as $atividade)
										<option>{{$atividade->aula}}</option>
										@endforeach
									</select>	
								</div>
								<div class="form-group col-md-8">
									<label for="inputState">Conteúdo</label>
									<select name="conteudo" class="form-control">
										@foreach($atividades as $atividade)
										<option>{{$atividade->conteudo}}</option>
										@endforeach
									</select>	
								</div>
								<div class="form-group col-md-12">
									<p align="center"><label for="inputCity">Avaliação</label></p>
									<textarea class="form-control" rows="4" name="avaliacao">{{$ensinos->avaliacao}}</textarea>
								</div>
								<div class="form-group col-md-12">
									<p align="center"><label for="inputCity">Bibliografia</label></p>
									<textarea class="form-control" rows="4" name="bibliografia">{{$ensinos->bibliografia}}</textarea>
								</div>								
						<br>
						<br>
						<div align="center">
							<button type="submit" class="btn btn-primary">Incluir</button>
							<a href="{{url('/listaensino')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
						</div>
					</th>
				</tr>
			</thead>
		</table>
	</div>
	
</form>
@endsection