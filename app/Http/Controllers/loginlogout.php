<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\customer;
use App\Models\employee;
use Illuminate\Support\Facades\DB;
session_start();

class loginlogout extends Controller
{
    public function Login(Request $request){
        $fields = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $users = DB::select("
            SELECT username, email, password, User_ID, approvalstatus, role FROM accounts WHERE username=\"" . $_POST["username"] . "\" AND password=\"" . $_POST["password"] . "\"
        ");

        foreach($users as $user){
            if($user->username == $fields['username'] && $user->password == $fields['password'] && $user->approvalstatus == "Approved") {
                $_SESSION['ID'] = $user->User_ID;
                $_SESSION["username"] = $user->username;
                $_SESSION["email"] = $user->email;
                $_SESSION["approvalstatus"] = $user->approvalstatus;
                $_SESSION["role"] = $user->role;
                switch ($_SESSION["role"]){
                    case 1:
                        return redirect('customers');
                        break;
                    case 2:
                        return redirect('employees');
                        break;
                    case 3:
                        return redirect('admin');
                        break;
                    default:
                    return redirect('login');
                        break;
                }
        }
        else{
            return redirect('login');
        }
    }
}

    public function userLogout() {
        session_destroy();
        return redirect('login');
    }
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
        //
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