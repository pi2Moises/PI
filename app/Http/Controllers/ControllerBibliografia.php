<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\curso;
use App\Disciplina;
use App\Bibliografia;

class ControllerBibliografia extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bibliografias = Bibliografia::paginate(5);
        return view('bibliografia.listabibliografia',compact('bibliografias'));
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

        return  view('bibliografia.create_bibliografia',compact('cursos','disciplinas'));
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
            'ano'                                  =>'required|integer',
            'titulo'                               =>'required',
            'autor'                                =>'required',
            'isbn'                                 =>'required',          
            'editora'                              =>'required',  
        ],[
            'ano.required'                      =>'O campo ANO é obrigatório.',
            'ano.integer'                       =>'Digite apenas números no campo ANO.',
            'titulo.required'                   =>'O campo TITULO é obrigatório.',
            'autor.required'                    =>'O campo AUTOR é obrigatório.',
            'isbn.required'                     =>'O campo ISBN é obrigatório.',
            'editora.required'                  =>'O campo EDITORA é obrigatório.',
        ]);
        // dd($request->all());
        $dados = $request->all();
        Bibliografia::create($dados);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listabibliografia';";
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
        $cursos = Curso::all();
        $disciplinas = Disciplina::all();
        $bibliografia = Bibliografia::findOrFail($id);
        return view('bibliografia.edit_bibliografia',compact('bibliografia','cursos','disciplinas'));
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
        $bibliografia = $request->all();
        $id = Bibliografia::findOrFail($id);
        $id->update($bibliografia);

        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listabibliografia';";
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
        $deleta_bibliografia = Bibliografia::findOrFail($id);
        $deleta_bibliografia -> delete($id);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listabibliografia';";
        echo "</script>";
    }
}
