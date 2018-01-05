<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $fillable = [
    	"nome", "telefone", "celular", "email", "rua", "numero", "bairroEndereco", "complemento", "cep", "cidade", "uf", 
    	"sexo", "datanasc", "estadocivil", "rg", "rgemissor", "dataemissao", "uf", "cpf", "numerocnh", "expedicaocnh", 
    	"validadecnh", "categoriacnh", "numeroreservista", "carteiraprof", "expedicaocarteira", "titulo", "emissaotitulo", 
    	"zonaeleitoral", "secao", "nacionalidade", "ensino", "numpis", "datapis", "cargo", "dataadmissao", "exameadmissao"
    ];
    protected $table = "funcionarios";
}
