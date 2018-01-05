<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nome');
            $table->enum('especialidades',['1','2','3','4', '5', '6', '7', '8', '9','10','11','12', '13', '14', '15', '16',
            '17','18','19','20', '21', '22', '23', '24', '25','26','27','28', '29', '30', '31', '32', '33', '34']);
            $table->integer('crm');
            $table->enum('sexo', ['M', 'F']);
            $table->date('datanasc',['d/m/Y']);
            $table->enum('estadocivil',['1','2','3','4']);
            $table->integer('rg');
            $table->integer('cpf');
            $table->integer('telefone');
            $table->integer('celular');
            $table->string('email');
            $table->string('rua');
            $table->integer('numeroEndereco');
            $table->string('bairroEndereco');
            $table->string('complemento');
            $table->integer('cep');
            $table->string('cidade');
            $table->enum('contratacao',['1','2']);
            $table->date('datainicio',['d/m/Y']);
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
        Schema::dropIfExists('doctors');
    }
}
