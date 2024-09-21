
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
    // Get the username from the request or default to 'Guest'
    $username = request()->input('username', 'Guest');
    
    // Validate username to ensure it only contains alphabetic characters
    if (!preg_match('/^[A-Za-z]+$/', $username)) {
        $username = 'Guest'; 
    }

    // Return the user view with the username
    return view('user', ['username' => $username]);
});