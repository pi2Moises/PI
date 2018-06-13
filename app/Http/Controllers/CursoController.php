<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\curso;
use App\Professor;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::paginate(5);
        // $cursos = Curso::all();
        return view('curso.listacurso',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professores = Professor::all();
        return view('curso.create_curso',compact('professores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nome_curso'                =>'required|integer',
            'cod_curso'                 =>'required',
            't_curso'                   =>'required',
            'modalidade'                =>'required',
            'denominacao_curso'         =>'required',
            'habilitacao'               =>'required',
            'local_oferta'              =>'required',
            'turno_func'                =>'required',
            'num_vagas'                 =>'required|integer',
            'carga_h_curso'             =>'required|integer',
            'regime_letivo'             =>'required|integer',
            'periodo'                   =>'required|integer',
        ],[
            'nome_curso.required'       =>'O campo NOME CURSO é obrigatório.',
            'cod_curso.required'        =>'O campo CÓDIGO DO CURSO é obrigatório.',
            't_curso.required'          =>'O campo TIPO DO CURSO é obrigatório.',
            'modalidade.required'       =>'O campo MODALIDADE é obrigatório.',
            'denominacao_curso.required'=>'O campo DENOMINAÇÃO DO CURSO é obrigatório.',
            'habilitacao.required'      =>'O campo HABILITAÇÃO é obrigatório.',
            'local_oferta.required'     =>'O campo LOCAL DE OFERTA é obrigatório.',
            'turno_func.required'       =>'O campo TURNO DE FUNCIONAMENTO é obrigatório.',
            'num_vagas.required'        =>'O campo NÚMEROS DE VAGAS PARA CADA TURNO é obrigatório.',
            'carga_h_curso.required'    =>'O campo CARGA HORÁRIA DO CURSO é obrigatório.',
            'num_vagas.integer'         =>'Digite apenas números no campo NÚMEROS DE VAGAS PARA CADA TURNO.',
            'carga_h_curso.integer'     =>'Digite apenas números no campo CARGA HORÁRIA DO CURSO.',
            'regime_letivo.integer'     =>'Digite apenas números no campo REGIME LETIVO.',
            'periodo.integer'           =>'Digite apenas números no campo PERÍODO.',
            'regime_letivo.required'    =>'O campo REGIME LETIVO é obrigatório.',
            'periodo.required'          =>'O campo PERÍODO é obrigatório.',


        ]);
        // dd($request->all());
        $dados = $request->all();
        curso::create($dados);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listacurso';";
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
        $curso = Curso::findOrFail($id);

        return view('curso.editar_curso',compact('curso'));
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
        $curso = $request->all();
        $id = Curso::findOrFail($id);
        $id->update($curso);

        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listacurso';";
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
        $deleta_curso = Curso::findOrFail($id);
        $deleta_curso -> delete($id);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listacurso';";
        echo "</script>";
    }
}
