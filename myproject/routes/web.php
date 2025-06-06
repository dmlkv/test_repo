<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/about', [MainController::class, 'about']);

Route::get('/blog', [MainController::class, 'blog']);

Route::get('/price', [MainController::class, 'price']);

Route::get('/activities', [MainController::class, 'activities']);

Route::get('/contacs', [MainController::class, 'contacs'])->name('contacts');

Route::post('/contacs/check', [MainController::class, 'check']);

Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID: '. $id . '. Name: ' . $name;
});
