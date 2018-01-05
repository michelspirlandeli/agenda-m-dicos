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
    <tbody>            
    @foreach($agendamentos as $agendamentos)
        <tr>
            <td>{{$agendamentos->id}}</td>
            <td>{{$agendamentos->paciente}}</td>
            <td>{{$agendamentos->cpf}}</td>
            <td>{{$agendamentos->medico}}</td>
            <td>{{$agendamentos->dataconsulta}}</td>
            <td>{{$agendamentos->horario}}</td>
            <td>{{$agendamentos->status}}</td>
            <td>
                <a href="{{route('agendamentos.edit', $agendamentos->id)}}" class="btn btn-warning">Editar</a>
                          
            </td> 
            <td>
                <a href="{{route('agendamentos.remove', $agendamentos->id)}}" class="btn btn-danger">Deletar</a>   
            </td>                               
        </tr>                         
    @endforeach                                
</tbody>
   
</table>
</div>

@endsection