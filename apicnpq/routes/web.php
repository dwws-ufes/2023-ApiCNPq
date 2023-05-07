<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AreaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rota de usuários
Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::get('/usuarios/cadastro', [UsuariosController::class, 'create']);
Route::post('/usuarios/salvar', [UsuariosController::class, 'store']);

// Rotas para áreas
Route::get('/areas', [AreaController::class, 'index']);
Route::get('/areas/cadastro', [AreaController::class, 'create']);
Route::post('/areas/salvar', [AreaController::class, 'store']);
Route::delete('/areas/{id}', [AreaController::class, 'destroy']);
