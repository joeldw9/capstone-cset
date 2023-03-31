<?php

namespace App\Http\Controllers;
use App\Models\admin;
use App\Models\customer;
use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
session_start();
class edit extends Controller
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
        //
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
    public function alter(Request $request)
    {
        $submit = $request->validate([
            'password' => 'required',
            'email' => 'required',
            'confirmpassword' => 'required',
            'newpassword' => 'required',
        ]);
        if($submit['password'] == $_SESSION['password']){
            if($submit['newpassword']==$submit['confirmpassword']){
                $password=$submit['newpassword'];
                $email=$submit['email'];
                $customer = customer::findorfail($_SESSION['User_ID']);
                $customer->update(['password'=>$password,'email'=>$email]); // $request->username, $request->newpassword,$request->email
                session_destroy();
                return redirect('/login');
                //Try to make it so password changes too, as of right now only email is updated
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
