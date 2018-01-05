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
    <tbody>            
    @foreach($funcionarios as $funcionarios)
        <tr>
            <td>{{$funcionarios->id}}</td>
            <td>{{$funcionarios->nome}}</td>
            <td>{{$funcionarios->cpf}}</td>
            <td>{{$funcionarios->rua}}</td>
            <td>{{$funcionarios->numero}}</td>
            <td>{{$funcionarios->bairroEndereco}}</td>
            <td>{{$funcionarios->telefone}}</td>
            <td>{{$funcionarios->celular}}</td>
            <td>{{$funcionarios->cargo}}</td>
            <td>{{$funcionarios->dataadmissao}}</td>
            <td>
                <a href="{{route('funcionarios.edit', $funcionarios->id)}}" class="btn btn-warning">Editar</a>                      
            </td> 
            <td>
                <a href="#" class="btn btn-danger">Deletar</a>   
            </td>                               
        </tr>                         
    @endforeach        
</table>
</div>
@endsection