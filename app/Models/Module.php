<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'chapter_id', 'name', 'description',
    ];

    public function materials(){
        return $this->hasMany('App\Models\Material');
    }

    public function wishes(){
        return $this->hasMany('App\Models\Wish');
    }

    public function chapter(){
        return $this->belongsTo('App\Models\Chapter');
    }
}
