<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'accounts';
    protected $primaryKey = 'User_ID';
    protected $fillable = [
        'username',
        'password',
        'email',
        'User_ID',
        'role',
        'approvalstatus',
        'requestingdeletion'
    ];
}
