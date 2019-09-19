<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "stripe_id",
        "exp_month",
        "exp_year",
        "last4",
        "user_id"
    ];
}
