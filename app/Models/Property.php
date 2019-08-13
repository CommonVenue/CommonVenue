<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
	protected $with = ['address'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description','image', 'price', 'status', 'address_id','owner_id'
    ];


    public function owner()
    {
    	return $this->belongsTo(User::class);
    }

    public function address()
    {
    	return $this->belongsTo(Address::class);
    }
}
