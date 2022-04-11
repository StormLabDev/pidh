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

Route::redirect('/', '/fr', 301);
Route::redirect('/correspondance', '/fr', 301);
Route::redirect('/galerie', '/fr', 301);
Route::redirect('/galerie', '/fr', 301);
Route::redirect('/declaration', '/fr', 301);
Route::redirect('/contacter', '/fr', 301);
Route::redirect('/nouvelles', '/fr', 301);
Route::redirect('/corps', '/fr', 301);
Route::redirect('/presentation', '/fr', 301);
Route::redirect('/decret', '/fr', 301);


Route::prefix('{locale}')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->middleware('setLocale')->name('welcome');;

    Route::get('/correspondance', function () {
        return view('correspondance');
    })->middleware('setLocale')->name('correspondance');

    Route::get('/galerie', function () {
        return view('galerie');
    })->middleware('setLocale')->name('galerie');

    Route::get('/declaration', function () {
        return view('declaration');
    })->middleware('setLocale')->name('declaration');

    Route::get('/contacter', function () {
        return view('contacter');
    })->middleware('setLocale')->name('contacter');

    Route::get('/nouvelles', function () {
        return view('nouvelles');
    })->middleware('setLocale')->name('nouvelles');

    Route::get('/corps', function () {
        return view('corps');
    })->middleware('setLocale')->name('corps');

    Route::get('/presentation', function () {
        return view('presentation');
    })->middleware('setLocale')->name('presentation');

    Route::get('/decret', function () {
        return view('nomination');
    })->middleware('setLocale')->name('nomination');  

});

    