@extends('layouts.app')
@section('content')
<form method="post" action="{{ url('/cad_curso') }}">
	{{csrf_field()}}
	<div class="form-group col-md-8" style="position:absolute; left:200px; top: 50px;">
		<table class="table table-bordered">
			<h3 align="center">CADASTRO DE CURSO</h3>
			<thead>
				<tr>
					<th>
						<div class="form-row">
							<div class="form-group col-md-8">
								<label for="inputCity">Nome Curso</label>
								<input type="text" class="form-control" name="nome_curso" required>
							</div>
							<div class="form-group col-md-4">
								<label for="inputCity">Código do Curso</label>
								<input type="text" class="form-control" name="cod_curso" required>
							</div>
							<div class="form-group col-md-4">
								<label for="inputCity">Tipo do Curso</label>
								<input type="text" class="form-control" name="t_curso" required>
							</div>
							<div class="form-group col-md-8">
								<label for="inputCity">Modalidade</label>
								<input type="text" class="form-control" name="modalidade" required>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12">
									<label for="inputCity">Denominação do Curso</label>
									<input type="text" class="form-control" name="denominacao_curso" placeholder="Teórico ou Prático" required>
								</div>
								<div class="form-group col-md-4">
									<label for="inputZip">Habilitação</label>
									<input type="text" class="form-control" name="habilitacao" required>
								</div>
								<div class="form-group col-md-8">
									<label for="inputZip">Local de Oferta</label>
									<input type="text" class="form-control" name="local_oferta" required>
								</div>
								<div class="form-group col-md-8">
									<label for="inputZip">Turno de Funcionamento</label>
									<input type="text" class="form-control" name="turno_func" required>
								</div>
								<div class="form-group col-md-4">
									<label for="inputZip">Número de Vagas para Cada Turno</label>
									<input type="text" class="form-control" name="num_vagas" placeholder="Campo númerico (Vagas Anuais)" required>
								</div>
								<div class="form-group col-md-6">
									<label for="inputZip">Carga Horária do Curso</label>
									<input type="text" class="form-control" name="carga_h_curso" Placeholder="Em horas" required>
								</div>
								<div class="form-group col-md-2">
									<label for="inputZip">Regime Letivo</label>
									<input type="text" class="form-control" name="regime_letivo" required>
								</div>
								<div class="form-group col-md-4">
									<label for="inputZip">períodos</label>
									<input type="text" class="form-control" name="periodo" required>
								</div>
							</div>
						</div>
						<div class="form-group col-md-8">
							<label for="inputState">Coordenador do Curso</label>
							<select name="coord_curso" class="form-control">
								<option selected>Nome...</option>
								<option>Rubens Laurini Sant'Anna</option>
								<option>Moisés Alexandre de Souza</option>
							</select>
						</div>
						<div class="form-group col-md-4">
							<label for="inputZip">Cadastrar novo Coordenador?</label>
							<br>
							<button type="submit" class="btn btn-primary">Novo Coordenador</button>
						</div>
						<div class="form-group col-md-4">
							<label for="inputZip">CPF</label>
							<input type="text" class="form-control" name="cpf" Placeholder="Preenchimento Automático" required>
						</div>
						<div class="form-group col-md-4">
							<label for="inputZip">Titulação</label>
							<input type="text" class="form-control" name="titulacao" Placeholder="Preenchimento Automático" required>
						</div>
						<div class="form-group col-md-4">
							<label for="inputZip">Tempo de Dedicação</label>
							<input type="text" class="form-control" name="dedicacao"  Placeholder="Preenchimento Automático" required>
						</div>
						<br>
						<br>
						<div align="center">
							<button type="submit" class="btn btn-primary">Salvar</button>
							<a href="{{url('/listacurso')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
						</div>
					</th>
				</tr>
			</thead>
		</table>
	</div>
	
</form>
@endsection