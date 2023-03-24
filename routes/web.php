<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signup;
use App\Http\Controllers\loginlogout;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function() {
    return view('template');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/employees', function (){
    return view('employees');
});

Route::get('/customers', function (){
    return view('customers');
});

Route::get('/admin', function (){
    return view('admin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('review', function () {
    return view('review');
});

Route::get('status', function () {
    return view('status');
});
?>