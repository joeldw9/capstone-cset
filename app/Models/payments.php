<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;
    public $timestamp = false;
    protected $fillable = [
        'Order_ID',
        'User_ID',
        'payment_method',
        'Price',
        'card_number',
        'exp_date',
        'CVC',
        'zip_code',
    ];
}
