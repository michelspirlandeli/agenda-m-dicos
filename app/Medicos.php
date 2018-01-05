<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicos extends Model
{
    protected $fillable = [
    	"nome", "especialidades", "crm", "sexo", "datanasc", "estadocivil", "rg", "cpf", "telefone", "celular", "email", "rua"
    	, "numeroEndereco", "bairroEndereco", "complemento", "cep", "cidade", "contratacao", "datainicio"
    ];
    protected $table = "medicos";
}
