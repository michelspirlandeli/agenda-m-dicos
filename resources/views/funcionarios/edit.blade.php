@extends('shared.base')
@section('content')	
<div class="row">
    <div class="col-md-offset-1 col-md-10">
	   <div class="panel-primary class">
	       <div class="panel-heading"><h3>Cadastre o funcionário</h3></div>
	           <div class="panel-body">
            	<form method="post"	action="{{route ('funcionarios.update', $funcionarios->id)}}">
                    <input type="hidden" name="_method" value="PUT">
            		{{ csrf_field() }}
            		<h4>Dados Pessoais</h4>
            		<hr>
                    <div class="row">
                        <div class="col-md-12">
                    		<div class="form-group">
                    			<label for="nome">Nome</label>
                    			<input type="text" class="form-control" placeholder="Digite o nome" name="nome" required value="{{$funcionarios->nome}}">
                    		</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" class="form-control" placeholder="email" required name="email" value="{{$funcionarios->email}}">
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" placeholder="telefone" required name="telefone" value="{{$funcionarios->telefone}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <input type="text" class="form-control" placeholder="celular" required name="celular" value="{{$funcionarios->celular}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sexo">Sexo</label>
                                 <select class="form-control" name="sexo" value="{{$funcionarios->sexo}}">
                                    <option>Selecione</option>
                                    <option {{($funcionarios->sexo == 'M' ? 'selected' : '')}}>Masculino</option>
                                    <option {{($funcionarios->sexo == 'F' ? 'selected' : '')}}>Feminino</option>
                                 </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="datanasc">Data Nascimento</label>
                                <input type="date" class="form-control" placeholder="Data Nascimento" required name="datanasc" value="{{$funcionarios->datanasc}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="estadocivil">Estado Civil</label>
                                 <select class="form-control" name="estadocivil" value="{{$funcionarios->estadocivil}}">
                                    <option>Selecione</option>
                                    <option {{($funcionarios->estadocivil == '1' ? 'selected' : '')}}>Solteiro(a)</option>
                                    <option {{($funcionarios->estadocivil == '2' ? 'selected' : '')}}>Casado(a)</option>
                                    <option {{($funcionarios->estadocivil == '3' ? 'selected' : '')}}>Divorciado(a)</option>
                                    <option {{($funcionarios->estadocivil == '4' ? 'selected' : '')}}>Viuvo(a)</option>
                                 </select>
                            </div>
                        </div>
                    </div>
                    <h4>Endereço</h4>
                    <hr>
                    <div class="row">
                         <div class="col-md-10">
                            <div class="form-group">
                                <label for="rua">Rua</label>
                                <input type="text" class="form-control" placeholder="rua" required name="rua" value="{{$funcionarios->rua}}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="numero">Número</label>
                                <input type="text" class="form-control" placeholder="Número" required name="numeroEndereco" value="{{$funcionarios->numero}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bairroEndereco">Bairro</label>
                                <input type="text" class="form-control" placeholder="Bairro" required name="bairroEndereco" value="{{$funcionarios->bairroEndereco}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="complemento">Complemento</label>
                                <input type="text" class="form-control" placeholder="complemento"  name="complemento" value="{{$funcionarios->complemento}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" placeholder="cep" required name="cep" value="{{$funcionarios->cep}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" placeholder="Cidade" required name="cidade" value="{{$funcionarios->cidade}}">
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="uf">Estado</label>
                                 <select class="form-control" name="uf" value="{{$funcionarios->uf}}">
                                    <option {{($funcionarios->uf == 'ac' ? 'selected' : '')}}>Acre</option>
                                    <option {{($funcionarios->uf == 'al' ? 'selected' : '')}}>Alagoas</option>
                                    <option {{($funcionarios->uf == 'ap' ? 'selected' : '')}}>Amapá</option>
                                    <option {{($funcionarios->uf == 'am' ? 'selected' : '')}}>Amazonas</option>
                                    <option {{($funcionarios->uf == 'ba' ? 'selected' : '')}}>Bahia</option>
                                    <option {{($funcionarios->uf == 'ac' ? 'selected' : '')}}>Ceará</option>
                                    <option {{($funcionarios->df == 'al' ? 'selected' : '')}}>Distrito Federal</option>
                                    <option {{($funcionarios->uf == 'es' ? 'selected' : '')}}>Espirito Santo</option>
                                    <option {{($funcionarios->uf == 'go' ? 'selected' : '')}}>Goiás</option>
                                    <option {{($funcionarios->uf == 'ma' ? 'selected' : '')}}>Maranhão</option>
                                    <option {{($funcionarios->uf == 'ms' ? 'selected' : '')}}>Mato Grosso do Sul</option>
                                    <option {{($funcionarios->uf == 'mt' ? 'selected' : '')}}>Mato Grosso</option>
                                    <option {{($funcionarios->uf == 'mg' ? 'selected' : '')}}>Minas Gerais</option>
                                    <option {{($funcionarios->uf == 'pa' ? 'selected' : '')}}>Pará</option>
                                    <option {{($funcionarios->uf == 'pb' ? 'selected' : '')}}>Paraíba</option>
                                    <option {{($funcionarios->uf == 'pr' ? 'selected' : '')}}>Paraná</option>
                                    <option {{($funcionarios->uf == 'pe' ? 'selected' : '')}}>Pernambuco</option>
                                    <option {{($funcionarios->uf == 'pi' ? 'selected' : '')}}>Piauí</option>
                                    <option {{($funcionarios->uf == 'rj' ? 'selected' : '')}}>Rio de Janeiro</option>
                                    <option {{($funcionarios->uf == 'rn' ? 'selected' : '')}}>Rio Grande do Norte</option>
                                    <option {{($funcionarios->uf == 'rs' ? 'selected' : '')}}>Rio Grande do Sul</option>
                                    <option {{($funcionarios->uf == 'ro' ? 'selected' : '')}}>Rondônia</option>
                                    <option {{($funcionarios->uf == 'rr' ? 'selected' : '')}}>Roraima</option>
                                    <option {{($funcionarios->uf == 'sc' ? 'selected' : '')}}>Santa Catarina</option>
                                    <option {{($funcionarios->uf == 'sp' ? 'selected' : '')}}>São Paulo</option>
                                    <option {{($funcionarios->uf == 'se' ? 'selected' : '')}}>Sergipe</option>
                                    <option {{($funcionarios->uf == 'to' ? 'selected' : '')}}>Tocantins</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h4><b>Documentos</b></h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="rg">RG</label>
                                <input type="text" class="form-control" placeholder="rg" required name="rg" value="{{$funcionarios->rg}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="rgemissor">Org. Emissor</label>
                                <input type="text" class="form-control" placeholder="Org. Emissor" required name="rgemissor" value="{{$funcionarios->rgemissor}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="dataemissao">Data Emissão</label>
                                <input type="date" class="form-control" placeholder="Data Emissão" required name="dataemissao" value="{{$funcionarios->dataemissao}}">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="uf">UF</label>
                                <input type="text" class="form-control" placeholder="UF" required name="uf" value="{{$funcionarios->uf}}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" placeholder="cpf" required name="cpf" value="{{$funcionarios->cpf}}">
                            </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="numerocnh">Nº CNH</label>
                                <input type="text" class="form-control" placeholder="Nº CNH"  name="numerocnh" value="{{$funcionarios->numerocnh}}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="expedicaocnh">Data Exp. CNH</label>
                                <input type="date" class="form-control" placeholder="Data Exp. CNH"  name="expedicaocnh" value="{{$funcionarios->expedicaocnh}}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="validadecnh">Data Val. CNH</label>
                                <input type="date" class="form-control" placeholder="Data Val. CNH"  name="validadecnh" value="{{$funcionarios->validadecnh}}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="categoriacnh">Categoria CNH</label>
                                <input type="text" class="form-control" placeholder="Categoria CNH"  name="categoriacnh" value="{{$funcionarios->categoriacnh}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="numeroreservista">Nº Cert. Reservista</label>
                                <input type="text" class="form-control" placeholder="Nº Cert. Reservista" name="numeroreservista" value="{{$funcionarios->numeroreservista}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="carteiraprof">Nº Cart. Profissional</label>
                                <input type="text" class="form-control" placeholder="Nº Cart. Profissional" name="carteiraprof" value="{{$funcionarios->carteiraprof}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="expedicaocarteira">Dat. Exp. Cart. Prof.</label>
                                <input type="text" class="form-control" placeholder="Dat. Exp. Cart. Prof." name="expedicaocarteira" value="{{$funcionarios->expedicaocarteira}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="titulo">Nº Tit. Eleitor</label>
                                <input type="text" class="form-control" placeholder="Nº Tit. Eleitor" name="titulo" value="{{$funcionarios->titulo}}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="emissaotitulo">Dat. Emissão Tit. Eleitor</label>
                                <input type="text" class="form-control" placeholder="Dat. Emissão Tit. Eleitor" name="emissaotitulo" value="{{$funcionarios->emissaotitulo}}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="zonaeleitoral">Zona Eleitor</label>
                                <input type="text" class="form-control" placeholder="Zona Eleitor" name="zonaeleitoral" value="{{$funcionarios->zonaeleitoral}}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="secao">Seção Eleitor</label>
                                <input type="text" class="form-control" placeholder="Seção Eleitor" name="secao" value="{{$funcionarios->secao}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nacionalidade">Nacionalidade</label>
                                <input type="text" class="form-control" placeholder="Nacionalidade" name="nacionalidade" value="{{$funcionarios->nacionalidade}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ensino">Grau de Instrução</label>
                                <select class="form-control" name="ensino" value="{{$funcionarios->estadocivil}}">
                                    <option>Selecione</option>
                                    <option {{($funcionarios->estadocivil == 'em' ? 'selected' : '')}}>Ensino Médio</option>
                                    <option {{($funcionarios->estadocivil == 'nt' ? 'selected' : '')}}>Nível Técnico</option>
                                    <option {{($funcionarios->estadocivil == 'ns' ? 'selected' : '')}}>Nível Superior (cursando)</option>
                                    <option {{($funcionarios->estadocivil == 'nsc' ? 'selected' : '')}}>Nível Superior (completo) </option>
                                    <option {{($funcionarios->estadocivil == 'pg' ? 'selected' : '')}}>Pós Graduação</option>
                                 </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="numpis">Nº PIS</label>
                                <input type="text" class="form-control" placeholder="Nº PIS" name="numpis" value="{{$funcionarios->numpis}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="datapis">Dt. Cadast. PIS</label>
                                <input type="date" class="form-control" placeholder="Dt. Cadast. PIS"  name="datapis" value="{{$funcionarios->datapis}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="cargo">Cargo</label>
                                 <select class="form-control" name="cargo" value="{{$funcionarios->cargo}}">
                                    <option>Selecione</option>
                                    <option {{($funcionarios->cargo == '1' ? 'selected' : '')}}>Acupuntura</option>
                                    <option {{($funcionarios->cargo == '2' ? 'selected' : '')}}>Alergia</option>
                                    <option {{($funcionarios->cargo == '3' ? 'selected' : '')}}>Angiologia</option>
                                    <option {{($funcionarios->cargo == '4' ? 'selected' : '')}}>Cardiologia</option>
                                    <option {{($funcionarios->cargo == '5' ? 'selected' : '')}}>Clínico Geral</option>
                                    <option {{($funcionarios->cargo == '6' ? 'selected' : '')}}>Coloproctologia</option>
                                    <option {{($funcionarios->cargo == '7' ? 'selected' : '')}}>Dermatologia</option>
                                    <option {{($funcionarios->cargo == '8' ? 'selected' : '')}}>Endocrinologia</option>
                                    <option {{($funcionarios->cargo == '9' ? 'selected' : '')}}>Fisiatria</option>
                                    <option {{($funcionarios->cargo == '10' ? 'selected' : '')}}>Fisioterapia</option>
                                    <option {{($funcionarios->cargo == '11' ? 'selected' : '')}}>Fonoaudiologia</option>
                                    <option {{($funcionarios->cargo == '12' ? 'selected' : '')}}>Gastroenterologia</option>
                                    <option {{($funcionarios->cargo == '13' ? 'selected' : '')}}>Geriatria</option>
                                    <option {{($funcionarios->cargo == '14' ? 'selected' : '')}}>Ginecologia</option>
                                    <option {{($funcionarios->cargo == '15' ? 'selected' : '')}}>Hematologia</option>
                                    <option {{($funcionarios->cargo == '16' ? 'selected' : '')}}>Homeopatia</option>
                                    <option {{($funcionarios->cargo == '17' ? 'selected' : '')}}>Infectologia</option>
                                    <option {{($funcionarios->cargo == '18' ? 'selected' : '')}}>Nefrologia</option>
                                    <option {{($funcionarios->cargo == '19' ? 'selected' : '')}}>Neurologia</option>
                                    <option {{($funcionarios->cargo == '20' ? 'selected' : '')}}>Nutrição</option>
                                    <option {{($funcionarios->cargo == '21' ? 'selected' : '')}}>Nutrologia</option>
                                    <option {{($funcionarios->cargo == '22' ? 'selected' : '')}}>Odontologia</option>
                                    <option {{($funcionarios->cargo == '23' ? 'selected' : '')}}>Oftalmologia</option>
                                    <option {{($funcionarios->cargo == '24' ? 'selected' : '')}}>Oncologia</option>
                                    <option {{($funcionarios->cargo == '25' ? 'selected' : '')}}>Ortopedia e Traumatologia </option>
                                    <option {{($funcionarios->cargo == '26' ? 'selected' : '')}}>Otorrinolaringologia</option>
                                    <option {{($funcionarios->cargo == '27' ? 'selected' : '')}}>Pediatria</option>
                                    <option {{($funcionarios->cargo == '28' ? 'selected' : '')}}>Pneumologia</option>
                                    <option {{($funcionarios->cargo == '29' ? 'selected' : '')}}>Psicologia</option>
                                    <option {{($funcionarios->cargo == '30' ? 'selected' : '')}}>Pneumologia</option>
                                    <option {{($funcionarios->cargo == '31' ? 'selected' : '')}}>Psicopedagogia</option>
                                    <option {{($funcionarios->cargo == '32' ? 'selected' : '')}}>Psiquiatria</option>
                                    <option {{($funcionarios->cargo == '33' ? 'selected' : '')}}>Reumatologia</option>
                                    <option {{($funcionarios->cargo == '34' ? 'selected' : '')}}>Urologia</option>
                                 </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="dataadmissao">Data Admissão</label>
                                <input type="date" class="form-control" placeholder="Número"  name="dataadmissao" value="{{$funcionarios->dataadmissao}}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exameadmissao">Exame Admissão</label>
                                 <select class="form-control" name="exameadmissao" value="{{$funcionarios->exameadmissao}}">
                                    <option>Selecione</option>
                                    <option {{($funcionarios->exameadmissao == 'Sim' ? 'selected' : '')}}>Sim</option>
                                    <option {{($funcionarios->exameadmissao == 'Não' ? 'selected' : '')}}>Não</option>
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