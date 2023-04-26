<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\payments;

session_start();
class payment extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $submit = $request->validate([
            'payment_method' => 'required',
            // 'Price' => 'required',
            'card_number' => 'required',
            'exp_date' => 'required',
            'CVC' => 'required',
            'zip_code' => 'required',
            'Order_ID' => 'required',
        ]);
        $Order_ID = $request.old('Order_ID');
        $User_ID = $_SESSION['User_ID'];
        $payment = $submit['payment_method'];
        $Price = $request.old('Price');
        // $Price = $submit['Price'];
        $card = $submit['card_number'];
        $exp_date = $submit['exp_date'];
        $CVC = $submit['CVC'];
        $zip = $submit['zip_code'];
        payments::create(['Order_ID' => $Order_ID, 'User_ID' => $User_ID, 'payment_method' => $payment, 'Price' => $Price, 'card_number' => $card,'exp_date' => $exp_date, 'CVC' => $CVC, 'zip_code' => $zip]);
        return view("/customers");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
