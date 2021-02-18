<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\GeneroController;

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

//Rota de generos
// Route::get('/generos', [UserController::class, 'index']);

//rota de generos 2


Route::get('/genero', [GeneroController::class,'index'])->name('generos.index');
Route::get('/genero/criar', [GeneroController::class,'create'])->name('generos.create');
Route::post('/genero/store', [GeneroController::class,'store'])->name('generos.store');
Route::get('/generos/mostrar', [GeneroController::class,'show'])->name('generos.show');
Route::delete('/generos/apagar', [GeneroController::class,'destroy'])->name('generos.destroy');
Route::get('/generos/editar', [GeneroController::class,'edit'])->name('generos.edit');
Route::get('/generos/update', [GeneroController::class,'update'])->name('generos.update');