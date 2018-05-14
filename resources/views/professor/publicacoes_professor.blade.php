@extends('layouts.app')
@section('content')
{{-- <script type="text/javascript">
	$(document).ready(function(){
		$('#dt_inicio_vinc_curso').mask('99/99/9999',{placeholder:"00/00/0000"});
	})
</script> --}}
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
				<li role="presentation"><a href="#">Geral</a></li>
				<li role="presentation"><a href="#">Atuação Profissional</a></li>
				<li role="presentation" class="active"><a href="#">Publicações</a></li>
			</ul>
			{{-- <br> --}}
			{{-- <br> --}}
			{{-- <p><font face = "arial black">CADASTRAR NOVA ENTRADA:</font></p>	 --}}
			<thead>
				<tr>
					<th>
						<div class="form-row">							
							<div class="form-group col-md-14" align="center">								
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
																		<label for="inputZip"><font color="red">1 - Artigos publicados em periódicos científicos</font></label>
																		<br>
																		<br>
																		<div class="form-group col-md-6">
																			<label for="inputCity">Na área (QTDE)</label>
																			<input type="text" class="form-control" name="na_area" required>
																			{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
																		</div>
																		<div class="form-group col-md-6">
																			<label for="inputCity">Em outras áreas (QTDE)</label>
																			<input type="text" class="form-control" name="em_outras_areas" required>
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
																	<label for="inputZip"><font color="red">2 - Livros ou capítulos</font></label>
																	<br>
																	<br>
																	<div class="form-group col-md-6">
																		<label for="inputCity">Livros publicados na área (QTDE)</label>
																		<input type="text" class="form-control" name="livro_pub_area" required>
																		{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
																	</div>
																	<div class="form-group col-md-6">
																		<label for="inputCity">Livros publicados em outras áreas (QTDE)</label>
																		<input type="text" class="form-control" name="livro_pub_outra_area" required>
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
																<label for="inputZip"><font color="red">3 - Trabalhos publicados em anuais</font></label>
																<br>
																<br>
																<div class="form-group col-md-6">
																	<label for="inputCity">Completos (QTDE)</label>
																	<input type="text" class="form-control" name="trab_pub_comp" required>
																	{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
																</div>
																<div class="form-group col-md-6">
																	<label for="inputCity">Resumos (QTDE)</label>
																	<input type="text" class="form-control" name="resumo_pub_comp" required>
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
															<label for="inputZip"><font color="red">4 - Propriedades Intelectuais</font></label>
															<br>
															<br>
															<div class="form-group col-md-6">
																<label for="inputCity">Depositado (QTDE)</label>
																<input type="text" class="form-control" name="prop_int_dep" required>
																{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
															</div>
															<div class="form-group col-md-6">
																<label for="inputCity">Registrado (QTDE)</label>
																<input type="text" class="form-control" name="prop_int_dep_regist" required>
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
														<label for="inputZip"><font color="red">5 - Outras publicações</font></label>
														<br>
														<br>
														<div class="form-group col-md-10">
															<label for="inputCity">Traduções de livros, capítulos de livros ou artigos publicados (QTDE)</label>			
															{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
														</div>
														<div class="form-group col-md-4">															
															<input type="text" class="form-control" name="out_pub_1" required>
															{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
														</div>
														<div class="form-group col-md-10">
															<label for="inputCity">Projetos e/ou produções técnicas artísticas e culturais (QTDE)</label>			
															{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
														</div>
														<div class="form-group col-md-4">															
															<input type="text" class="form-control" name="out_pub_2" required>
															{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
														</div>		
														<div class="form-group col-md-10">
															<label for="inputCity">Projetos e/ou produções técnicas artísticas e culturais (QTDE)</label>			
															{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
														</div>
														<div class="form-group col-md-4">															
															<input type="text" class="form-control" name="out_pub_3" required>
															{{-- <input type="text" class="form-control" name="hora_nde" required value="{{$_SESSION['hora_nde']}}"> --}}
														</div>														
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
		<button type="submit" class="btn btn-primary">Cadastrar</button>
		<a href="{{url('/listaprofessor')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
	</div>
</th>
</tr>
</thead>
</table>
</div>
</form>
@endsection