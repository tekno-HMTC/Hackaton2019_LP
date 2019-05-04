<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'module_id','name', 'description',
    ];

    public function modules(){
        return $this->hasMany('App\Module');
    }

    public function wishes(){
        return $this->hasMany('App\Wish');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }
}
