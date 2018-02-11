@extends('shared.base')
@section('content')
<div class="row">
    <div class="col-md-offset-1 col-md-10">
	   <div class="panel-primary class">
	       <div class="panel-heading"><h3>Cadastre o Médico</h3></div>
	       <div class="panel-body">
	       <form method="post"	action="{{route ('doctors.update', $doctors->id)}}" role="form">
           <input type="hidden" name="_method" value="PUT">
		   {{ csrf_field() }}
		   <h4>Dados Pessoais</h4><hr>
    	   <div class="form-group">
    			<label for="nome">Nome do Médico</label>
    			<input type="text" class="form-control" placeholder="Digite o nome" name="nome" required value="{{$doctors->nome}}">
    	   </div>
        		<div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="especialidades">Especialidades</label>
                              <select class="form-control" name="especialidades" value="{{$doctors->especialidades}}">
                                <option>Selecione</option>
                                <option {{($doctors->especialidades == '1' ? 'selected' : '')}}>Acupuntura</option>
                                <option {{($doctors->especialidades == '2' ? 'selected' : '')}}>Alergia</option>
                                <option {{($doctors->especialidades == '3' ? 'selected' : '')}}>Angiologia</option>
                                <option {{($doctors->especialidades == '4' ? 'selected' : '')}}>Cardiologia</option>
                                <option {{($doctors->especialidades == '5' ? 'selected' : '')}}>Clínico Geral</option>
                                <option {{($doctors->especialidades == '6' ? 'selected' : '')}}>Coloproctologia</option>
                                <option {{($doctors->especialidades == '7' ? 'selected' : '')}}>Dermatologia</option>
                                <option {{($doctors->especialidades == '8' ? 'selected' : '')}}>Endocrinologia</option>
                                <option {{($doctors->especialidades == '9' ? 'selected' : '')}}>Fisiatria</option>
                                <option {{($doctors->especialidades == '10' ? 'selected' : '')}}>Fisioterapia</option>
                                <option {{($doctors->especialidades == '11' ? 'selected' : '')}}>Fonoaudiologia</option>
                                <option {{($doctors->especialidades == '12' ? 'selected' : '')}}>Gastroenterologia</option>
                                <option {{($doctors->especialidades == '13' ? 'selected' : '')}}>Geriatria</option>
                                <option {{($doctors->especialidades == '14' ? 'selected' : '')}}>Ginecologia</option>
                                <option {{($doctors->especialidades == '15' ? 'selected' : '')}}>Hematologia</option>
                                <option {{($doctors->especialidades == '16' ? 'selected' : '')}}>Homeopatia</option>
                                <option {{($doctors->especialidades == '17' ? 'selected' : '')}}>Infectologia</option>
                                <option {{($doctors->especialidades == '18' ? 'selected' : '')}}>Nefrologia</option>
                                <option {{($doctors->especialidades == '19' ? 'selected' : '')}}>Neurologia</option>
                                <option {{($doctors->especialidades == '20' ? 'selected' : '')}}>Nutrição</option>
                                <option {{($doctors->especialidades == '21' ? 'selected' : '')}}>Nutrologia</option>
                                <option {{($doctors->especialidades == '22' ? 'selected' : '')}}>Odontologia</option>
                                <option {{($doctors->especialidades == '23' ? 'selected' : '')}}>Oftalmologia</option>
                                <option {{($doctors->especialidades == '24' ? 'selected' : '')}}>Oncologia</option>
                                <option {{($doctors->especialidades == '25' ? 'selected' : '')}}>Ortopedia e Traumatologia </option>
                                <option {{($doctors->especialidades == '26' ? 'selected' : '')}}>Otorrinolaringologia</option>
                                <option {{($doctors->especialidades == '27' ? 'selected' : '')}}>Pediatria</option>
                                <option {{($doctors->especialidades == '28' ? 'selected' : '')}}>Pneumologia</option>
                                <option {{($doctors->especialidades == '29' ? 'selected' : '')}}>Psicologia</option>
                                <option {{($doctors->especialidades == '30' ? 'selected' : '')}}>Pneumologia</option>
                                <option {{($doctors->especialidades == '31' ? 'selected' : '')}}>Psicopedagogia</option>
                                <option {{($doctors->especialidades == '32' ? 'selected' : '')}}>Psiquiatria</option>
                                <option {{($doctors->especialidades == '33' ? 'selected' : '')}}>Reumatologia</option>
                                <option {{($doctors->especialidades == '34' ? 'selected' : '')}}>Urologia</option>
                             </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="crm">CRM</label>
                            <input type="text" class="form-control" placeholder="crm" required name="crm" value="{{$doctors->crm}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                             <select class="form-control" name="sexo" value="{{$doctors->sexo}}">
                                <option>Selecione</option>
                                <option {{($doctors->sexo == 'M' ? 'selected' : '')}}>Masculino</option>
                                <option {{($doctors->sexo == 'F' ? 'selected' : '')}}>Feminino</option>
                             </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="datanasc">Data Nascimento</label>
                            <input type="date" class="form-control" placeholder="" required name="datanasc" value="{{$doctors->datanasc}}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="estadocivil">Estado Civil</label>
                            <select class="form-control" name="sexo" value="{{$doctors->estadocivil}}">
                                <option>Selecione</option>
                                <option {{($doctors->estadocivil == '1' ? 'selected' : '')}}>Solteiro(a)</option>
                                <option {{($doctors->estadocivil == '2' ? 'selected' : '')}}>Casado(a)</option>
                                <option {{($doctors->estadocivil == '3' ? 'selected' : '')}}>Divorciado(a)</option>
                                <option {{($doctors->estadocivil == '4' ? 'selected' : '')}}>Viuvo(a)</option>
                             </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="rg">RG</label>
                            <input type="text" class="form-control" placeholder="rg" required name="rg" value="{{$doctors->rg}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" placeholder="cpf" required name="cpf" value="{{$doctors->cpf}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" placeholder="telefone" required name="telefone" value="{{$doctors->telefone}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="text" class="form-control" placeholder="celular" required name="celular" value="{{$doctors->celular}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" placeholder="email" required name="email" value="{{$doctors->email}}">
                        </div>
                    </div>
                </div>
                <h4>Endereço</h4><hr>
        		<div class="row">
        			 <div class="col-md-10">
                        <div class="form-group">
                            <label for="rua">Rua</label>
                            <input type="text" class="form-control" placeholder="rua" required name="rua" value="{{$doctors->rua}}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="numeroEndereco">Número</label>
                            <input type="text" class="form-control" placeholder="Número" required name="numeroEndereco" value="{{$doctors->numeroEndereco}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bairroEndereco">Bairro</label>
                            <input type="text" class="form-control" placeholder="Bairro" required name="bairroEndereco" value="{{$doctors->bairroEndereco}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="complemento">Complemento</label>
                            <input type="text" class="form-control" placeholder="complemento" required name="complemento" value="{{$doctors->complemento}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" placeholder="cep" required name="cep" value="{{$doctors->cep}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" placeholder="Cidade" required name="cidade" value="{{$doctors->cidade}}">
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="form-group">
                            <label for="uf">Estado</label>
                             <select class="form-control" name="uf" value="{{$doctors->uf}}">
                                <option {{($doctors->uf == 'ac' ? 'selected' : '')}}>Acre</option>
                                <option {{($doctors->uf == 'al' ? 'selected' : '')}}>Alagoas</option>
                                <option {{($doctors->uf == 'ap' ? 'selected' : '')}}>Amapá</option>
                                <option {{($doctors->uf == 'am' ? 'selected' : '')}}>Amazonas</option>
                                <option {{($doctors->uf == 'ba' ? 'selected' : '')}}>Bahia</option>
                                <option {{($doctors->uf == 'ac' ? 'selected' : '')}}>Ceará</option>
                                <option {{($doctors->df == 'al' ? 'selected' : '')}}>Distrito Federal</option>
                                <option {{($doctors->uf == 'es' ? 'selected' : '')}}>Espirito Santo</option>
                                <option {{($doctors->uf == 'go' ? 'selected' : '')}}>Goiás</option>
                                <option {{($doctors->uf == 'ma' ? 'selected' : '')}}>Maranhão</option>
                                <option {{($doctors->uf == 'ms' ? 'selected' : '')}}>Mato Grosso do Sul</option>
                                <option {{($doctors->uf == 'mt' ? 'selected' : '')}}>Mato Grosso</option>
                                <option {{($doctors->uf == 'mg' ? 'selected' : '')}}>Minas Gerais</option>
                                <option {{($doctors->uf == 'pa' ? 'selected' : '')}}>Pará</option>
                                <option {{($doctors->uf == 'pb' ? 'selected' : '')}}>Paraíba</option>
                                <option {{($doctors->uf == 'pr' ? 'selected' : '')}}>Paraná</option>
                                <option {{($doctors->uf == 'pe' ? 'selected' : '')}}>Pernambuco</option>
                                <option {{($doctors->uf == 'pi' ? 'selected' : '')}}>Piauí</option>
                                <option {{($doctors->uf == 'rj' ? 'selected' : '')}}>Rio de Janeiro</option>
                                <option {{($doctors->uf == 'rn' ? 'selected' : '')}}>Rio Grande do Norte</option>
                                <option {{($doctors->uf == 'rs' ? 'selected' : '')}}>Rio Grande do Sul</option>
                                <option {{($doctors->uf == 'ro' ? 'selected' : '')}}>Rondônia</option>
                                <option {{($doctors->uf == 'rr' ? 'selected' : '')}}>Roraima</option>
                                <option {{($doctors->uf == 'sc' ? 'selected' : '')}}>Santa Catarina</option>
                                <option {{($doctors->uf == 'sp' ? 'selected' : '')}}>São Paulo</option>
                                <option {{($doctors->uf == 'se' ? 'selected' : '')}}>Sergipe</option>
                                <option {{($doctors->uf == 'to' ? 'selected' : '')}}>Tocantins</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h4>Dados Profissional</h4><hr>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="contratacao">Tipo de Contratação</label>
                            <select class="form-control" name="contratacao" value="{{$doctors->contratacao}}">
                                <option {{($doctors->contratacao == '1' ? 'selected' : '')}}>CLT</option>
                                <option {{($doctors->contratacaocontratacao == '2' ? 'selected' : '')}}>Profissional Liberal</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="datainicio">Data Início</label>
                            <input type="date" class="form-control" placeholder="" required name="datainicio" value="{{$doctors->datainicio}}">
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