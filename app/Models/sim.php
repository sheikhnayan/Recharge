<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sim extends Model
{
    use HasFactory;

    protected $fillable = [
        'operator',
        'iccid',
        'sim_number',
        'buy_date',
        'buy_price',
        'status',
        'reseller_id'
    ];
}
