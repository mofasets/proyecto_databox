<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

$usuario = [
	['nombre','Sebastian'],
	['apellido','Osto'],
	['password','locota123'],
	['telefono','04244161544'],
	['mail','miguelosto1@gmail.com'],
	['datebirth','04/03/2024'],
	['sexo','3'],
];


Route::view('/','index')->name('home');
Route::view('/signin','signin')->name('signin');
Route::view('/registration_success','registration_success')->name('registration_success');
Route::get('/signup', [UserController::class,'create'])->name('signup');
Route::post('/', [UserController::class,'store'])->name('store');
Route::post('/si', [UserController::class,'login'])->name('login');
Route::view('/common','common_user')->name('common');
Route::view('/admin','admin_user')->name('admin');

