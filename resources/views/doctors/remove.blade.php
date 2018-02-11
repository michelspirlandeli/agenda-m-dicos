@extends('shared.base')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Remover consulta</div>
    <div class="panel-body">
        <form method="post" action="{{route ('doctors.destroy', $doctors->id)}}">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}         
            <div class="row">
                <div class="col-md-12">
                    <h4>Tem certeza que deseja remover a consulta?</h4>
                    <p>{{$doctors->id}}</p>
                    <p>{{$doctors->nome}}</p>
                    <p>{{$doctors->especialidades}}</p>
                    <p>{{$doctors->crm}}</p>
                    <p>{{$doctors->sexo}}</p>
                    <p>{{$doctors->datanasc}}</p>
                    <p>{{$doctors->estadocivil}}</p>
                    <p>{{$doctors->rg}}</p>
                    <p>{{$doctors->cpf}}</p>
                    <p>{{$doctors->telefone}}</p>
                    <p>{{$doctors->celular}}</p>
                    <p>{{$doctors->email}}</p>
                    <p>{{$doctors->rua}}</p>
                    <p>{{$doctors->numeroEndereco}}</p>
                    <p>{{$doctors->bairroEndereco}}</p>
                    <p>{{$doctors->complemento}}</p>
                    <p>{{$doctors->cep}}</p>
                    <p>{{$doctors->cidade}}</p>
                    <p>{{$doctors->contratacao}}</p>
                    <p>{{$doctors->datainicio}}</p>
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Deletar</button>
            <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
        </form>
    </div>
</div>
@endsection

