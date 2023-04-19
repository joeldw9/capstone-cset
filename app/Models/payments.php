<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;
    public $timestamp = false;
    public $updated_at = false;
    public $created_at = false;
    protected $table = 'payments';
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
