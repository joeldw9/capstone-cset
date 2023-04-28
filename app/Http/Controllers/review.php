<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\reviews;
session_start();
class review extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function review(Request $request){
        $fields = $request->validate([
            'username' => 'required|string',
            'Order_ID' => 'required|string',
            'Review' => 'required|string',
            'Rating' => 'required|string',
        ]);
        if($fields["username"]==$_SESSION["username"]){
            $x = DB::select("SELECT Order_ID from orders where User_ID = \"". $_SESSION["User_ID"] ."\" AND Status = 'Finished'");
            if(!empty($x)){
                $y = DB::select("SELECT Order_ID from review where Order_ID = \"". $fields["Order_ID"] ."\"");
                if(empty($y)){
                    reviews::create(['username' => $fields['username'], 'Order_ID' => $fields['Order_ID'], 'Review' => $fields['Review'], 'Rating' => $fields['Rating']]);    
                }
            }
        }
        return view('/customers');
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
