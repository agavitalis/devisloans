<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BitcoinAddress extends Model
{
    protected $fillable = [
        
        'wallet_address','wallet_type','active',

    ];
}
