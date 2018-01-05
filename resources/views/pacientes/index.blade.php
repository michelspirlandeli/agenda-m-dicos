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
    <tbody>            
    @foreach($pacientes as $pacientes)
        <tr>
            <td>{{$pacientes->id}}</td>
            <td>{{$pacientes->nome}}</td>
            <td>{{$pacientes->email}}</td>
            <td>{{$pacientes->idade}}</td>
            <td>{{$pacientes->sexo}}</td>
            <td>{{$pacientes->telefone}}</td>
            <td>{{$pacientes->celular}}</td>
            <td>{{$pacientes->convenio}}</td>
            <td>{{$pacientes->numeroconvenio}}</td>
            <td>
                <a href="{{route('pacientes.edit', $pacientes->id)}}" class="btn btn-warning">Editar</a>
                          
            </td> 
            <td>
                <a href="#" class="btn btn-danger">Deletar</a>   
            </td>                               
        </tr>                         
    @endforeach        
</table>
</div>

@endsection