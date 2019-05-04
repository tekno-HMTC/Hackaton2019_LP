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
    protected $table = 'specializations';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'short', 'path_logo',  'description',
    ];

    public function courses(){
        return $this->hasMany('App\Models\Course');
    }

    public function wishes(){
        return $this->hasMany('App\Models\Wish');
    }
}
