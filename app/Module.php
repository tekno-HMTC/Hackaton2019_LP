<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'name', 'description',
    ];

    public function materials(){
        return $this->hasMany('App\Material');
    }

    public function wishes(){
        return $this->hasMany('App\Wish');
    }

    public function chapter(){
        return $this->belongsTo('App\Chapter');
    }
}
