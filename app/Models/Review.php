<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $with = ['user'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','parent_id','text'
    ];


    /**
     * Get the property that owns the review.
     */
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
    /**
     * Get the property that owns the review.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
