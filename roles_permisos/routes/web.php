<?php

use App\Http\Controllers\InicioController;
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

Route::get('/', function (){
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dash.index');
    })->name('dashboard');
});

Route::resource('articulos','App\Http\Controllers\ArticuloController');

Route::get('/dash','App\Http\Controllers\DashboardController@index');

Route::get('/dash/crud', function (){
    return view('crud.index');
});

Route::get('/dash/crud/create', function (){
    return view('crud.create');
});
