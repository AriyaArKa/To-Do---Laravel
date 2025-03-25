<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("todo.home");;
Route::get('/create', function () {
    return view('create');
})->name("todo.create");
Route::get('/edit', function () {
    return view('update');
});

