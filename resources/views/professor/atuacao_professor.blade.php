@extends('layouts.app')
@section('content')
<form method="post" action="{{ url('/insert_professor') }}">
	{{csrf_field()}}
	<div class="form-group col-md-10" style="position:absolute; left:100px; top: 50px;">
		<table class="table table-bordered">
			<h3 align="center">CADASTRO DE PROFESSOR</h3>
			<ul class="nav nav-tabs">
				<li role="presentation"><a href="#">Dados Pessoais</a></li>
				<li role="presentation" class="active"><a href="#">Atuação IES</a></li>
			</ul>
			<br>
			<ul class="nav nav-tabs">
				<li role="presentation" class="active"><a href="#">Geral</a></li>
				<li role="presentation"><a href="#">Atuação Profissional</a></li>
				<li role="presentation"><a href="#">Publicações</a></li>
			</ul>
			{{-- <br> --}}
			{{-- <br> --}}
			{{-- <p><font face = "arial black">CADASTRAR NOVA ENTRADA:</font></p>	 --}}
			<thead>
				<tr>
					<th>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputCity">Matrícula</label>
								<input type="text" class="form-control" name="matricula" required>
							</div>
							<div class="form-group col-md-4">
								<label for="inputCity">Data Admissão</label>
								<input type="text" class="form-control" name="dt_admissao" required>
							</div>
							<br>
							<div class="form-group col-md-14" align="center">
								<label for="inputZip">INFORME A QUANTIDADE DE HORAS DAS ATIVIDADES</label>
								<div class="form-group col-md-12">
									<table class="table table-bordered">										
										<thead>
											<tr>
												<th>
													<div class="form-row">
														<div class="form-group col-md-4">
															<label for="inputCity">Hora NDE</label>
															<input type="text" class="form-control" name="hora_nde" required>
														</div>
														<div class="form-group col-md-4">
															<label for="inputCity">Orientador TCC</label>
															<input type="text" class="form-control" name="tcc" required>
														</div>	
														<div class="form-group col-md-4">
															<label for="inputCity">Coordenação de Curso</label>
															<input type="text" class="form-control" name="c_curso" required>
														</div>
														<div class="form-group col-md-4">
															<label for="inputCity">Coordenação Outros Cursos</label>
															<input type="text" class="form-control" name="c_curso" required>
														</div>														
														<div class="form-row">
															<div class="form-group col-md-4">
																<label for="inputCity">Pesquisa(semestre atual)</label>
																<input type="text" class="form-control" name="curriculo" required>
															</div>
															<div class="form-group col-md-4">
																<label for="inputZip">Atividade Extra Classe</label>
																<input type="text" class="form-control" name="atv_extra" required>
															</div>
															<div class="form-group col-md-4">
																<label for="inputZip">Atividade Extra Outro Curso</label>
																<input type="text" class="form-control" name="Atv_extra_outro_curso" required>
															</div>
															<div class="form-group col-md-4">
																<label for="inputZip">Qtde de Horas Curso</label>
																<input type="text" class="form-control" name="qtd_horas_curso" required>
															</div>
															<div class="form-group col-md-4">
																<label for="inputZip">Qtde de Horas Outros Cursos</label>
																<input type="text" class="form-control" name="qtd_horas_outros_curso" required>
															</div>
														</div>
													</div>
													<br>
													<br>													
												</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
					<br>
					<br>
					<div align="center">
						<button type="submit" class="btn btn-primary">Salvar</button>
						<a href="{{url('/listaprofessor')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
					</div>
				</th>
			</tr>
		</thead>
	</table>
</div>

</form>
@endsection