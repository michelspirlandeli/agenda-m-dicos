@extends('shared.base')
@section('content')

<div class="container">
<a type="submit" class="btn btn-primary" href="{{ route('pacientes.create') }}">Cadastrar</a>
<table id="pacientes" class="table table-striped">
	<h1>Lista de pacientes</h1>
    <thead>
        <tr>
            <th>Cod.</th>
            <th>Paciente</th>
            <th>Email</th>
            <th>Idade</th>
            <th>Sexo</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Convênio</th>
            <th>Número do convênio</th>
            <th>Ações</th>
            <th>Ações</th>
        </tr>
    </thead>
   
</table>
</div>

@endsection