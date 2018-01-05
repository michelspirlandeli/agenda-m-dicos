@extends('shared.base')
@section('content')

<div class="container">
<a type="submit" class="btn btn-primary" href="{{ route('doctors.create') }}">Cadastrar</a>
<table id="doctors" class="table table-striped">
	<h1>Lista de médicos</h1>
    <thead>
        <tr>
            <th>Cod.</th>
            <th>Médico</th>
            <th>Especialidades</th>
            <th>CRM</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Contratação</th>
            <th>Data Início</th>
            <th>Ações</th>
            <th>Ações</th>
        </tr>
    </thead>
   
</table>
</div>

@endsection