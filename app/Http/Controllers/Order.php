<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
session_start();
class Order extends Controller
{
    public function order(Request $request)
{   
    

    if([1 == 1]){
        // $type = $request->input('type');
        $price = $request->input('price');
        $description = $request->input('description');
        $ID = "CU" . random_int(100000, 999999);

        if($price==254.99){
            $type='Physical Repair';
        }
        else if ($price==149.99){
            $type='Tune-Up';
        }
        else if($price==99.99){
            $type='Virus Removal';
        }
        else if($price==599.99){
            $type='Data Recovery';
        }

        orders::create(['Status' => 'Ordered', 'User_ID' => $_SESSION['User_ID'], 'Order_ID' => $ID, 'Price' => $price, 'Description' => $description, 'Type' => $type]);
        return redirect('/customers');
    }
}

}
