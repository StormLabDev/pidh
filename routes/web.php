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


    Route::get('/', function () {
        return view('welcome');
    })->middleware('setLocale');

    Route::get('/correspondance', function () {
        return view('correspondance');
    })->middleware('setLocale');

    Route::get('/galerie', function () {
        return view('galerie');
    })->middleware('setLocale');

    Route::get('/declaration', function () {
        return view('declaration');
    })->middleware('setLocale');

    Route::get('/contacter', function () {
        return view('contacter');
    })->middleware('setLocale');

    Route::get('/nouvelles', function () {
        return view('nouvelles');
    })->middleware('setLocale');

    Route::get('/corps', function () {
        return view('corps');
    })->middleware('setLocale');

    Route::get('/presentation', function () {
        return view('presentation');
    })->middleware('setLocale');

    Route::get('/decret', function () {
        return view('nomination');
    })->middleware('setLocale');

    


