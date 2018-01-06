<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Funcionarios;
use Validator;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionarios::all();
        return view('funcionarios.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionarios.create');
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
        Funcionarios::create($dados);

        return redirect()->route('funcionarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $funcionarios = Funcionarios::find($id);
        return view('funcionarios.show', compact('funcionarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionarios = Funcionarios::find($id);
        return view('funcionarios.edit', compact('funcionarios'));
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
        $validator = $this->validarFuncionarios($request);
     
        if($validator->fails()){
        return redirect()->back()->withErrors($validator->errors());
        }

        $funcionarios = Funcionarios::find($id);
        $dados = $request->all();
        $funcionarios->update($dados);
        return redirect()->route('funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Funcionarios::find($id)->delete();
        return redirect()->route('funcionarios.index');
    }

    public function remover($id)
    {
        $funcionarios = Funcionarios::find($id);
        return view('funcionarios.remove', compact('funcionarios'));
    }
}
