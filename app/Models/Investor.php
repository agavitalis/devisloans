<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    protected $fillable = [
        
        'user','series', 'date_invested', 'date_cashout','amount_invested','rate','roi','maintenace_fee','withdrawable_bal',
        'cashout_request','cashout_mode','request_status','fully_merged','visibility','finalized_on'

    ];

}
