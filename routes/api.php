<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('medicos', 'ApiMedicosController');

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