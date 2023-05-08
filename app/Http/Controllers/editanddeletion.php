<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
session_start();
class editanddeletion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function deletionrequest(Request $request)
    {
        $fields = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

            DB::table('accounts')->where('username', $fields["username"])->update(['requestingdeletion' => 'Yes']);
            if($_SESSION['role']==1){
                return redirect('customers');
            }
            else if($_SESSION['role']==2){
                return redirect('employees');
            }
    }

    public function deleteaccount(Request $request)
    {
        $fields = $request->validate([
            'username' => 'required|string',
        ]);
        $y = DB::select("SELECT User_ID from accounts where username = \"". $fields["username"] ."\"");
        if(!empty($y)){
        foreach($y as $z){
        $x = DB::select("SELECT User_ID from orders where USER_ID = \"". $z->User_ID ."\"");
        if(empty($x)){
            $a = DB::select("SELECT Employee_ID from orders where Employee_ID = \"". $z->User_ID ."\"");
            if(empty($a)){
                DB::delete("DELETE FROM accounts where username = \"" . $fields["username"] . "\"");
                return redirect('admin');        
            }
            else{
                return redirect('admin');        
            }
        }
        else{
            return redirect('admin');
        }}}
        else{
            return redirect('admindelete'); 
        }
    }
    
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
