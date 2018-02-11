<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Agendamentos extends Model
{
    protected $fillable = [
    	"paciente", "cpf", "medico", "dataconsulta", "horario", "status"
    ];
    protected $table = "agendamentos";

     public function doctors(){
        return $this->belongsToMany('App\Doctors', 'doctors_id');
    }

    public function pacientes(){
        return $this->belongsToMany('App\Pacientes', 'Relacionamento_Paciente_Doctor_Agendamento');
    }
}
