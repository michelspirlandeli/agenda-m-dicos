@extends('shared.base')
@section('content')
<div class="row">
    <div class="container">
	   <div class="panel-primary class">
	       <div class="panel-heading"><h3>Cadastre o funcionário</h3></div>
	        <div class="panel-body">
        	<form method="post"	action="{{route('funcionarios.store')}}">
        		{{ csrf_field() }}
        		<h4>Dados Pessoais</h4>
        		<hr>
                <div class="row">
                    <div class="col-md-12">
                		<div class="form-group">
                			<label for="nome">Nome</label>
                			<input type="text" class="form-control" placeholder="Digite o nome" name="nome" required>
                		</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" placeholder="email" required name="email">
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" placeholder="telefone" required name="telefone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="text" class="form-control" placeholder="celular" required name="celular">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                             <select name="sexo" id="sexo" class="form-control" required>
                                <option>Selecione</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                             </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="datanasc">Data Nascimento</label>
                            <input type="date" class="form-control" placeholder="Data Nascimento" required name="datanasc">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="estadocivil">Estado Civil</label>
                             <select name="estadocivil" id="estadocivil" class="form-control" required>
                                <option>Selecione</option>
                                <option value="1">Solteiro(a)</option>
                                <option value="2">Casado(a)</option>
                                <option value="3">Divorciado(a)</option>
                                <option value="4">Viuvo(a)</option>
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
                            <input type="text" class="form-control" placeholder="rua" required name="rua">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" placeholder="Número" required name="numeroEndereco">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bairroEndereco">Bairro</label>
                            <input type="text" class="form-control" placeholder="Bairro" required name="bairroEndereco">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="complemento">Complemento</label>
                            <input type="text" class="form-control" placeholder="complemento"  name="complemento">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" placeholder="cep" required name="cep">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" placeholder="Cidade" required name="cidade">
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="form-group">
                            <label for="uf">Estado</label>
                            <select name="uf" id="uf" class="form-control">
                                <option>Selecione</option>
                                <option value="ac">Acre</option>
                                <option value="al">Alagoas</option>
                                <option value="ap">Amapá</option>
                                <option value="am">Amazonas</option>
                                <option value="ba">Bahia</option>
                                <option value="ce">Ceará</option>
                                <option value="df">Distrito Federal</option>
                                <option value="es">Espirito Santo</option>
                                <option value="go">Goiás</option>
                                <option value="ma">Maranhão</option>
                                <option value="ms">Mato Grosso do Sul</option>
                                <option value="mt">Mato Grosso</option>
                                <option value="mg">Minas Gerais</option>
                                <option value="pa">Pará</option>
                                <option value="pb">Paraíba</option>
                                <option value="pr">Paraná</option>
                                <option value="pe">Pernambuco</option>
                                <option value="pi">Piauí</option>
                                <option value="rj">Rio de Janeiro</option>
                                <option value="rn">Rio Grande do Norte</option>
                                <option value="rs">Rio Grande do Sul</option>
                                <option value="ro">Rondônia</option>
                                <option value="rr">Roraima</option>
                                <option value="sc">Santa Catarina</option>
                                <option value="sp">São Paulo</option>
                                <option value="se">Sergipe</option>
                                <option value="to">Tocantins</option>
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
                            <input type="text" class="form-control" placeholder="rg" required name="rg">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="rgemissor">Org. Emissor</label>
                            <input type="text" class="form-control" placeholder="Org. Emissor" required name="rgemissor">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="dataemissao">Data Emissão</label>
                            <input type="date" class="form-control" placeholder="Data Emissão" required name="dataemissao">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="uf">UF</label>
                            <input type="text" class="form-control" placeholder="UF" required name="uf">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" placeholder="cpf" required name="cpf">
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="numerocnh">Nº CNH</label>
                            <input type="text" class="form-control" placeholder="Nº CNH"  name="numerocnh">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="expedicaocnh">Data Exp. CNH</label>
                            <input type="date" class="form-control" placeholder="Data Exp. CNH"  name="expedicaocnh">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="validadecnh">Data Val. CNH</label>
                            <input type="date" class="form-control" placeholder="Data Val. CNH"  name="validadecnh">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="categoriacnh">Categoria CNH</label>
                            <input type="text" class="form-control" placeholder="Categoria CNH"  name="categoriacnh">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="numeroreservista">Nº Cert. Reservista</label>
                            <input type="text" class="form-control" placeholder="Nº Cert. Reservista" name="numeroreservista">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="carteiraprof">Nº Cart. Profissional</label>
                            <input type="text" class="form-control" placeholder="Nº Cart. Profissional" name="carteiraprof">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="expedicaocarteira">Dat. Exp. Cart. Prof.</label>
                            <input type="date" class="form-control" placeholder="Dat. Exp. Cart. Prof." name="expedicaocarteira">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="titulo">Nº Tit. Eleitor</label>
                            <input type="text" class="form-control" placeholder="Nº Tit. Eleitor" name="titulo">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="emissaotitulo">Dat. Emissão Tit. Eleitor</label>
                            <input type="date" class="form-control" placeholder="Dat. Emissão Tit. Eleitor" name="emissaotitulo">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="zonaeleitoral">Zona Eleitor</label>
                            <input type="text" class="form-control" placeholder="Zona Eleitor" name="zonaeleitoral">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="secao">Seção Eleitor</label>
                            <input type="text" class="form-control" placeholder="Seção Eleitor" name="secao">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nacionalidade">Nacionalidade</label>
                            <input type="text" class="form-control" placeholder="Nacionalidade" name="nacionalidade">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ensino">Grau de Instrução</label>
                            <select name="ensino" id="ensino" class="form-control" >
                                <option>Selecione</option>
                                <option value="em"> Ensino Médio </option>
                                <option value="nt"> Nível Técnico </option>
                                <option value="ns"> Nível Superior (cursando) </option>
                                <option value="nsc"> Nível Superior (completo) </option>
                                <option value="pg">Pós Graduação</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="numpis">Nº PIS</label>
                            <input type="text" class="form-control" placeholder="Nº PIS" name="numpis">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="datapis">Dt. Cadast. PIS</label>
                            <input type="date" class="form-control" placeholder="Dt. Cadast. PIS"  name="datapis">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="cargo">Cargo</label>
                             <select name="cargo" id="cargo" class="form-control" >
                                <option>Selecione</option>
                                <option value="1">Acupuntura</option>
                                <option value="2">Alergia</option>
                                <option value="3">Angiologia</option>
                                <option value="4">Cardiologia</option>
                                <option value="5">Clínico Geral</option>
                                <option value="6">Coloproctologia</option>
                                <option value="7">Dermatologia</option>
                                <option value="8">Endocrinologia</option>
                                <option value="9">Fisiatria</option>
                                <option value="10">Fisioterapia</option>
                                <option value="11">Fonoaudiologia</option>
                                <option value="12">Gastroenterologia</option>
                                <option value="13">Geriatria</option>
                                <option value="14">Ginecologia</option>
                                <option value="15">Hematologia</option>
                                <option value="16">Homeopatia</option>
                                <option value="17">Infectologia</option>
                                <option value="18">Nefrologia</option>
                                <option value="19">Neurologia</option>
                                <option value="20">Nutrição</option>
                                <option value="21">Nutrologia</option>
                                <option value="22">Odontologia</option>
                                <option value="23">Oftalmologia</option>
                                <option value="24">Oncologia</option>
                                <option value="25">Ortopedia e Traumatologia </option>
                                <option value="26">Otorrinolaringologia</option>
                                <option value="27">Pediatria</option>
                                <option value="28">Pneumologia</option>
                                <option value="29">Psicologia</option>
                                <option value="30">Pneumologia</option>
                                <option value="31">Psicopedagogia</option>
                                <option value="32">Psiquiatria</option>
                                <option value="33">Reumatologia</option>
                                <option value="34">Urologia</option>
                             </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="dataadmissao">Data Admissão</label>
                            <input type="date" class="form-control" placeholder="Número"  name="dataadmissao">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exameadmissao">Exame Admissão</label>
                            <select name="exameadmissao" id="exameadmissao" class="form-control" >
                                <option>Selecione</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
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