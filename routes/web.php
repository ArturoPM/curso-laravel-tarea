<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::prefix('post')
->name('posts.')
->controller(PostController::class)->group(function () {
    Route::get('/index', 'index')->name('index'); // Lista todos los posts
    Route::get('/create', 'create')->name('create'); // Muestra el formulario para crear un post
    Route::post('/store', 'store')->name('store'); // Crea un nuevo post
    Route::get('/show/{id}', 'show')->name('show'); // Muestra un post
    Route::get('/edit/{id}', 'edit')->name('edit'); // Muestra el formulario para editar un post
    Route::post('/update/{id}', 'update')->name('update'); // Actualiza un post
    Route::get('/destroy/{id}', 'destroy')->name('destroy'); // Elimina un post
});