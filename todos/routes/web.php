<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;

Route::get('/', function () {
    return view('welcome');
})->name("todo.home");;
Route::get('/create', function () {
    return view('create');
})->name("todo.create");
Route::get('/edit', function () {
    return view('update');
});

//create todo route
Route::post('/create',[todosController::class,'store']) -> name("todo.store");

