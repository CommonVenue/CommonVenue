<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
        
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The roles that belong to the user.
     */
    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
}
