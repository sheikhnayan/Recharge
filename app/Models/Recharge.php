<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{
    use HasFactory;

    protected $fillable = [
        'operator',
        'number',
        'amount',
        'recharge_id',
        'user_id',
        'status'
    ];
}
