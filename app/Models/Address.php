<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country', 'state', 'city', 'postal_code', 'street_1', 'street_2'
    ];


    public function property()
    {
    	return $this->hasOne(Property::class);
    }
}
