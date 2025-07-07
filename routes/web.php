<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('auth-login');
});

Route::get('/registrar', function () {
    return view('auth-registrar');
});

Route::post('/registrar', function (Illuminate\Http\Request $request) {
    $nome = $request->input('nome');
    $email = $request->input('email');
    $senha = $request->input('password');

    return redirect('/');
});

