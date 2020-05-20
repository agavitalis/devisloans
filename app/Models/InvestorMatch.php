<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestorMatch extends Model
{
    protected $fillable = [
        'pro_investor','investor','amount','status','evidence','lend_code'
    ];
}

