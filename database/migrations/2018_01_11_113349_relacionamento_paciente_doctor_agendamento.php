<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionamentoPacienteDoctorAgendamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('Relacionamento_Paciente_Doctor_Agendamento', function (Blueprint $table) 
           {
               $table->increments('id');
               $table->integer('pacientes_id')->unsigned();
               $table->foreign('pacientes_id')->references('id')->on('pacientes');
               $table->integer('doctors_id')->unsigned();
               $table->foreign('doctors_id')->references('id')->on('doctors');
               $table->timestamps();
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Relacionamento_Paciente_Doctor_Agendamento');
    }
}
