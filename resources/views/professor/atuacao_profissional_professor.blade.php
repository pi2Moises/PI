@extends('layouts.app')
@section('content')
{{-- <script type="text/javascript">
	$(document).ready(function(){
		$('#dt_inicio_vinc_curso').mask('99/99/9999',{placeholder:"00/00/0000"});
	})
</script> --}}
<form method="post" action="{{ url('/publicacoes_professor') }}">
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
				<li role="presentation"><a href="#">Geral</a></li>
				<li role="presentation" class="active"><a href="#">Atuação Profissional</a></li>
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
								<input type="checkbox" name="membro_nde" value="S">
								<label for="inputCity">Membro NDE?</label>
								
								{{-- <input type="text" class="form-control" name="matricula" required value="{{ $_SESSION['matricula']}}"> --}}
							</div>
							<div class="form-group col-md-8">
								<input type="checkbox" name="membro_colegiado" value="S">
								<label for="inputCity">Membro Colegiado?</label>
								
								{{-- <input type="text" class="form-control" name="matricula" required value="{{ $_SESSION['matricula']}}"> --}}
							</div>
							<br>
							<div class="form-group col-md-8">
								<input type="checkbox" name="docente_pedagogia" value="S">
								<label for="inputCity">Docente com formação/capacitação/experiência pedagógica?</label>
								
								{{-- <input type="text" class="form-control" name="matricula" required value="{{ $_SESSION['matricula']}}"> --}}
							</div>
							<br>
							<br>
							<br>
							<br>
							<div class="form-group col-md-14" align="center">
								<label for="inputZip">O sistema irá calcular o tempo em anos e meses a partir da diferença com a data atual.</label>
								<div class="form-group col-md-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>
													{{-- TEMPO DE VINCULO --}}
													<table class="table table-bordered">
														<thead>
															<tr>
																<th>
																	<div class="form-row">
																		<label for="inputZip"><font color="red">1 - Tempo de vínculo ininterrupto do docente com o curso.</font></label>
																		<br>
																		<br>
																		<div class="form-group col-md-4">
																			<label for="inputCity">Data Inicial</label>
																			<input type="text" class="form-control" name="dt_inicio_vinc_curso" id="dt_inicio_vinc_curso" required>
																			{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
																		</div>																		
																		<div class="form-group col-md-8">
																			<label for="inputCity">Tempo Total</label>															
																			<input type="text" class="form-control" name="tot_tempo_vinc_curso" required>
																			{{-- <input type="text" class="form-control" name="tcc" required value="{{$_SESSION['tcc']}}"> --}}
																		</div>
																		
																	</div>
																</div>
																<br>
																<br>
															</th>
														</tr>
													</thead>
												</table>
												{{-- TEMPO DE EXPERIÊNCIA --}}
												<table class="table table-bordered">
													<thead>
														<tr>
															<th>
																<div class="form-row">
																	<label for="inputZip"><font color="red">2 - Tempo de Experiência em Magistério Superior</font></label>
																	<br>
																	<br>
																	<div class="form-group col-md-4">
																		<label for="inputCity">Data Inicial</label>
																		<input type="text" class="form-control" name="dt_inicio_exp_mag" required>
																		{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
																	</div>
																	<div class="form-group col-md-8">
																		<label for="inputCity">Tempo Total</label>
																		<input type="text" class="form-control" name="tot_tempo_exp_mag" required>
																		{{-- <input type="text" class="form-control" name="tcc" required value="{{$_SESSION['tcc']}}"> --}}
																	</div>
																	
																</div>
															</div>
															<br>
															<br>
														</th>
													</tr>
												</thead>
											</table>
											{{-- EXPERIÊNCIA EAD --}}
											<table class="table table-bordered">
												<thead>
													<tr>
														<th>
															<div class="form-row">
																<label for="inputZip"><font color="red">3 - Experiência em cursos a Distância</font></label>
																<br>
																<br>
																<div class="form-group col-md-4">
																	<label for="inputCity">Data Inicial</label>
																	<input type="text" class="form-control" name="dt_inicio_curso_dist" required>
																	{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
																</div>
																<div class="form-group col-md-8">
																	<label for="inputCity">Tempo Total</label>
																	<input type="text" class="form-control" name="tot_tempo_curso_dist" required>
																	{{-- <input type="text" class="form-control" name="tcc" required value="{{$_SESSION['tcc']}}"> --}}
																</div>
																
															</div>
														</div>
														<br>
														<br>
													</th>
												</tr>
											</thead>
										</table>
										{{-- EXPERIÊNCIA PROFISSIONAL --}}
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>
														<div class="form-row">
															<label for="inputZip"><font color="red">4 - Tempo de Experiência Profissional</font></label>
															<br>
															<br>
															<div class="form-group col-md-4">
																<label for="inputCity">Data Inicial</label>
																<input type="text" class="form-control" name="dt_inicio_exp_prof" required>
																{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
															</div>
															<div class="form-group col-md-8">
																<label for="inputCity">Tempo Total</label>
																<input type="text" class="form-control" name="tot_tempo_exp_prof" required>
																{{-- <input type="text" class="form-control" name="tcc" required value="{{$_SESSION['tcc']}}"> --}}
															</div>
															
														</div>
													</div>
													<br>
													<br>
												</th>
											</tr>
										</thead>
									</table>
									{{-- PARTICIPAÇÃO EM EVENTO --}}
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>
													<div class="form-row">
														<label for="inputZip"><font color="red">5 - Participação em Evento</font></label>
														<br>
														<br>
														<div class="form-group col-md-2">
															<label for="inputCity">Quantidade</label>
															<input type="text" class="form-control" name="participacao_evento" required>
															{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
														</div>
														{{-- 									<div class="form-group col-md-12">
															<label for="inputCity">Tempo Total</label>
															<input type="text" class="form-control" name="tcc" required>
															<input type="text" class="form-control" name="tcc" required value="{{$_SESSION['tcc']}}">
														</div> --}}
														
													</div>
												</div>
												<br>
												<br>
											</th>
										</tr>
									</thead>
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
		<button type="submit" class="btn btn-primary">Próximo</button>
		<a href="{{url('/listaprofessor')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
	</div>
</th>
</tr>
</thead>
</table>
</div>
</form>
@endsection