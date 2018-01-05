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
   <tbody>            
    @foreach($doctors as $doctors)
        <tr>
            <td>{{$doctors->id}}</td>
            <td>{{$doctors->nome}}</td>
            <td>{{$doctors->especialidades}}</td>
            <td>{{$doctors->crm}}</td>
            <td>{{$doctors->telefone}}</td>
            <td>{{$doctors->celular}}</td>
            <td>{{$doctors->contratacao}}</td>
            <td>{{$doctors->datainicio}}</td>
            <td>
                <a href="{{route('doctors.edit', $doctors->id)}}" class="btn btn-warning">Editar</a>
                          
            </td> 
            <td>
                <a href="#" class="btn btn-danger">Deletar</a>   
            </td>                               
        </tr>                         
    @endforeach             
</table>
</div>

@endsection