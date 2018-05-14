@extends('layouts.app')
@section('content')

<form method="post" action="{{ url('/at_professor') }}">	
	{{csrf_field()}}
	<div class="form-group col-md-10" style="position:absolute; left:100px; top: 50px;">
	{{-- <div class="form-group col-md-10" style="position:absolute; left:100px; top: 50px; border: outset; border-color: red;"> --}}
		{{-- <table class="table table-bordered"> --}}
		<table class="table table-bordered">
		{{-- <table class="table table-bordered" style="background-color: #b9b9b9; border-width: : medium; border-color: black"> --}}
			<h3 align="center">CADASTRO DE PROFESSOR</h3>
			<ul class="nav nav-tabs">
				<li role="presentation" class="active"><a href="#">Dados Pessoais</a></li>
				<li role="presentation"><a href="#">Atuação IES</a></li>
			</ul>
			{{-- <br> --}}
			{{-- <br> --}}
			{{-- <p><font face = "arial black">CADASTRAR NOVA ENTRADA:</font></p>	 --}}
			<thead>
				<tr>
					<th>
						<div class="form-row">
							<div class="form-group col-md-8">
								<label for="inputCity">Nome</label>
								{{-- <input type="text" class="form-control" name="nome_prof" id="nome_prof" required value="{{ $_SESSION['nome_prof']}}"> --}}
								<input type="text" class="form-control" name="nome_prof" id="nome_prof" required>
							</div>
							<div class="form-group col-md-4">
								<label for="inputCity">CPF</label>
								<input type="text" class="form-control" name="cpf" id="cpf" required>
								{{-- <input type="text" class="form-control" name="cpf" id="cpf" required value="{{ $_SESSION['cpf']}}"> --}}
							</div>
							<div class="form-group col-md-4">
								<label for="inputCity">Maior Titulação</label>
								<input type="text" class="form-control" name="titulacao" required>
								{{-- <input type="text" class="form-control" name="titulacao" required value="{{ $_SESSION['titulacao']}}"> --}}
							</div>
							<div class="form-group col-md-8">
								<label for="inputCity">Área de Formação</label>
								<input type="text" class="form-control" name="formacao" required>
								{{-- <input type="text" class="form-control" name="formacao" required value="{{ $_SESSION['formacao']}}"> --}}
							</div>
							<div class="form-row">
								<div class="form-group col-md-8">
									<label for="inputCity">Currículo Lattes (link)</label>
									{{-- <input type="text" class="form-control" name="curriculo" required value="{{ $_SESSION['curriculo']}}"> --}}
									<input type="text" class="form-control" name="curriculo" required>
								</div>
								<div class="form-group col-md-4">
									<label for="inputZip">Data da Atualização</label>
									<input type="text" class="form-control" name="dt_atualizacao" required>
									{{-- <input type="text" class="form-control" name="dt_atualizacao" required value="{{ $_SESSION['dt_atualizacao']}}"> --}}
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