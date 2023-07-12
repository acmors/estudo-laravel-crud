<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Cadastrado;

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

Route::post('/cadastrar-candidato', function (Request $informacoes) {
    Cadastrado::create([
        'nome'=> $informacoes->nome_aluno,
        'telefone' => $informacoes->telefone_aluno,
        'idade' => $informacoes->idade_aluno,
        'curso' => $informacoes->curso_aluno,
        'turno' => $informacoes->turno_aluno
    ]);

    return "Aluno cadastrado";
    
});

Route::get('/buscar-aluno/{id_candidato}', function ($id_candidato) {
    $aluno_cadastrado = Cadastrado::find($id_candidato);
    echo $aluno_cadastrado->nome."</br>";
    echo $aluno_cadastrado->telefone."</br>";
    echo $aluno_cadastrado->idade."</br>";
    echo $aluno_cadastrado->curso."</br>";
    echo $aluno_cadastrado->turno."</br>";
});