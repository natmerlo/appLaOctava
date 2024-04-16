<?php

use App\Http\Controllers\AutentController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RecetaController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('paginaprincipal');
})->name('PaginaPrincipal');


Route::get('LogIntranet', [AutentController::class, 'LogIntranet'])->name('LogIntranet');
Route::post('LoginNuevo', [AutentController::class, 'login'])->name('LoginNuevo');
Route::get('UsrAutoriz', [AutentController::class, 'UsrAutoriz'])->middleware('auth')->name('UsrAutoriz');
Route::post('CerrarSesion', [AutentController::class, 'logout'])->name('CerrarSesion');


Route::get('mnuInicio', [MenuController::class, 'PnaInicio'])->name('mnuInicio');
Route::get('mnuProductos', [MenuController::class, 'PnaProductos'])->name('mnuProductos');
Route::get('mnuProductosTodos', [MenuController::class, 'PnaProductosTodos'])->name('mnuProductosTodos');
Route::get('mnuMontesano', [MenuController::class, 'PnaMontesano'])->name('mnuMontesano');
Route::get('mnuRecetas', [MenuController::class, 'PnaRecetas'])->name('mnuRecetas');
Route::get('mnuHistoria', [MenuController::class, 'PnaHistoria'])->name('mnuHistoria');
Route::get('mnuContacto', [MenuController::class, 'PnaContacto'])->name('mnuContacto');

Route::get('ProductoDetalle/{ori}/{id}', [ProductoController::class, 'ProductoDetalle'])->name('ProductoDetalle');
Route::get('RecetaDetalle/{ori}/{id}', [RecetaController::class, 'RecetaDetalle'])->name('RecetaDetalle');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('usrautoriz');
    })->name('dashboard');
});


