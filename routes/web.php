<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home') ->name('home');
Route::get('/comic/{id}', 'HomeController@show') ->name('show');
