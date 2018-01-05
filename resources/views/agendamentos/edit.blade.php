@extends('shared.base')
@section('content')
	 @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
    <div class="row">
    <div class="col-md-offset-1 col-md-10">
	<div class="panel-primary class">

	<div class="panel-heading"><h3>Agendamentos</h3></div>
	<div class="panel-body">

	<form method="post"	action="{{route ('agendamentos.update', $agendamentos->id)}}">
        <input type="hidden" name="_method" value="PUT">
		{{ csrf_field() }}
		<h4>Editar as consultas</h4>
		<hr>
        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="paciente">Paciente</label>
                    <input type="text" class="form-control" placeholder="Digite o nome do paciente" name="paciente" required value="{{$agendamentos->paciente}}">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" placeholder="Digite o cpf" name="cpf" required value="{{$agendamentos->cpf}}">
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="medico">Médico</label>
                    <select name="medico" id="uf" class="form-control" required>
                        <option>Selecione</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="dataconsulta">Data da Consulta</label>
                    <input type="text" class="form-control" placeholder="" required name="dataconsulta" value="{{$agendamentos->dataconsulta}}">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="horario">Horario da Consulta</label>
                    <input type="text" class="form-control" placeholder="" required name="horario" value="{{$agendamentos->horario}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label class="control-label" for="status">Status</label>
                    <select class="form-control" name="status" value="{{$agendamentos->status}}">
                        <option {{($agendamentos->dataconsulta == 'confirmada' ? 'selected' : '')}}>Confirmada</option>
                        <option {{($agendamentos->dataconsulta == 'não compareceu' ? 'selected' : '')}}>Não compareceu</option>
                        <option {{($agendamentos->dataconsulta == 'desmarcada' ? 'selected' : '')}}>Desmarcada</option>
                        <option {{($agendamentos->dataconsulta == 'remarcada' ? 'selected' : '')}}>Remarcada</option>
                    </select>
                </div>
            </div>
        </div>
        
        <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
        <button type="submit" class="btn btn-primary">Editar</button>
	</form>
	  </div>
	</div>
   </div>
</div>
@endsection