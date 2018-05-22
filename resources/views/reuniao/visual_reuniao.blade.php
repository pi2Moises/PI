@extends('layouts.app')
@section('content')

<form method="post" action="#">	
	{{csrf_field()}}
	<div class="form-group col-md-10" style="position:absolute; left:100px; top: 50px;">
		<table class="table table-bordered">
			<h3 align="center">Detalhes da Reunião</h3>
				<tr>
					<th>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputCity">Data da reunião</label>
								<input type="text" class="form-control" name="dt_reuniao" placeholder="ex: 01/01/1991" value="{{ $reuniao->dt_reuniao }}" readonly="disable" required>
							</div>
							<div class="form-group col-md-8">
								<label for="inputCity">Local da reunião</label>
								<input type="text" class="form-control" name="local_reuniao" value="{{ $reuniao->local_reuniao }}" readonly="disable" required>
							</div>
							<div class="form-group col-md-12">
								<label for="inputCity">Participantes</label>
								<input type="text" class="form-control" name="participantes" placeholder="participante 1, participante 2, ..." value="{{ $reuniao->participantes }}" readonly="disable" required>
							</div>
							<div class="form-group col-md-12">
								<label for="inputCity">Deliberações</label>
								<textarea class="form-control" rows="6" name="deliberacoes" readonly="disable">{{ $reuniao->deliberacoes }}</textarea>
							</div>							
						</div>
						<br>
						<br>
						<div align="center">
							<a href="{{url('/listareuniao')}}"><button type="button" class="btn btn-danger">Fechar</button></a>
						</div>
					</th>
				</tr>
			</thead>
		</table>
	</div>
	
</form>
@endsection