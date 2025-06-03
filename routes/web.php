<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'home');
})->name('home');

Route::get('/sobre', function () {
    return view(view: 'sobre');
})->name('sobre');

Route::get('/produtos', function () {
    return view(view: 'produtos');
})->name('produtos');

Route::get('/loja', function () {
    return view(view: 'loja');
})->name('loja');

Route::get('/franqueado', function () {
    return view(view: 'franqueado');
})->name('franqueado');

