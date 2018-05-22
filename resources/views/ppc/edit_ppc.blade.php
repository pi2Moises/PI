@extends('layouts.app')
@section('content')
<form method="post" action="{{ url('/edit_ppc', $ppcs->id) }}">
	{{csrf_field()}}
	<div class="form-group col-md-10" style="position:absolute; left:80px; top: 50px;">
		<table class="table table-bordered">
			<h3 align="center">CADASTRAR PPC</h3>
			<thead>
				<tr>
					<th>
						<div class="form-row">
							<div class="form-group col-md-12">
							<div class="form-group col-md-6">
								<label for="inputCity">Curso</label>
								<select class="form-control" name="curso">
									@foreach ($cursos as $curso)
									  <option>{{$curso->nome_curso}}</option>									 
									  <option>Curso: {{$curso->nome_curso}}</option>
								  @endforeach
								</select>
							</div>
							</div>							
							<div class="form-group col-md-12">
								<div class="form-group col-md-6">
									<label for="inputCity">Perfil Curso</label>
									<input type="text" class="form-control" name="perfil_curso" value="{{$ppcs->perfil_curso}}" required>
								</div>
								<div class="form-group col-md-6">
									<label for="inputCity">Perfil de Egresso</label>
									<input type="text" class="form-control" name="perfil_egresso" value="{{$ppcs->perfil_egresso}}" required>
								</div>
								<div class="form-group col-md-6">
									<label for="inputCity">Forma de Acesso Curso</label>
									<input type="text" class="form-control" name="acesso_curso" value="{{$ppcs->acesso_curso}}" required>
								</div>
								<div class="form-group col-md-6">
									<label for="inputCity">Representação Gráfica de um Perfil de formação</label>
									<input type="text" class="form-control" name="rep_grafica" value="{{$ppcs->rep_grafica}}" required>
								</div>
								<div class="form-group col-md-6">
									<label for="inputCity">Sis. de Avaliação do Proc. Ensino Aprendizagem</label>
									<input type="text" class="form-control" name="sis_aval" value="{{$ppcs->sis_aval}}" required>
								</div>
								<div class="form-group col-md-6">
									<label for="inputCity">Sistema de Avaliação de Projeto de Curso</label>
									<input type="text" class="form-control" name="sis_aval_projeto_curso" value="{{$ppcs->sis_aval_projeto_curso}}" required>
								</div>
								<div class="form-group col-md-3">
									<label for="inputCity">TCC</label>
									<input type="text" class="form-control" name="tcc" value="{{$ppcs->tcc}}" required>
								</div>
								<div class="form-group col-md-3">
									<label for="inputCity">Estágio Curricular</label>
									<input type="text" class="form-control" name="estagio_curricular" value="{{$ppcs->estagio_curricular}}" required>
								</div>
								<div class="form-group col-md-12">
									<label for="inputCity">Política de Atendimento a Pessoas com Deficiência e/ou Mobilidade Reduzida</label>
									<input type="text" class="form-control" name="pol_atend" value="{{$ppcs->pol_atend}}" required>
								</div>
							</div>
						</div>						
						<br>
						<br>
						<div align="center">
							<button type="submit" class="btn btn-primary">Cadastrar</button>
							<a href="{{url('/listappc')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
						</div>
					</th>
				</tr>
			</thead>
		</table>
	</div>
	
</form>
@endsection