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

Route::get('/pl/strony-internetowe', function() {
    App::setLocale('pl');
    return view('pages.webpages');
});

Route::get('/en/webpages', function() {
    App::setLocale('en');
    return view('pages.webpages');
});

Route::get('/pl/aplikacje-mobilne-i-desktopowe', function() {
    App::setLocale('pl');
    return view('pages.apps');
});

Route::get('/en/mobile-and-desktop-apps', function() {
    App::setLocale('en');
    return view('pages.apps');
});

Route::get('/pl/projekty-graficzne', function() {
    App::setLocale('pl');
    return view('pages.graphic');
});

Route::get('/en/graphic-projects', function() {
    App::setLocale('en');
    return view('pages.graphic');
});

Route::get('/pl/kontakt', function() {
    App::setLocale('pl');
    return view('pages.contact');
});

Route::get('/en/contact', function() {
    App::setLocale('en');
    return view('pages.contact');
});