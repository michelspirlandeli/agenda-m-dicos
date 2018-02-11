@extends('shared.base')
@section('content')
<div class="row">
    <div class="col-md-offset-1 col-md-10">
	   <div class="panel-primary class">
		  <div class="panel-heading"><h3>Cadastre o Paciente</h3></div>
		  <div class="panel-body">
        	<form method="post"	action="{{route ('pacientes.update', $pacientes->id)}}">
                <input type="hidden" name="_method" value="PUT">
        		{{ csrf_field() }}
        		<h4>Dados Pessoais</h4><hr>
                <div class="row">
                    <div class="col-md-12">
                		<div class="form-group">
                			<label for="nome">Paciente</label>
                			<input type="text" class="form-control" placeholder="Digite o nome" name="nome" required value="{{$pacientes->nome}}">
                		</div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="idade">Idade</label>
                            <input type="text" class="form-control" placeholder="Idade" required name="idade" value="{{$pacientes->idade}}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                              <select class="form-control" name="sexo" value="{{$pacientes->sexo}}">
                                <option>Selecione</option>
                                <option {{($pacientes->sexo == 'M' ? 'selected' : '')}}>Masculino</option>
                                <option {{($pacientes->sexo == 'F' ? 'selected' : '')}}>Feminino</option>
                             </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="datanasc">Data Nascimento</label>
                            <input type="date" class="form-control" placeholder="Data Nascimento" required name="datanasc" value="{{$pacientes->date}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="estadocivil">Estado Civil</label>
                             <select class="form-control" name="estadocivil" value="{{$pacientes->estadocivil}}">
                                <option>Selecione</option>
                                <option {{($pacientes->estadocivil == '1' ? 'selected' : '')}}>Solteiro(a)</option>
                                <option {{($pacientes->estadocivil == '2' ? 'selected' : '')}}>Casado(a)</option>
                                <option {{($pacientes->estadocivil == '3' ? 'selected' : '')}}>Divorciado(a)</option>
                                <option {{($pacientes->estadocivil == '4' ? 'selected' : '')}}>Viuvo(a)</option>
                             </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="rg">RG</label>
                            <input type="text" class="form-control" placeholder="rg" required name="rg" value="{{$pacientes->rg}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" placeholder="cpf" required name="cpf" value="{{$pacientes->cpf}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" placeholder="telefone" required name="telefone" value="{{$pacientes->telefone}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="text" class="form-control" placeholder="celular" required name="celular" value="{{$pacientes->celular}}">
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" placeholder="email" required name="email" value="{{$pacientes->email}}">
                        </div>
                    </div>
                </div>
                <h4>Endereço</h4><hr>
                <div class="row">
                     <div class="col-md-10">
                        <div class="form-group">
                            <label for="rua">Rua</label>
                            <input type="text" class="form-control" placeholder="rua" required name="rua" value="{{$pacientes->rua}}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" placeholder="Número" required name="numero" value="{{$pacientes->numero}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bairroEndereco">Bairro</label>
                            <input type="text" class="form-control" placeholder="Bairro" required name="bairroEndereco" value="{{$pacientes->bairroEndereco}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="complemento">Complemento</label>
                            <input type="text" class="form-control" placeholder="complemento" required name="complemento" value="{{$pacientes->complemento}}">
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" placeholder="cep" required name="cep" value="{{$pacientes->cep}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" placeholder="Cidade" required name="cidade" value="{{$pacientes->cidade}}">
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="form-group">
                            <label for="uf">Estado</label>
                            <select class="form-control" name="uf" value="{{$pacientes->uf}}">
                                <option {{($pacientes->uf == 'ac' ? 'selected' : '')}}>Acre</option>
                                <option {{($pacientes->uf == 'al' ? 'selected' : '')}}>Alagoas</option>
                                <option {{($pacientes->uf == 'ap' ? 'selected' : '')}}>Amapá</option>
                                <option {{($pacientes->uf == 'am' ? 'selected' : '')}}>Amazonas</option>
                                <option {{($pacientes->uf == 'ba' ? 'selected' : '')}}>Bahia</option>
                                <option {{($pacientes->uf == 'ac' ? 'selected' : '')}}>Ceará</option>
                                <option {{($pacientes->df == 'al' ? 'selected' : '')}}>Distrito Federal</option>
                                <option {{($pacientes->uf == 'es' ? 'selected' : '')}}>Espirito Santo</option>
                                <option {{($pacientes->uf == 'go' ? 'selected' : '')}}>Goiás</option>
                                <option {{($pacientes->uf == 'ma' ? 'selected' : '')}}>Maranhão</option>
                                <option {{($pacientes->uf == 'ms' ? 'selected' : '')}}>Mato Grosso do Sul</option>
                                <option {{($pacientes->uf == 'mt' ? 'selected' : '')}}>Mato Grosso</option>
                                <option {{($pacientes->uf == 'mg' ? 'selected' : '')}}>Minas Gerais</option>
                                <option {{($pacientes->uf == 'pa' ? 'selected' : '')}}>Pará</option>
                                <option {{($pacientes->uf == 'pb' ? 'selected' : '')}}>Paraíba</option>
                                <option {{($pacientes->uf == 'pr' ? 'selected' : '')}}>Paraná</option>
                                <option {{($pacientes->uf == 'pe' ? 'selected' : '')}}>Pernambuco</option>
                                <option {{($pacientes->uf == 'pi' ? 'selected' : '')}}>Piauí</option>
                                <option {{($pacientes->uf == 'rj' ? 'selected' : '')}}>Rio de Janeiro</option>
                                <option {{($pacientes->uf == 'rn' ? 'selected' : '')}}>Rio Grande do Norte</option>
                                <option {{($pacientes->uf == 'rs' ? 'selected' : '')}}>Rio Grande do Sul</option>
                                <option {{($pacientes->uf == 'ro' ? 'selected' : '')}}>Rondônia</option>
                                <option {{($pacientes->uf == 'rr' ? 'selected' : '')}}>Roraima</option>
                                <option {{($pacientes->uf == 'sc' ? 'selected' : '')}}>Santa Catarina</option>
                                <option {{($pacientes->uf == 'sp' ? 'selected' : '')}}>São Paulo</option>
                                <option {{($pacientes->uf == 'se' ? 'selected' : '')}}>Sergipe</option>
                                <option {{($pacientes->uf == 'to' ? 'selected' : '')}}>Tocantins</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h4>Dados Profissional</h4><hr>

                <div class="row">
                     <div class="col-md-8">
                            <div class="form-group">
                                <label for="cargo">Cargo</label>
                                 <select class="form-control" name="cargo" value="{{$pacientes->cargo}}">
                                    <option>Selecione</option>
                                    <option {{($pacientes->cargo == '1' ? 'selected' : '')}}>Acupuntura</option>
                                    <option {{($pacientes->cargo == '2' ? 'selected' : '')}}>Alergia</option>
                                    <option {{($pacientes->cargo == '3' ? 'selected' : '')}}>Angiologia</option>
                                    <option {{($pacientes->cargo == '4' ? 'selected' : '')}}>Cardiologia</option>
                                    <option {{($pacientes->cargo == '5' ? 'selected' : '')}}>Clínico Geral</option>
                                    <option {{($pacientes->cargo == '6' ? 'selected' : '')}}>Coloproctologia</option>
                                    <option {{($pacientes->cargo == '7' ? 'selected' : '')}}>Dermatologia</option>
                                    <option {{($pacientes->cargo == '8' ? 'selected' : '')}}>Endocrinologia</option>
                                    <option {{($pacientes->cargo == '9' ? 'selected' : '')}}>Fisiatria</option>
                                    <option {{($pacientes->cargo == '10' ? 'selected' : '')}}>Fisioterapia</option>
                                    <option {{($pacientes->cargo == '11' ? 'selected' : '')}}>Fonoaudiologia</option>
                                    <option {{($pacientes->cargo == '12' ? 'selected' : '')}}>Gastroenterologia</option>
                                    <option {{($pacientes->cargo == '13' ? 'selected' : '')}}>Geriatria</option>
                                    <option {{($pacientes->cargo == '14' ? 'selected' : '')}}>Ginecologia</option>
                                    <option {{($pacientes->cargo == '15' ? 'selected' : '')}}>Hematologia</option>
                                    <option {{($pacientes->cargo == '16' ? 'selected' : '')}}>Homeopatia</option>
                                    <option {{($pacientes->cargo == '17' ? 'selected' : '')}}>Infectologia</option>
                                    <option {{($pacientes->cargo == '18' ? 'selected' : '')}}>Nefrologia</option>
                                    <option {{($pacientes->cargo == '19' ? 'selected' : '')}}>Neurologia</option>
                                    <option {{($pacientes->cargo == '20' ? 'selected' : '')}}>Nutrição</option>
                                    <option {{($pacientes->cargo == '21' ? 'selected' : '')}}>Nutrologia</option>
                                    <option {{($pacientes->cargo == '22' ? 'selected' : '')}}>Odontologia</option>
                                    <option {{($pacientes->cargo == '23' ? 'selected' : '')}}>Oftalmologia</option>
                                    <option {{($pacientes->cargo == '24' ? 'selected' : '')}}>Oncologia</option>
                                    <option {{($pacientes->cargo == '25' ? 'selected' : '')}}>Ortopedia e Traumatologia </option>
                                    <option {{($pacientes->cargo == '26' ? 'selected' : '')}}>Otorrinolaringologia</option>
                                    <option {{($pacientes->cargo == '27' ? 'selected' : '')}}>Pediatria</option>
                                    <option {{($pacientes->cargo == '28' ? 'selected' : '')}}>Pneumologia</option>
                                    <option {{($pacientes->cargo == '29' ? 'selected' : '')}}>Psicologia</option>
                                    <option {{($pacientes->cargo == '30' ? 'selected' : '')}}>Pneumologia</option>
                                    <option {{($pacientes->cargo == '31' ? 'selected' : '')}}>Psicopedagogia</option>
                                    <option {{($pacientes->cargo == '32' ? 'selected' : '')}}>Psiquiatria</option>
                                    <option {{($pacientes->cargo == '33' ? 'selected' : '')}}>Reumatologia</option>
                                    <option {{($pacientes->cargo == '34' ? 'selected' : '')}}>Urologia</option>
                                 </select>
                            </div>
                        </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="datainicio">Data Início</label>
                            <input type="date" class="form-control" placeholder="Data Início" required name="datainicio" value="{{$pacientes->datainicio}}">
                        </div>
                    </div>
                </div>

                <h4>Dados Convênio</h4><hr>
                <div class="row">
                     <div class="col-md-8">
                        <div class="form-group">
                            <label for="convenio">Tipo de Convênio</label>
                             <select class="form-control" name="convenio" value="{{$pacientes->convenio}}">
                                <option>Selecione</option>
                                <option {{($pacientes->convenio == 'Interno' ? 'selected' : '')}}>Interno</option>
                                <option {{($pacientes->convenio == 'Externo' ? 'selected' : '')}}>Externo</option>
                             </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="numeroconvenio">Nº Carteira Convênio</label>
                            <input type="text" class="form-control" placeholder="Nº Carteira Convênio" required name="numeroconvenio" value="{{$pacientes->numeroconvenio}}">
                        </div>
                    </div>
                </div>
                <h4>Outros</h4><hr>
                 <div class="row">
                     <div class="col-md-8">
                        <div class="form-group">
                            <label for="nomepai">Pai</label>
                            <input type="text" class="form-control" placeholder="Nome do pai" required name="nomepai" value="{{$pacientes->nomepai}}"> 
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="datanascpai">Data Nasc.</label>
                            <input type="date" class="form-control" placeholder="Data Nasc." required name="datanascpai" value="{{$pacientes->datanascpai}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-8">
                        <div class="form-group">
                            <label for="nomemae">Mãe</label>
                            <input type="text" class="form-control" placeholder="Mãe" required name="nomemae" value="{{$pacientes->nomemae}}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="datanascmae">Data Nasc.</label>
                            <input type="date" class="form-control" placeholder="Data Nasc." required name="datanascmae" value="{{$pacientes->datanascmae}}">
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