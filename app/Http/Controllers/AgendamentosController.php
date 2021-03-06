<?php

namespace App\Http\Controllers;

use App\Agendamentos;
use App\Doctors;
use App\Pacientes;
use Illuminate\Http\Request;

class AgendamentosController extends Controller {
	/*protected function validarAgendamentos($request){
		        $validator = Validator::make($request->all(), [
		            "paciente" => "required",
		            "cpf"=> "required",
		            "medico" => "required",
		            "dataconsulta" => "required",
		            "horario" => "required",
		            "status" => "required"
		        ]);
		        return $validator;
	*/
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$agendamentos = Agendamentos::all();
		return view('agendamentos.index', compact('agendamentos'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$pacientes = Pacientes::all();
		$doctors = Doctors::all();
		return view('agendamentos.create', compact('pacientes', 'doctors'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		/*$validator = $this->validarAgendamentos($request);
			        if($validator->fails()){
			            return redirect()->back()->withErrors($validator->errors());
		*/
		$dados = $request->all();
		$agendamentos = Agendamentos::create($dados);
		$agendamentos = Agendamentos::find($agendamentos->id);
		$agendamentos->Relacionamento_Paciente_Doctor_Agendamento()->attach($dados['pacientes_id']);

		return redirect()->route('agendamentos.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$agendamentos = Agendamentos::find($id);
		return view('agendamentos.show', compact('agendamentos'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$agendamentos = Agendamentos::find($id);
		return view('agendamentos.edit', compact('agendamentos'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$validator = $this->validarAgendamentos($request);

		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator->errors());
		}

		$agendamentos = Agendamentos::find($id);
		$dados = $request->all();
		$agendamentos->update($dados);
		return redirect()->route('agendamentos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		Agendamentos::find($id)->delete();
		return redirect()->route('agendamentos.index');
	}

	public function remover($id) {
		$agendamentos = Agendamentos::find($id);
		return view('agendamentos.remove', compact('agendamentos'));
	}

}
