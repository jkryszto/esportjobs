<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'logo', 'employees', 'location', 'url', 'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
