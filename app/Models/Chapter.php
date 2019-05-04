<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id','name', 'description',
    ];

    public function modules(){
        return $this->hasMany('App\Models\Module');
    }

    public function wishes(){
        return $this->hasMany('App\Models\Wish');
    }

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
