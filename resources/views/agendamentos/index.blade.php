@extends('shared.base')
@section('content')

<div class="container">
<a type="submit" class="btn btn-primary" href="{{ route('agendamentos.create') }}">Cadastrar</a>
<table id="agendamentos" class="table table-striped">
	<h1>Lista de consultas</h1>
    <thead>
        <tr>
            <th>Cod.</th>
            <th>Paciente</th>
            <th>Cpf</th>
            <th>Médico</th>
            <th>Data Consulta</th>
            <th>Horário</th>
            <th>Status</th>
            <th>Ações</th>
            <th>Ações</th>
        </tr>
    </thead>
   
</table>
</div>

@endsection