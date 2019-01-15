<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'job_type_id', 'from', 'to', 'currency', 'location', 'category_id', 'description', 'verify'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function job_type()
    {
        return $this->hasOne(JobType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function applies()
    {
        return $this->hasMany(Apply::class);
    }
}
