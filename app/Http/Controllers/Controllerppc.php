<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Disciplina;
use App\ppc;


class Controllerppc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppcs = ppc::paginate(5);
        $cursos = Curso::all();
        return view('ppc.listappc',compact('ppcs','cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        return view('ppc.create_ppc',compact('cursos'));
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
            'curso'                             =>'required',
            'perfil_curso'                      =>'required',
            'perfil_egresso'                    =>'required',
            'acesso_curso'                      =>'required',
            'rep_grafica'                       =>'required',
            'sis_aval'                          =>'required',
            'sis_aval_projeto_curso'            =>'required',
            'tcc'                               =>'required',
            'estagio_curricular'                =>'required',
            'pol_atend'                         =>'required',

        ],[
            'curso.required'                    =>'O campo CURSO é obrigatório.',
            'perfil_curso.required'             =>'O campo PERFIL DO CURSO é obrigatório.',
            'perfil_egresso.required'           =>'O campo PERFIL DE EGRESSO é obrigatório.',
            'acesso_curso.required'             =>'O campo FORMA DE ACESSO CURSO é obrigatório.',
            'rep_grafica.required'              =>'O campo REPRESENTAÇÃO GRÁFICA é obrigatório.',
            'sis_aval.required'                 =>'O campo SIS. DE AVALIAÇÃO APRENDIZAGEM é obrigatório.',
            'sis_aval_projeto_curso.required'   =>'O campo SIS. DE AVALIAÇÃO DE PROJETO é obrigatório.',
            'tcc.required'                      =>'O campo TCC é obrigatório.',
            'estagio_curricular.required'       =>'O campo ESTÁGIO REGULAR é obrigatório.',
            'pol_atend.required'                =>'O campo POLÍTICA DE ATENDIMENTO A PCD é obrigatório.',



        ]);
        // dd($request->all());
        $dados = $request->all();
        ppc::create($dados);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listappc';";
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
        $ppcs = ppc::findOrFail($id);
        $cursos = Curso::all();        
        return view('ppc.edit_ppc',compact('ppcs','cursos'));
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
        $ppc = $request->all();
        $id = Ppc::findOrFail($id);
        $id->update($ppc);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listappc';";
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
        $delete = ppc::findOrFail($id);
        $delete -> delete($id);
        echo "<script language=JavaScript>";
        // echo "confirm('Tem certeza que deseja deletar?');";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listappc';";
        echo "</script>";
        // onclick="confirm('Deseja mesmo deletar?')
    }
}
