<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paypal extends Model
{
    use HasFactory;
    public $timestamp = false;
    public $updated_at = false;
    public $created_at = false;
    protected $table = 'payments';
    protected $fillable = [
        'User_ID',
        'card_number',
        'exp_date',
        'CVC',
        'zip_code',
    ];
}
