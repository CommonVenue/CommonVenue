<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    protected $table = 'contact_persons';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "first_name",
        "last_name",
        "contact_number",
        "image",
    ];

    /**
     * Get the user that owns the phone.
     */
    public function property()
    {
        return $this->hasOne('App\Models\Property');
    }

}
