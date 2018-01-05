<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('doctors', 'DoctorsController');
Route::resource('funcionarios', 'FuncionariosController');
Route::resource('agendamentos', 'AgendamentosController');
Route::resource('pacientes', 'PacientesController');
Route::resource('medicos', 'ApiMedicosController');

//Rotas remover
Route::get('/agendamentos/remove/', 'AgendamentosController@remover')->name('agendamentos.remove');
Route::get('/doctors/remove/', 'DoctorsController@remover')->name('doctors.remove');
Route::get('/funcionarios/remove/', 'FuncionariosController@remover')->name('funcionarios.remove');
Route::get('/pacientes/remove/', 'PacientesController@remover')->name('pacientes.remove');

//Rotas Datatables
Route::get('api/agendamentos', function() {
	return datatables()->eloquent(App\Agendamentos::query())->toJson();
});
Route::get('api/doctors', function() {
	return datatables()->eloquent(App\Doctors::query())->toJson();
});
Route::get('api/funcionarios', function() {
	return datatables()->eloquent(App\Funcionarios::query())->toJson();
});
Route::get('api/pacientes', function() {
	return datatables()->eloquent(App\Pacientes::query())->toJson();
});

//rotas perfil
Route::get('perfil', 'PerfilController@perfil');
Route::post('perfil','PerfilController@update_avatar'); 

