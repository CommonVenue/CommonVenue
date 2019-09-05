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
        'country',
        'city',
        'state',
        'unit',
        'postal_code',
        'address_1',
        'address_2',
        'longitude',
        'latitude',
    ];


    public function property()
    {
    	return $this->hasOne(Property::class);
    }
}
