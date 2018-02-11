@extends('shared.base')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Remover consulta</div>
    <div class="panel-body">
        <form method="post" action="{{route ('agendamentos.destroy', $agendamentos->id)}}">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}         
            <div class="row">
                <div class="col-md-12">
                    <h4>Tem certeza que deseja remover a consulta?</h4>
                    <p>{{$agendamentos->paciente}}</p>
                    <p>{{$agendamentos->cpf}}</p>
                    <p>{{$agendamentos->medico}}</p>
                    <p>{{$agendamentos->dataconsulta}}</p>
                    <p>{{$agendamentos->horario}}</p>
                    <p>{{$agendamentos->status}}</p>
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Deletar</button>
            <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
        </form>
    </div>
</div>
@endsection