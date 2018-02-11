@extends('shared.base')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Remover consulta</div>
    <div class="panel-body">
        <form method="post" action="{{route ('funcionarios.destroy', $funcionarios->id)}}">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}         
            <div class="row">
                <div class="col-md-12">
                    <h4>Tem certeza que deseja remover a consulta?</h4>
                    <p>{{$funcionarios->id}}</p>
                    <p>{{$funcionarios->nome}}</p>
                    <p>{{$funcionarios->telefone}}</p>
                    <p>{{$funcionarios->celular}}</p>
                    <p>{{$funcionarios->email}}</p>
                    <p>{{$funcionarios->rua}}</p>
                    <p>{{$funcionarios->numero}}</p>
                    <p>{{$funcionarios->bairroEndereco}}</p>
                    <p>{{$funcionarios->complemento}}</p>
                    <p>{{$funcionarios->cep}}</p>
                    <p>{{$funcionarios->cidade}}</p>
                    <p>{{$funcionarios->uf}}</p>
                    <p>{{$funcionarios->sexo}}</p>
                    <p>{{$funcionarios->datanasc}}</p>
                    <p>{{$funcionarios->estadocivil}}</p>
                    <p>{{$funcionarios->rg}}</p>
                    <p>{{$funcionarios->rgemissor}}</p>
                    <p>{{$funcionarios->dataemissao}}</p>
                    <p>{{$funcionarios->uf}}</p>
                    <p>{{$funcionarios->cpf}}</p>
                    <p>{{$funcionarios->numerocnh}}</p>
                    <p>{{$funcionarios->expedicaocnh}}</p>
                    <p>{{$funcionarios->validadecnh}}</p>
                    <p>{{$funcionarios->categoriacnh}}</p>
                    <p>{{$funcionarios->numeroreservista}}</p>
                    <p>{{$funcionarios->carteiraprof}}</p>
                    <p>{{$funcionarios->expedicaocarteira}}</p>
                    <p>{{$funcionarios->titulo}}</p>
                    <p>{{$funcionarios->emissaotitulo}}</p>
                    <p>{{$funcionarios->zonaeleitoral}}</p>
                    <p>{{$funcionarios->secao}}</p>
                    <p>{{$funcionarios->nacionalidade}}</p>
                    <p>{{$funcionarios->ensino}}</p>
                    <p>{{$funcionarios->numpis}}</p>
                    <p>{{$funcionarios->datapis}}</p>
                    <p>{{$funcionarios->cargo}}</p>
                    <p>{{$funcionarios->dataadmissao}}</p>
                    <p>{{$funcionarios->exameadmissao}}</p>
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Deletar</button>
            <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
        </form>
    </div>
</div>
@endsection
