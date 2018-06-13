<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $disciplinas = Disciplina::paginate(5);
        return view(    'disciplina.listar',compact('disciplinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disciplina.cadastrar');
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
            'disciplina'=>'required',
            'descricao'=>'required',
            'codigo'=>'required',
            'semestre'=>'required|integer',
            'carga_horaria'=>'required|integer'
        ],[
            'disciplina.required'=>'O campo DISCIPLINA é obrigatório.',
            'descricao.required'=>'O campo DESCRIÇÃO é obrigatório.',
            'codigo.required'=>'O campo CÓDIGO DA DISCIPILINA é obrigatório.',
            'semestre.required'=>'O campo SEMESTRE é obrigatório.',
            'semestre.integer'=>'Digite apenas números no campo SEMESTRE.',
            'carga_horaria.required'=>'O campo CARGA HORÁRIA é obrigatório.',
            'carga_horaria.integer'=>'Digite apenas números no campo CARGA HORÁRIA.',

        ]);
        // dd($request->all());
        $dados = $request->all();
        disciplina::create($dados);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listadisciplina';";
        echo "</script>";        

      // return back()->with(['success'=>'Disciplina cadastrada com sucesso']);
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
        $disciplina = disciplina::findOrFail($id);

        return view('disciplina.editar',compact('disciplina'));
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
        $disciplina = $request->all();
        $id = Disciplina::findOrFail($id);
        $id->update($disciplina);

        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listadisciplina';";
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
        $delete_disc = Disciplina::findOrFail($id);
        $delete_disc->delete($id);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listadisciplina';";
        echo "</script>";
    }
}
