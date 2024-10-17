<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\EditCustomer;
use App\Livewire\ViewCustomer;
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

Route::get('/input', function () {
    return view('Input');
});

Route::get('/crud', function () {
    return view('Crud');
});

Route::get('/register', Register::class);
Route::get('/login', Login::class)->name('login');

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/customers', Customers::class);
    Route::get('/customers/create', CreateCustomer::class);
    Route::get('/customers/{customer}', ViewCustomer::class);
    Route::get('/customers/{customer}/edit', EditCustomer::class);
});


