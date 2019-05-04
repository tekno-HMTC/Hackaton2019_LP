<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'specialization_id', 'name', 'description',
    ];

    public function specialization(){
        return $this->belongsTo('App\Specialization');
    }

    public function wishes(){
        return $this->hasMany('App\Wish');
    }

    public function chapters(){
        return $this->hasMany('App\Chapter');
    }
}
