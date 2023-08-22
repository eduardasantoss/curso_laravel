 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\LoginController;


//rota para home
Route::get('/', [HomeController::class, 'index'])->name('site.home'); 

//rota para login
Route::get('/login', [LoginController::class, 'index'])->name('site.login'); 
Route::post('/login/entrar', [LoginController::class, 'entrar'])->name('site.login.entrar');
Route::get('/login/sair', [LoginController::class, 'sair'])->name('site.login.sair');

//rota para contato
Route::get('/contato/{id?}',[ContatoController::class, 'index']); //passo o nome do meu controller o @index é um método na minha classe ContatoControler
Route::post('/contato',[ContatoController::class, 'criar']);// se for enviado algo via post ele sempre vai bater nessa rota
Route::put('/contato',[ContatoController::class, 'editar']);   
//o {id} não é obrigatorio, pode ser acessado sem o id por id?  

//rota para cursos
Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/cursos', [CursoController::class, 'index'])->name('admin.cursos');
    Route::get('/cursos/adicionar', [CursoController::class, 'adicionar'])->name('admin.cursos.adicionar');
    Route::post('/cursos', [CursoController::class, 'salvar'])->name('admin.cursos.salvar');
    Route::get('/cursos/{id}', [CursoController::class, 'editar'])->name('admin.cursos.editar');
    Route::put('/cursos/{id}', [CursoController::class, 'atualizar'])->name('admin.cursos.atualizar');
    Route::delete('/cursos/{id}', [CursoController::class, 'deletar'])->name('admin.cursos.deletar');
}); 

