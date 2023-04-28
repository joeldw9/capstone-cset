<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'review';
    protected $fillable = [
        'username',
        'Order_ID',
        'Review',
        'Rating'
    ];
}
