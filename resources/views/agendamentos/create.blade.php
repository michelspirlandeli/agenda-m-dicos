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
    <div class="container">

	   <div class="panel-primary class">
	       <div class="panel-heading"><h3>Agendamentos</h3></div>
	       <div class="panel-body">
        	<form method="post"	action="{{route('agendamentos.store')}}">
        		{{ csrf_field() }}
        		<h4>Agendamento de consultas</h4>
        		<hr>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="paciente">Selecione o Paciente</label>
                            <select class="form-control" name="pacientes_id" required>
                                @foreach($pacientes as $pacientes)
                                    <option value="">Selecione</option>
                                    <option value="{{$pacientes->id}}">{{$pacientes->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" placeholder="Digite o cpf" name="cpf" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="medico">Selecione o Médico</label>
                             <select class="form-control" name="doctors_id" required>
                                @foreach($doctors as $doctors)
                                    <option value="">Selecione</option>
                                    <option value="{{$doctors->id}}">{{$doctors->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="dataconsulta">Data da Consulta</label>
                            <input type="date" class="form-control" placeholder="Data da Consulta" required name="dataconsulta">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="horario">Horario da Consulta</label>
                            <input type="time" class="form-control" placeholder="Horario da Consulta" required name="horario">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="control-label" for="status">Status</label>
                            <select class="form-control" name="status">
                                <option value="">Selecione</option>
                                <option value="Confirmada">Confirmada</option>
                                <option value="Não compareceu">Não compareceu</option>
                                <option value="Desmarcada">Desmarcada</option>
                                <option value="Remarcada">Remarcada</option>
                            </select>
                        </div>
                    </div>
                </div>

                <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
        	</form>
	  </div>
	</div>
   </div>
</div>
@endsection