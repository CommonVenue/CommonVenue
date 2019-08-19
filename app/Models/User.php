<?php

namespace App\Models;

use Laravel\Cashier\Billable;
use Illuminate\Notifications\Notifiable;
use ChristianKuri\LaravelFavorite\Traits\Favoriteability;
use ChristianKuri\LaravelFavorite\Models\Favorite;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Billable;
    use Notifiable;
    use Favoriteability;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 
        'last_name', 
        'avatar', 
        'description', 
        'country', 
        'postal_code', 
        'industry', 
        'job_title', 
        'organization', 
        'email', 
        'phone_number',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

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
     * Define a one-to-many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'user_id');
    }

}
