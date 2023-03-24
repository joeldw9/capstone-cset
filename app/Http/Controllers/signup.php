<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\customer;
use App\Models\employee;
use Illuminate\Support\Facades\DB;
session_start();
class signup extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $submit = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'role' => 'required',
            'confirmpassword' => 'required',
        ]);
        if($submit['role']=="Customer"&&$submit['password']==$submit['confirmpassword']||$submit['role']=="customer"&&$submit['password']==$submit['confirmpassword']){
            $ID = "CU" . random_int(100000, 999999);
            $username=$submit['username'];
            $password=$submit['password'];
            $email=$submit['email'];
            $role=1;
            $approvalstatus='Approved';
            customer::create(['username' => $submit['username'], 'password' => $submit['password'], 'email' => $submit['email'], 'ID' => $ID,'role' => $role, 'approvalstatus' => $approvalstatus]);
             DB::table('accounts')->insert([
                 'username'=>$submit['username'],
                 'password'=>$submit['password'],
                 'email'=>$submit['email'],
                 'ID'=>$ID,
                 'role'=>$role
             ]);
        }
        else if($submit['role']=="Employee"&&$submit['password']==$submit['confirmpassword']){
            $ID = "EM" . random_int(100000, 999999);
            $username=$submit['username'];
            $password=$submit['password'];
            $email=$submit['email'];
            $role=2;
            $approvalstatus='Pending';
            customer::create(['username' => $submit['username'], 'password' => $submit['password'], 'email' => $submit['email'], 'ID' => $ID,'role' => $role, 'approvalstatus' => $approvalstatus]);
        }
        return redirect('signup');
        
        return view('signup');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
