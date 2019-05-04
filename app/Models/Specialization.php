<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];

    public function courses(){
        return $this->hasMany('App\Course');
    }

    public function wishes(){
        return $this->hasMany('App\Wish');
    }
}
