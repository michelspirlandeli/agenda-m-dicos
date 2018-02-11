@extends('shared.base')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Remover consulta</div>
    <div class="panel-body">
        <form method="post" action="{{route ('pacientes.destroy', $pacientes->id)}}">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}         
            <div class="row">
                <div class="col-md-12">
                    <h4>Tem certeza que deseja remover a consulta?</h4>
                    <p>{{$pacientes->id}}</p>
                    <p>{{$pacientes->nome}}</p>
                    <p>{{$pacientes->idade}}</p>
                    <p>{{$pacientes->sexo}}</p>
                    <p>{{$pacientes->datanasc}}</p>
                    <p>{{$pacientes->estadocivil}}</p>
                    <p>{{$pacientes->rg}}</p>
                    <p>{{$pacientes->cpf}}</p>
                    <p>{{$pacientes->telefone}}</p>
                    <p>{{$pacientes->celular}}</p>
                    <p>{{$pacientes->email}}</p>
                    <p>{{$pacientes->rua}}</p>
                    <p>{{$pacientes->numero}}</p>
                    <p>{{$pacientes->bairroEndereco}}</p>
                    <p>{{$pacientes->complemento}}</p>
                    <p>{{$pacientes->cep}}</p>
                    <p>{{$pacientes->cidade}}</p>
                    <p>{{$pacientes->datainicio}}</p>
                    <p>{{$pacientes->convenio}}</p>
                    <p>{{$pacientes->numeroconvenio}}</p>
                    <p>{{$pacientes->nomepai}}</p>
                    <p>{{$pacientes->datanascpai}}</p>
                    <p>{{$pacientes->nomemae}}</p>
                    <p>{{$pacientes->datanascmae}}</p>
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Deletar</button>
            <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
        </form>
    </div>
</div>
@endsection
