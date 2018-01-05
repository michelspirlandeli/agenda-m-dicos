@extends('shared.base')
@section('content')

<div class="container">
<a type="submit" class="btn btn-primary" href="{{ route('funcionarios.create') }}">Cadastrar</a>
<table id="funcionarios" class="table table-striped">
	<h1>Lista de funcionários</h1>
    <thead>
        <tr>
            <th>Cod.</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Bairro</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Cargo</th>
            <th>Data Início</th>
            <th>Ações</th>
            <th>Ações</th>
        </tr>
    </thead>   
</table>
</div>
@endsection