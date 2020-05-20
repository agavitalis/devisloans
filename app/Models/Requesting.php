<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requesting extends Model
{
    protected $fillable = [
        'first_name','last_name','phone','email','country','business_name','body','profession','request_type'
    ];
}
