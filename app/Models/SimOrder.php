<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'operator',
        'first_name',
        'last_name',
        'gender',
        'dob',
        'codice',
        'offer',
        'sim_id',
        'reseller_id',
        'alt_operator',
        'alt_iccid',
        'alt_sim_number',
        'iccid',
        'sim_number',
        'file',
        'price',
        'file_2'
    ];
}
