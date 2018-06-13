@extends('layouts.app')
@section('content')

<form method="post" action="{{ url('/cad_reuniao') }}">	
	{{csrf_field()}}
	<div class="form-group col-md-10" style="position:absolute; left:100px; top: 50px;">
	{{-- <div class="form-group col-md-10" style="position:absolute; left:100px; top: 50px; border: outset; border-color: red;"> --}}
		{{-- <table class="table table-bordered"> --}}
		<table class="table table-bordered">
		{{-- <table class="table table-bordered" style="background-color: #b9b9b9; border-width: : medium; border-color: black"> --}}
			<h3 align="center">ELABORAR ATA DE REUNIÃO</h3>
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
							<div class="form-group col-md-4">
								<label for="inputCity">Data da reunião</label>
								<input type="text" class="form-control" name="dt_reuniao" placeholder="ex: 01/01/1991" required value="{{old('dt_reuniao')}}">
							</div>
							<div class="form-group col-md-8">
								<label for="inputCity">Local da reunião</label>
								<input type="text" class="form-control" name="local_reuniao" required value="{{old('local_reuniao')}}">
							</div>
							<div class="form-group col-md-12">
								<label for="inputCity">Participantes</label>
								<input type="text" class="form-control" name="participantes" placeholder="participante 1, participante 2, ..." required value="{{old('participante')}}">
							</div>
							<div class="form-group col-md-12">
								<label for="inputCity">Deliberações</label>
								<textarea class="form-control" rows="6" name="deliberacoes" required>{{old('deliberacoes')}}</textarea>
							</div>							
						</div>
						<br>
						<br>
						<div align="center">
							<button type="submit" class="btn btn-primary">Salvar</button>
							<a href="{{url('/listareuniao')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
						</div>
					</th>
				</tr>
			</thead>
		</table>
	</div>
	
</form>
@endsection