<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $fillable = [
        'series_name','amount', 'interest_rate','total_interest','duration',
        'maintenance_fee','active'
    ];

}
