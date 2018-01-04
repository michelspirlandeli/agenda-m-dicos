<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamentos extends Model
{
    
    protected $fillable = [
    	"paciente", "cpf", "medico", "dataconsulta", "horario", "status"
    ];
    protected $table = "agendamentos";
}
