<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reuniao;

class ControllerReuniao extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reunioes = Reuniao::paginate(5);
        return view('reuniao.listareuniao',compact('reunioes'));
    }
    public function visualizar($id)
        {

           $reuniao = reuniao::findOrFail($id);
            return view('reuniao.visual_reuniao',compact('reuniao'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reuniao.create_reuniao');
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
            'dt_reuniao'                        =>'required|integer',
            'local_reuniao'                     =>'required',
            'participantes'                     =>'required',
            'deliberacoes'                      =>'required',          
        ],[
            'dt_reuniao.required'               =>'O campo DATA DA REUNIÃO é obrigatório.',
            'dt_reuniao.integer'                =>'Digite apenas números no campo DATA DA REUNIÃO.',
            'local_reuniao.required'            =>'O campo LOCAL DA REUNIÃO é obrigatório.',
            'participantes.required'            =>'O campo PARTICIPANTES é obrigatório.',
            'deliberacoes.required'             =>'O campo DELIBERAÇÕES é obrigatório.',
        ]);
        $dados = $request->all();
        Reuniao::create($dados);
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
        $reuniao = reuniao::findOrFail($id);
        return view('reuniao.edit_reuniao',compact('reuniao'));
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
        $reuniao = $request->all();
        $id = Reuniao::findOrFail($id);
        $id->update($reuniao);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listareuniao';";
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
        $deleta_reuniao = Reuniao::findOrFail($id);
        $deleta_reuniao -> delete($id);
        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listareuniao';";
        echo "</script>";
    }
}
