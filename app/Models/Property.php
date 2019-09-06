<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

class Property extends Model
{
    use Favoriteable;

	protected $with = ['address'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'adult',
        'wifi_name',
        'wifi_password',
        'location_description',
        'canceling_description',
        'image',
        'price',
        'status',
        'address_id',
        'owner_id',
        'category_id'
    ];

    public function owner()
    {
    	return $this->belongsTo(User::class);
    }

    public function address()
    {
    	return $this->belongsTo(Address::class);
    }

    /**
     * Get the reviews for the property.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Get the phone record associated with the user.
     */
    public function booking()
    {
        return $this->hasOne(Booking::class);
    }

    /**
     * The roles that belong to the user.
     */
    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the working hours for the property.
     */
    public function working_hours()
    {
        return $this->hasMany(WorkingHours::class);
    }
}
