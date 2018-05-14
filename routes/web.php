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
