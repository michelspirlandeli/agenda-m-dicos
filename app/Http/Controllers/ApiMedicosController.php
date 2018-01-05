<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicos;

class ApiMedicosController extends Controller
{
    public function __construct(){
        header('Access-Control-Allow-Origin:*');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = Medicos::all();
        return response()->json(['data'=>$medicos, 'status'=>true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $medicos = Medicos::create($dados);
        if($medicos){
            return response()->json(['data'=>$medicos, 'status'=>true]);
        }else{
            return response()->json(['data'=>'Erro ao criar o medicos', 'status'=>false]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicos = Medicos::find($id);
         if($medicos){
             return response()->json(['data'=>$medicos, 'status'=>true]);
         }else{
             return response()->json(['data'=>'Não existe esse médico cadastrado', 'status'=>false]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $medicos = Medicos::find($id);        
        if($medicos){
            $medicos->update($dados);
            return response()->json(['data'=>$medicos, 'status'=>true]);
        }else{
            return response()->json(['data'=>'Erro ao editar o médico', 'status'=>false]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicos = Medicos::find($id);        
         if($medicos){
             $medicos->delete();
             return response()->json(['data'=>'Médico removido com sucesso!', 'status'=>true]);
         }else{
             return response()->json(['data'=>'Erro ao remover o Médico', 'status'=>false]);
         }
    }
}
