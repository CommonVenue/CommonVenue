<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'avatar', 'phone_number', 'description','country','postal_code', 'industry', 'job_title', 'organization'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
