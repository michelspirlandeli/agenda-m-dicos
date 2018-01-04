<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
     protected $fillable = [
    	"nome", "idade", "sexo", "datanasc", "estadocivil", "rg", "cpf", "telefone", "celular", "email", "rua", "numero", 
    	"bairroEndereco", "complemento", "cep", "cidade", "datainicio", "convenio", "numeroconvenio", 
    	"nomepai", "datanascpai", "nomemae", "datanascmae"
    ];
    protected $table = "pacientes";
}
