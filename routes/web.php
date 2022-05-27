<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Perfil;
use App\Models\Mensajes;

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
Route::get('/tecsup', function () {
    return view('tecsup');
});
Route::get('/usuarios', function () {
    return User::All();
});
Route::get('/perfil', function () {
    return Perfil::All();
});
Route::get('/publicaciones', function () {
    return view('publicaciones');
});
Route::get('/mensajes', function () {
    return Mensajes::All();
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
