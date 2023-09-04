<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
   // return view('welcome');
//});

//Rota 01
//Route::get('/', function () {
    //return view('AULA DE PW III');
 //});
 
 //Rota 02   
 //Route::get('/quem somos', function () {  // documento e função executada
    // return view('Welcome');
     //return 'Quem somos'; // mensagem que será exibida
 //});
 
 //Rota 03
 //Route::get('/contato', function () {
    // return view('Welcome');
     //return 'contato';
 //});

  //Oficial
  Route::get('/', 'App\Http\Controllers\PrincipalController@principal');
  Route::get('/sobrenos', 'App\Http\Controllers\SobreNosController@principal');
  Route::get('/contato', 'App\Http\Controllers\ContatoController@principal');

  Route::get('/contato/{nome?}/{mensagem}',
                function(string $nome, string $mensgaem = 'sem texto')
                {echo "passagem de parametros via browser: $nome - $mensagem";}
);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
