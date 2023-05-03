<?php

namespace App\Http\Controllers;
use App\Models\paypal;
use Illuminate\Http\Request;
session_start();
class paypal_con extends Controller
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
            'card_number' => 'required',
            'exp_date' => 'required',
            'CVC' => 'required',
            'zip_code' => 'required',
        ]);
        $User_ID = $_SESSION['User_ID'];
        // $Price = $submit['Price'];
        $card = $submit['card_number'];
        $exp_date = $submit['exp_date'];
        $CVC = $submit['CVC'];
        $zip = $submit['zip_code'];
        paypal::create(['User_ID' => $User_ID, 'card_number' => $card,'exp_date' => $exp_date, 'CVC' => $CVC, 'zip_code' => $zip]);
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
