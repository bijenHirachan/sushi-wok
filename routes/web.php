<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/menu', function (){
    return view('menu');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/test', function (){
    return view('test');
});
