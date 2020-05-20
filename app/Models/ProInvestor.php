<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProInvestor extends Model
{
    protected $fillable = [
        'user','series','amount','status','fully_matched','lend_code'
    ];
}
