<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;

class Order extends Controller
{
    public function order(Request $request)
{
    if([1 == 1]){
        $price = $request->input('price');
        $ID = "CU" . random_int(100000, 999999);
        orders::create(['Status' => 'Ordered', 'User_ID' => 'test', 'Order_ID' => $ID, 'Price' => $price]);
        return redirect('/');
    }
}

}
