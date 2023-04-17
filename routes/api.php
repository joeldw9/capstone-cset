<?php

use App\Http\Controllers\loginlogout;
use App\Http\Controllers\editanddeletion;
use App\Http\Controllers\admin;
use App\Http\Controllers\signup;
use App\Http\Controllers\edit;
use App\Http\Controllers\payment;
use App\Models\signup as ModelsSignup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\Telemetry\System;
use Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider;
use Illuminate\Support\Facades\DB;

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
    $username = count(DB::select('select username from accounts where username = \'' . $request->username . '\''));
    $email = count(DB::select('select email from accounts where email = \'' . $request->email . '\''));
    if ($username > 0 || $email > 0) {
        return redirect('/errorDuplicate');
    } else {
        app('App\Http\Controllers\signup')->store($request);
        return redirect('/');
    }
});
Route::post('/login', [loginlogout::class,'Login']);
Route::post('/admin', [admin::class,'approve']);
Route::post('/logout', [loginlogout::class,'userLogout']);
Route::post('/edit', [edit::class,'alter']);
Route::post('/deletionrequest', [editanddeletion::class,'deletionrequest']);
Route::post('/deleteaccount', [editanddeletion::class,'deleteaccount']);
Route::post('/order', function(Request $request) {
    app('App\Http\Controllers\order')->order($request);
});
Route::post('/payment', [payment::class,'store']);
//Figure out how to enter the payment info into database
?>