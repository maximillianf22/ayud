<?php

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

//Core pages
Route::view('/', 'home');
Route::view('/servicios', 'services');
Route::view('/nosotros', 'about');
Route::view('/preguntas-frecuentes', 'questions');
Route::view('/contacto', 'contact');
Route::view('/planes', 'prices');
Route::view('/buscar', 'search');

//Auth login pages
Route::view('/login', 'auth.login');

//Auth register pages
Route::view('/registro', 'auth.register.register');
Route::view('/informacion', 'auth.register.information');

//Auth recovery pages
Route::view('/recuperar', 'auth.recovery.recovery');
Route::view('/codigo', 'auth.recovery.code');
Route::view('/contraseña', 'auth.recovery.password');
Route::view('/recuperado', 'auth.recovery.success');

//Logged pages
Route::view('/inicio', 'system.home');

//Payment pages
Route::view('/pagar', 'payment.pay');

//Profile pages
Route::view('/perfil', 'profile.profile');

