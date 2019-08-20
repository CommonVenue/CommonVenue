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
        'image',
        'price',
        'status',
        'address_id',
        'owner_id'
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
