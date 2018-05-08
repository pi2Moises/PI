<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\curso;

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
        return view('curso.create_curso');
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
