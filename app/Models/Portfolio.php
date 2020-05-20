<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'user_id','bank','phone','account_name','account_number',
        'bitcoin_wallet','ethereum_wallet','country','state', 'street','id_card','id_card_back','social'
    ];



}
