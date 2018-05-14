<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ControllerProfessor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professores = Professor::paginate(5);
        // $professores = Professor::all();
        return view('professor.listaprofessor',compact('professores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session_start();
        return view('professor.create_professor');
    }

    
    public function create2(Request $request)
    {
        session_start();    
        foreach ($request->all() as $key => $value) {
            $_SESSION[$key] = $value;
        }
        return view('professor.atuacao_professor');
    }

    public function create3(Request $request)
    {
        session_start();    
        foreach ($request->all() as $key => $value) {
            $_SESSION[$key] = $value;
        }
        return view('professor.atuacao_profissional_professor');
    }

     public function create4(Request $request)
    {
        session_start();    
        foreach ($request->all() as $key => $value) {
            $_SESSION[$key] = $value;
        }
        // var_dump($_SESSION);    
        // dd($_SESSION);    
        return view('professor.publicacoes_professor');
    } 


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();
        foreach ($request->all() as $key => $value) {
            $_SESSION[$key] = $value;
        }
       
        // dd($_SESSION);
        $dados = $request->all();
        professor::Create($_SESSION);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listaprofessor';";
        echo "</script>";
        session_destroy();        
        // var_dump($_SESSION);

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
       $professor = Professor::findOrFail($id);

        return view('professor.edit_professor',compact('professor'));
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
        $professor = $request->all();
        $id = Professor::findOrFail($id);
        $id->update($professor);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listaprofessor';";
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
        $deleta_profeesor = Professor::findOrFail($id);
        $deleta_profeesor -> delete($id);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listaprofessor';";
        echo "</script>";
    }
}
