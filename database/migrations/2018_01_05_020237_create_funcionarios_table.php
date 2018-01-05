<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nome');
            $table->integer('telefone');
            $table->integer('celular');
            $table->string('email');
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairroEndereco');
            $table->string('complemento');
            $table->integer('cep');
            $table->string('cidade');
            $table->enum('uf',['ac','al','ap','am', 'ba', 'ce', 'df', 'es', 'go','ma','ms','mt', 'mg', 'pa', 'pb', 'pr',
            'pe','pi','rj','rn', 'rs', 'ro', 'rr', 'sc', 'sp','se','to']);
            $table->enum('sexo', ['M','F']);
            $table->date('datanasc',['d/m/Y']);
            $table->enum('estadocivil',['1','2','3','4']);
            $table->integer('rg');
            $table->integer('rgemissor');
            $table->date('dataemissao',['d/m/Y']);
            $table->integer('cpf');
            $table->integer('numerocnh');
            $table->integer('expedicaocnh');
            $table->date('validadecnh',['d/m/Y']);
            $table->string('categoriacnh');
            $table->integer('numeroreservista');
            $table->integer('carteiraprof');
            $table->integer('expedicaocarteira');
            $table->string('titulo');
            $table->string('emissaotitulo');
            $table->string('zonaeleitoral');
            $table->string('secao');
            $table->string('nacionalidade');
            $table->enum('ensino',['em','nt','ns','nsc','pg']);
            $table->integer('numpis');
            $table->date('datapis',['d/m/Y']);
            $table->enum('cargo',['1','2','3','4', '5', '6', '7', '8', '9','10','11','12', '13', '14', '15', '16',
            '17','18','19','20', '21', '22', '23', '24', '25','26','27','28', '29', '30', '31', '32', '33', '34']);
            $table->date('dataadmissao',['d/m/Y']);
            $table->enum('exameadmissao',['Sim','Não']);
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
        Schema::dropIfExists('funcionarios');
    }
}
