<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});


Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/parts-locator', function () {
    return view('parts-locator');
});

Route::get('/availability', function () {
    return view('availability');
});

Route::get('/parts-information', function () {
    return view('parts-information');
});

Route::get('/parts-form', function () {
    return view('parts-form');
});

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', function () {
    return redirect('/login');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::get('/settings', function () {
    return view('settings');
});