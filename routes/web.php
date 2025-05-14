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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hasan', function () {
    return view('Profile');
});

Route::get('/hello', function () {
    $name = "Good morning";
    $value = 10;
    $names = ['Hasan', 'Sami', 'Rafiq', 'Rafi', 'Samiul', 'Samiul','Hasan','Samiul',' Hasan ','Rafiq'];
    return view('hello')-> with('oo', $name)-> with('value', $value)-> with('employee', $names);
});



Route::get('/sayhasan/{name}',[App\Http\Controllers\bookingController::class, 'sayhasan']);

Route::get('/login',[App\Http\Controllers\bookingController::class, 'login']);
