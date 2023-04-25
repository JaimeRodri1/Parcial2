<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalarioController;

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

/*Route::get('/salario', function(){
    return view('salario.index');
});*/

Route::resource('salario', SalarioController::class);



