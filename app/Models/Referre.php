<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referre extends Model
{
    protected $fillable = [
        'email','bonus','referral_paid_count','withdrawal_request','request_status',
    ];
}
