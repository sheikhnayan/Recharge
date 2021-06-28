<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'operator',
        'offer',
        'costo',
        'ricarica',
        'valida',
        'internet',
        'minuti',
        'minuti_internazionale',
        'minuti_illimitati',
        'minuti_internazionali_validi',
        'altre_informazioni'
    ];
}
