<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//ROTA DE INICIO
Route::get('/home', 'HomeController@index')->name('home');

//ROTAS DE DISCIPLINAS
Route::get('/listadisciplina', 'DisciplinaController@index');
Route::get('/create_disciplina', 'DisciplinaController@create');
Route::post('/create_disciplina', 'DisciplinaController@store');
Route::get('/edit_disciplina/{id}', 'DisciplinaController@edit');
Route::post('/edit_disciplina/{id}', 'DisciplinaController@update');
Route::delete('/delete_disciplina/{id}', 'DisciplinaController@destroy');

//ROTAS DE CURSO
Route::get('/listacurso', 'CursoController@index');
Route::get('/cad_curso', 'CursoController@create');
Route::post('/cad_curso', 'CursoController@store');
Route::get('/edit_curso/{id}', 'CursoController@edit');
Route::post('/edit_curso/{id}', 'CursoController@update');
Route::delete('/delete_curso/{id}', 'CursoController@destroy');

//ROTAS DE PROFESSOR
Route::get('/listaprofessor', 'ControllerProfessor@index');
Route::get('/cad_professor', 'ControllerProfessor@create');
Route::post('/at_professor', 'ControllerProfessor@create2');
Route::post('/at_profissional_professor', 'ControllerProfessor@create3');
Route::post('/publicacoes_professor', 'ControllerProfessor@create4');
Route::post('/insert_professor', 'ControllerProfessor@store');
Route::get('/edit_professor/{id}', 'ControllerProfessor@edit');
Route::post('/edit_professor/{id}', 'ControllerProfessor@update');
Route::delete('/delete_professor/{id}', 'ControllerProfessor@destroy');


//ROTAS DE REUNIÃO
Route::get('/listareuniao', 'ControllerReuniao@index');
Route::get('/cad_reuniao', 'ControllerReuniao@create');
Route::post('/cad_reuniao', 'ControllerReuniao@store');
Route::get('/edit_reuniao/{id}', 'ControllerReuniao@edit');
Route::get('/detalhes/{id}', 'ControllerReuniao@visualizar');
Route::post('/edit_reuniao/{id}', 'ControllerReuniao@update');
Route::delete('/delete_reuniao/{id}', 'ControllerReuniao@destroy');


//ROTAS DE ATIVIDADE
Route::get('/listaatividade', 'ControllerAtividade@index');
Route::get('/cad_atividade', 'ControllerAtividade@create');
Route::post('/cad_atividade', 'ControllerAtividade@store');
Route::get('/edit_atividade/{id}', 'ControllerAtividade@edit');
Route::post('/edit_atividade/{id}', 'ControllerAtividade@update');
Route::delete('/delete_atividade/{id}', 'ControllerAtividade@destroy');


//ROTAS DE BIBLIOGRAFIA
Route::get('/listabibliografia', 'ControllerBibliografia@index');
Route::get('/cad_bibliografia', 'ControllerBibliografia@create');
Route::post('/cad_bibliografia', 'ControllerBibliografia@store');
Route::get('/edit_bibliografia/{id}', 'ControllerBibliografia@edit');
Route::post('/edit_bibliografia/{id}', 'ControllerBibliografia@update');
Route::delete('/delete_bibliografia/{id}', 'ControllerBibliografia@destroy');


//ROTAS DE PPC
Route::get('/listappc', 'Controllerppc@index');
Route::get('/cad_ppc', 'Controllerppc@create');
Route::post('/cad_ppc', 'Controllerppc@store');
Route::get('/edit_ppc/{id}', 'Controllerppc@edit');
Route::post('/edit_ppc/{id}', 'Controllerppc@update');
Route::delete('/delete_ppc/{id}', 'Controllerppc@destroy');


//ROTAS DE PPC - PLANO DE ENSINO
Route::get('/listaensino', 'ControllerPlanoEnsino@index');
Route::get('/cad_ensino', 'ControllerPlanoEnsino@create');
Route::post('/cad_ensino', 'ControllerPlanoEnsino@store');
Route::get('/edit_ensino/{id}', 'ControllerPlanoEnsino@edit');
Route::post('/edit_ensino/{id}', 'ControllerPlanoEnsino@update');
Route::delete('/delete_ensino/{id}', 'ControllerPlanoEnsino@destroy');
