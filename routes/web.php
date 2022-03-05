<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

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
    return view('inscription');
});

Route::post('/inscription', 'EtudiantController@store');
Route::get('/etudiants', 'EtudiantController@listEtudiants');
Route::get('/modifier-etudiant/{id}', 'EtudiantController@viewModifier');
Route::get('/supprimer-etudiant/{id}', 'EtudiantController@supprimer');
