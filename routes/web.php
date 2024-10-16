<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', function () {
    return view('Counter');
});

Route::get('/search', function () {
    return view('Search');
});

Route::get('/livewire', function () {
    return view('Livewire');
});