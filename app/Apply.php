<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable = [
        'name', 'email', 'description', 'cv'
    ];

    public function job()
    {
        return $this->hasOne(Job::class);
    }
}
