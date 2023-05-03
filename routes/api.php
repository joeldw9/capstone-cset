<?php

use App\Http\Controllers\loginlogout;
use App\Http\Controllers\employee;
use App\Http\Controllers\editanddeletion;
use App\Http\Controllers\admin;
use App\Http\Controllers\review;
use App\Http\Controllers\signup;
use App\Http\Controllers\edit;
use App\Http\Controllers\payment;
use App\Http\Controllers\paypal_con;
use App\Http\Controllers\Order;
use App\Http\Controllers\welcome;
use App\Models\signup as ModelsSignup;
use Illuminate\Http\Request;
use Request as requestPayment;
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
Route::post('/admin2', [admin::class,'assign']);
Route::post('/employee', [employee::class,'setstatus']);
Route::post('/logout', [loginlogout::class,'userLogout']);
Route::post('/edit', [edit::class,'alter']);
Route::post('/deletionrequest', [editanddeletion::class,'deletionrequest']);
Route::post('/deleteaccount', [editanddeletion::class,'deleteaccount']);
Route::post('/review', [review::class,'review']);
Route::post('/order', [Order::class, 'order'] );
Route::post('/payment', [payment::class,'store']);
Route::post('/paypal', [paypal_con::class,'store']);
Route::post('/paypal_payment', [payment::class,'pal_store']);
Route::post('/makeadmin', [welcome::class,'makeadmin']);
//Figure out how to enter the payment info into database
?>