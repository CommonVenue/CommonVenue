<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'image'
    ];

    /**
     * Get the reviews for the property.
     */
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
