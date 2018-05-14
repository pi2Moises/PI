@extends('layouts.app')
@section('content')
<form method="post" action="{{ url('/edit_professor', $professor->id) }}">
{{csrf_field()}}
<div class="form-group col-md-10" style="position:absolute; left:100px; top: 50px;">
<table class="table table-bordered">
<thead>
<tr>
<th>
<div class="form-row">
	<div class="form-group col-md-8">
		<h4><font color="red">01 - DADOS PESSOAIS</font></h4>
	</div>
	<div class="form-group col-md-8">
		<label for="inputCity">Nome</label>
		<input type="text" class="form-control" name="nome_prof" id="nome_prof" value="{{ $professor->nome_prof}}" required>
	</div>
	<div class="form-group col-md-4">
		<label for="inputCity">CPF</label>
		<input type="text" class="form-control" name="cpf" id="cpf" value="{{ $professor->cpf}}" required>
	</div>
	<div class="form-group col-md-4">
		<label for="inputCity">Maior Titulação</label>
		<input type="text" class="form-control" name="titulacao" value="{{ $professor->titulacao}}" required>
	</div>
	<div class="form-group col-md-8">
		<label for="inputCity">Área de Formação</label>
		<input type="text" class="form-control" name="formacao" value="{{ $professor->formacao}}" required>
	</div>
	<div class="form-row">
		<div class="form-group col-md-8">
			<label for="inputCity">Currículo Lattes (link)</label>
			<input type="text" class="form-control" name="curriculo" value="{{ $professor->curriculo}}" required>
		</div>
		<div class="form-group col-md-4">
			<label for="inputZip">Data da Atualização</label>
			<input type="text" class="form-control" name="dt_atualizacao" value="{{ $professor->dt_atualizacao}}" required>
		</div>
	</div>
</div>
<br>
<br>
<br>
{{-- INICIO ATUAÇÃO PROFESSOR --}}
<div class="form-row">	
	<div class="form-group col-md-12">
		<h4><font color="red">02 - ATUAÇÃO PROFESSOR</font></h4>
	</div>
	<div class="form-group col-md-4">
		<label for="inputCity">Matrícula</label>
		<input type="text" class="form-control" name="matricula" value="{{ $professor->matricula}}" required>
	</div>
	<div class="form-group col-md-4">
		<label for="inputCity">Data Admissão</label>
		<input type="text" class="form-control" name="dt_admissao" value="{{ $professor->dt_admissao}}" required>
	</div>
	<br>
	<div class="form-group col-md-14" align="center">
		<div class="form-group col-md-4">
			<label for="inputCity">Hora NDE</label>
			<input type="text" class="form-control" name="hora_nde" value="{{ $professor->hora_nde}}" required>
		</div>
		<div class="form-group col-md-4">
			<label for="inputCity">Orientador TCC</label>
			<input type="text" class="form-control" name="tcc" value="{{ $professor->tcc}}" required>
		</div>
		<div class="form-group col-md-4">
			<label for="inputCity">Coordenação de Curso</label>
			<input type="text" class="form-control" name="c_curso" value="{{ $professor->c_curso}}" required>
		</div>
		<div class="form-group col-md-4">
			<label for="inputCity">Coordenação Outros Cursos</label>
			<input type="text" class="form-control" name="coord_o_curso" value="{{ $professor->coord_o_curso}}" required>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="inputCity">Pesquisa(semestre atual)</label>
				<input type="text" class="form-control" name="pesquisa" value="{{ $professor->pesquisa}}" required>
			</div>
			<div class="form-group col-md-4">
				<label for="inputZip">Atividade Extra Classe</label>
				<input type="text" class="form-control" name="atv_extra" value="{{ $professor->atv_extra}}" required>
			</div>
			<div class="form-group col-md-4">
				<label for="inputZip">Atividade Extra Outro Curso</label>
				<input type="text" class="form-control" name="atv_extra_outro_curso" value="{{ $professor->atv_extra_outro_curso}}" required>
			</div>
			<div class="form-group col-md-4">
				<label for="inputZip">Qtde de Horas Curso</label>
				<input type="text" class="form-control" name="qtd_horas_curso" value="{{ $professor->qtd_horas_curso}}" required>
			</div>
			<div class="form-group col-md-4">
				<label for="inputZip">Qtde de Horas Outros Cursos</label>
				<input type="text" class="form-control" name="qtd_horas_outros_curso" value="{{ $professor->qtd_horas_outros_curso}}" required>
			</div>

			{{-- INICIO ATUAÇÃO PROFISSIONAL --}}
			<div align="left">
				<div class="form-group col-md-12">
				<h4><font color="red">03 - ATUAÇAO PROFISSIONAL DO PROFESSOR</font></h4>
			</div>
			<div class="form-group col-md-12">
				<div class="form-group col-md-12">
					<input type="checkbox" name="membro_nde" value="{{ $professor->membro_nde}}">
					<label for="inputCity">Membro NDE?</label>					
				</div>
				<div class="form-group col-md-12">
					<input type="checkbox" name="membro_colegiado" value="{{ $professor->membro_colegiado}}">
					<label for="inputCity">Membro Colegiado?</label>					
				</div>
				<br>
				<div class="form-group col-md-12">
					<input type="checkbox" name="docente_pedagogia" value="{{ $professor->docente_pedagogia}}">
					<label for="inputCity">Docente com formação/capacitação/experiência pedagógica?</label>					
				</div>
				<div class="form-group col-md-12">
					<label for="inputZip">O sistema irá calcular o tempo em anos e meses a partir da diferença com a data atual.</label>		
				</div>
				<div class="form-row">
					<label for="inputZip"><font color="red">1 - Tempo de vínculo ininterrupto do docente com o curso.</font></label>
					<br>
					<br>
					<div class="form-group col-md-4">
						<label for="inputCity">Data Inicial</label>
						<input type="text" class="form-control" name="dt_inicio_vinc_curso" id="dt_inicio_vinc_curso" value="{{ $professor->dt_inicio_vinc_curso}}" required>					
					</div>	
					<div class="form-group col-md-8">
						<label for="inputCity">Tempo Total</label>
						<input type="text" class="form-control" name="tot_tempo_vinc_curso" value="{{ $professor->tot_tempo_vinc_curso}}" required>						
					</div>					
				</div>
				<div class="form-row">
					<label for="inputZip"><font color="red">2 - Tempo de Experiência em Magistério Superior</font></label>
					<br>
					<br>
					<div class="form-group col-md-4">
						<label for="inputCity">Data Inicial</label>
						<input type="text" class="form-control" name="dt_inicio_exp_mag" value="{{ $professor->dt_inicio_exp_mag}}" required>
					</div>
					<div class="form-group col-md-8">
						<label for="inputCity">Tempo Total</label>
						<input type="text" class="form-control" name="tot_tempo_exp_mag" value="{{ $professor->tot_tempo_exp_mag}}" required>
					</div>
				</div>
				<div class="form-row">
					<label for="inputZip"><font color="red">3 - Experiência em cursos a Distância</font></label>
					<br>
					<br>
					<div class="form-group col-md-4">
						<label for="inputCity">Data Inicial</label>
						<input type="text" class="form-control" name="dt_inicio_curso_dist" value="{{ $professor->dt_inicio_curso_dist}}" required>
					</div>
					<div class="form-group col-md-8">
						<label for="inputCity">Tempo Total</label>
						<input type="text" class="form-control" name="tot_tempo_curso_dist" value="{{ $professor->tot_tempo_curso_dist}}" required>
					</div>																	
				</div>
				<div class="form-row">
					<label for="inputZip"><font color="red">4 - Tempo de Experiência Profissional</font></label>
					<br>
					<br>
					<div class="form-group col-md-4">
						<label for="inputCity">Data Inicial</label>
						<input type="text" class="form-control" name="dt_inicio_exp_prof" value="{{ $professor->dt_inicio_exp_prof}}" required>
					</div>
					<div class="form-group col-md-8">
						<label for="inputCity">Tempo Total</label>
						<input type="text" class="form-control" name="tot_tempo_exp_prof" value="{{ $professor->tot_tempo_exp_prof}}" required>
					</div>															
				</div>
				<div class="form-row">
					<label for="inputZip"><font color="red">5 - Participação em Evento</font></label>
					<br>
					<br>
					<div class="form-group col-md-2">
						<label for="inputCity">Quantidade</label>
						<input type="text" class="form-control" name="participacao_evento" value="{{ $professor->participacao_evento}}" required>
					</div>															
				</div>
			</div>

			{{-- INICIO PUBLICAÇÕES PROFESSOR --}}
			<div align="left">
				<div class="form-group col-md-12">
					<h4><font color="red">04 - PUBLICAÇÕES DO PROFESSOR</font></h4>
				</div>
				<div class="form-row">
					<label for="inputZip"><font color="red">1 - Artigos publicados em periódicos científicos</font></label>
					<br>
					<br>
					<div class="form-group col-md-6">
						<label for="inputCity">Na área (QTDE)</label>
						<input type="text" class="form-control" name="na_area" value="{{ $professor->na_area}}" required>						
					</div>
					<div class="form-group col-md-6">
						<label for="inputCity">Em outras áreas (QTDE)</label>
						<input type="text" class="form-control" name="em_outras_areas" value="{{ $professor->em_outras_areas}}" required>						
					</div>					
				</div>
				<div class="form-row">
					<label for="inputZip"><font color="red">2 - Livros ou capítulos</font></label>
					<br>
					<br>
					<div class="form-group col-md-6">
						<label for="inputCity">Livros publicados na área (QTDE)</label>
						<input type="text" class="form-control" name="livro_pub_area" value="{{ $professor->livro_pub_area}}" required>
					</div>
					<div class="form-group col-md-6">
						<label for="inputCity">Livros publicados em outras áreas (QTDE)</label>
						<input type="text" class="form-control" name="livro_pub_outra_area" value="{{ $professor->livro_pub_outra_area}}" required>	
					</div>		
				</div>
				<div class="form-row">
					<label for="inputZip"><font color="red">3 - Trabalhos publicados em anuais</font></label>
					<br>
					<br>
					<div class="form-group col-md-6">
						<label for="inputCity">Completos (QTDE)</label>
						<input type="text" class="form-control" name="trab_pub_comp" value="{{ $professor->trab_pub_comp}}" required>						
					</div>
					<div class="form-group col-md-6">
						<label for="inputCity">Resumos (QTDE)</label>
						<input type="text" class="form-control" name="resumo_pub_comp" value="{{ $professor->resumo_pub_comp}}" required>						
					</div>					
				</div>
				<div class="form-row">
					<label for="inputZip"><font color="red">4 - Propriedades Intelectuais</font></label>
					<br>
					<br>
					<div class="form-group col-md-6">
						<label for="inputCity">Depositado (QTDE)</label>
						<input type="text" class="form-control" name="prop_int_dep" value="{{ $professor->prop_int_dep}}" required>						
					</div>
					<div class="form-group col-md-6">
						<label for="inputCity">Registrado (QTDE)</label>
						<input type="text" class="form-control" name="prop_int_dep_regist" value="{{ $professor->prop_int_dep_regist}}" required>
					</div>
				</div>
				<div class="form-row">
					<label for="inputZip"><font color="red">5 - Outras publicações</font></label>
					<br>
					<br>
					<div class="form-group col-md-10">
						<label for="inputCity">Traduções de livros, capítulos de livros ou artigos publicados (QTDE)</label>					
					</div>
					<div class="form-group col-md-4">
						<input type="text" class="form-control" name="out_pub_1" value="{{ $professor->out_pub_1}}" required>						
					</div>
					<div class="form-group col-md-10">
						<label for="inputCity">Projetos e/ou produções técnicas artísticas e culturais (QTDE)</label>					
					</div>
					<div class="form-group col-md-4">
						<input type="text" class="form-control" name="out_pub_2" value="{{ $professor->out_pub_2}}" required>						
					</div>
					<div class="form-group col-md-10">
						<label for="inputCity">Projetos e/ou produções técnicas artísticas e culturais (QTDE)</label>						
					</div>
					<div class="form-group col-md-4">
						<input type="text" class="form-control" name="out_pub_3" value="{{ $professor->out_pub_3}}" required>					
					</div>
				</div>			
			</div>			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>
							<div align="center">
								<button type="submit" class="btn btn-primary">Salvar</button>
								<a href="{{url('/listaprofessor')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
							</div>
						</th>
					</tr>
				</thead>
			</table>	
</form>
@endsection