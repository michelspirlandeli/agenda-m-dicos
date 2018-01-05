<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nome');
            $table->integer('idade');
            $table->enum('sexo',['M','F']);
            $table->date('datanasc',['d/m/Y']);
            $table->enum('estadocivil',['1','2','3','4']);
            $table->integer('rg');
            $table->integer('cpf');
            $table->integer('telefone');
            $table->integer('celular');
            $table->string('email');
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairroEndereco');
            $table->string('complemento');
            $table->integer('cep');
            $table->string('cidade');
            $table->date('datainicio',['d/m/Y']);
            $table->enum('convenio',['Interno','Externo']);
            $table->integer('numeroconvenio');
            $table->string('nomepai');
            $table->date('datanascpai',['d/m/Y']);
            $table->string('nomemae');
            $table->date('datanascmae',['d/m/Y']);
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
        Schema::dropIfExists('pacientes');
    }
}
