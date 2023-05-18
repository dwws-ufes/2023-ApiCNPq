<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\UfController;
use App\Http\Controllers\EnderecoController;
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
Route::delete('/usuarios/{id}', [UsuariosController::class, 'destroy']);

// Rotas para áreas
Route::get('/areas', [AreaController::class, 'index']);
Route::get('/areas/cadastro', [AreaController::class, 'create']);
Route::post('/areas/salvar', [AreaController::class, 'store']);
Route::delete('/areas/{id}', [AreaController::class, 'destroy']);
Route::get('/areas/{id}/edit', [AreaController::class, 'edit']);
Route::put('/areas/{id}', [AreaController::class, 'update']);

// Rotas para endereços
Route::get('/enderecos', [EnderecoController::class, 'index']);
Route::get('/enderecos/cadastro', [EnderecoController::class, 'create']);
Route::post('/enderecos/salvar', [EnderecoController::class, 'store']);
Route::delete('/enderecos/{id}', [EnderecoController::class, 'destroy']);
Route::get('/enderecos/{id}/edit', [EnderecoController::class, 'edit']);
Route::put('/enderecos/{id}', [EnderecoController::class, 'update']);


// Rotas para ufs
Route::get('/enderecos/ufs', [UfController::class, 'index']);
Route::get('/enderecos/ufs/cadastro', [UfController::class, 'create']);
Route::post('/enderecos/ufs/salvar', [UfController::class, 'store']);
Route::delete('/enderecos/ufs/{id}', [UfController::class, 'destroy']);
Route::get('/enderecos/ufs/{id}/edit', [UfController::class, 'edit']);
Route::put('/enderecos/ufs/{id}', [UfController::class, 'update']);

//Rotas para beneficiarios
// Route::get('/beneficiarios', []);