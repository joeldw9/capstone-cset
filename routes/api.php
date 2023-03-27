<?php

use App\Http\Controllers\loginlogout;
use App\Http\Controllers\admin;
use App\Http\Controllers\signup;
use App\Models\signup as ModelsSignup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\Telemetry\System;
use Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('signup', function(Request $request) {
    app('App\Http\Controllers\signup')->store($request);
    return redirect('/');
});
Route::post('/login', [loginlogout::class,'Login']);
Route::post('/admin', [admin::class,'approve']);
Route::post('/logout', [loginlogout::class,'userLogout'])

?>