<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkingHours extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'day',
        'from_time',
        'to_time',
        'property_id'
    ];

    /**
     * The working hours that belong to the property.
     */
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
