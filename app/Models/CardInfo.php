<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_holder_name', 'card_number', 'expiry_month', 'expiry_year', 'cvc'
    ];
}
