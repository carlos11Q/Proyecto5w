<?php

use App\Http\Controllers\CitaController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    return view('landing');
});



Route::get('cita/{cita}/ver', [CitaController::class, 'show'])->name('cita.show');
Route::delete('cita/{cita}/eliminar', [CitaController::class, 'destroy'])->name('cita.destroy');


Route::get('cita/registrar', [CitaController::class, 'create'])->name('cita.create');
Route::post('cita/guaradr', [CitaController::class, 'store'])->name('cita.store');
Route::get('cita/lista', [CitaController::class, 'index'])->name('cita.index');
Route::get('cita/{cita}/editar', [CitaController::class, 'edit'])->name('cita.edit');

Route::put('cita/{cita}/actualizar', [CitaController::class, 'update'])->name('cita.update');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');

Route::get('/moders', [App\Http\Controllers\ModeradorController::class, 'index'])->name('moders');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
