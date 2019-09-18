<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyCategory extends Model
{
	protected $table = 'property_categories';
  	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'property_id'
    ];

    public function property()
    {
    	return $this->belongsTo(Property::class);
    }

    
    /**
     * Get the booking that owns the category.
     */
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
