<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\UfController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\GrandeareaController;
use App\Http\Controllers\SubareaController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\BolsaController;
use App\Http\Controllers\InstituicaoController;
use App\Http\Controllers\BeneficiarioController;
use App\Http\Controllers\UploadController;

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

// Rotas para Grande área
Route::get('/grandearea', [GrandeareaController::class, 'index']);
Route::get('/grandearea/cadastro', [GrandeareaController::class, 'create']);
Route::post('/grandearea/salvar', [GrandeareaController::class, 'store']);
Route::delete('/grandearea/{id}', [GrandeareaController::class, 'destroy']);
Route::get('/grandearea/{id}/edit', [GrandeareaController::class, 'edit']);
Route::put('/grandearea/{id}', [GrandeareaController::class, 'update']);

// Rotas para Sub-área
Route::get('/subarea', [SubareaController::class, 'index']);
Route::get('/subarea/cadastro', [SubareaController::class, 'create']);
Route::post('/subarea/salvar', [SubareaController::class, 'store']);
Route::delete('/subarea/{id}', [SubareaController::class, 'destroy']);
Route::get('/subarea/{id}/edit', [SubareaController::class, 'edit']);
Route::put('/subarea/{id}', [SubareaController::class, 'update']);

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

// Rotas programas
Route::get('/programa', [ProgramaController::class, 'index']);
Route::get('/programa/cadastro', [ProgramaController::class, 'create']);
Route::post('/programa/salvar', [ProgramaController::class, 'store']);
Route::delete('/programa/{id}', [ProgramaController::class, 'destroy']);
Route::get('/programa/{id}/edit', [ProgramaController::class, 'edit']);
Route::put('/programa/{id}', [ProgramaController::class, 'update']);

// Rotas bolsas
Route::get('/bolsas', [BolsaController::class, 'index']);
Route::get('/bolsas/cadastro', [BolsaController::class, 'create']);
Route::post('/bolsas/salvar', [BolsaController::class, 'store']);
Route::delete('/bolsas/{id}', [BolsaController::class, 'destroy']);
Route::get('/bolsas/{id}/edit', [BolsaController::class, 'edit']);
Route::put('/bolsas/{id}', [BolsaController::class, 'update']);

//Rotas para Instituicoes
Route::get('/instituicoes', [InstituicaoController::class, 'index']);
Route::get('/instituicoes/cadastro', [InstituicaoController::class, 'create']);
Route::post('/instituicoes/salvar', [InstituicaoController::class, 'store']);
Route::delete('/instituicoes/{id}', [InstituicaoController::class, 'destroy']);
Route::get('/instituicoes/{id}/edit', [InstituicaoController::class, 'edit']);
Route::put('/instituicoes/{id}', [InstituicaoController::class, 'update']); 

// Rotas bolsas
Route::get('/beneficiarios', [BeneficiarioController::class, 'index']);
Route::get('/beneficiarios/cadastro', [BeneficiarioController::class, 'create']);
Route::post('/beneficiarios/salvar', [BeneficiarioController::class, 'store']);
Route::delete('/beneficiarios/{id}', [BeneficiarioController::class, 'destroy']);
Route::get('/beneficiarios/{id}/edit', [BeneficiarioController::class, 'edit']);
Route::put('/beneficiarios/{id}', [BeneficiarioController::class, 'update']);

//Rotas upload
Route::get('/upload', [UploadController::class, 'showUploadForm']);
Route::post('/upload/process', [UploadController::class, 'processarArquivo']);
