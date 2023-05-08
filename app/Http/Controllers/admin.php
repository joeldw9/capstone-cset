<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
session_start();

class admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function approve(Request $request){
        $fields = $request->validate([
            'username' => 'required|string',
        ]);
        DB::table('accounts')->where('username', $fields["username"])->update(['approvalstatus' => 'Approved']);
        return redirect('admin');
    }

    public function cancel(Request $request){
        $fields = $request->validate([
            'Order_IDcancel' => 'required|string',
        ]);
        DB::table('orders')->where('Order_ID', $fields["Order_IDcancel"])->delete();
        return redirect('admin');
    }

    public function assign(Request $request){
        $username = $request->input('eusername');
        $Order_ID = $request->input('Order_ID');
        DB::table('orders')->where('Order_ID', $Order_ID)->update(['Status' => 'Approved']);
        DB::table('orders')->where('Order_ID', $Order_ID)->update(['Employee_ID' => $username]);
        return redirect('admin');
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
