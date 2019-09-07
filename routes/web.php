<?php

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
    App::setLocale('pl');
    return view('pages.homepage');
});

Route::get('/{locale}', function($locale) {
    App::setLocale($locale);
    return view('pages.homepage');
});

Route::get('/{locale}/{project}', function($locale, $project) {
    App::setLocale($locale);
    return view('pages.'.$project);
});