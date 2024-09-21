
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/chapters', function () {
    return view('chapters');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user', function () {
    $username = request()->input('username', 'Guest');

    if (!preg_match('/^[A-Za-z]+$/', $username)) {
        $username = 'Guest'; 
    }
    return view('user', ['username' => $username]);
});