<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ensino;
use App\Curso;
use App\Atividade;
use App\Disciplina;
use App\Professor;

class ControllerPlanoEnsino extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ensinos = Ensino::paginate(5);
        // $ensinos = Ensino::all();
        return view('planoensino.lista_ensino',compact('ensinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        $disciplinas = Disciplina::all();
        $atividades = Atividade::all();
        $professores = Professor::all();
        return view('planoensino.create_ensino',compact('cursos','disciplinas','atividades','professores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $dados = $request->all();
        Ensino::create($dados);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listaensino';";
        echo "</script>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ensinos = Ensino::findOrFail($id);
        $cursos = Curso::all();
        $disciplinas = Disciplina::all();
        $atividades = Atividade::all();
        $professores = Professor::all();
        return view('planoensino.edit_ensino',compact('ensinos','cursos','disciplinas','atividades','professores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = $request->all();
        $id = Ensino::findOrFail($id);
        $id->update($dados);

        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listaensino';";
        echo "</script>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dados = Ensino::findOrFail($id);
        $dados -> delete($id);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listaensino';";
        echo "</script>";
    }
}
