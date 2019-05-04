<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'specialization_id', 'module_id', 'chapter_id', 'user_id', 'content', 'status',
    ];

    public function specialization(){
        return $this->belongsTo('App\Specialization');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function module(){
        return $this->belongsTo('App\Module');
    }

    public function chapter(){
        return $this->belongsTo('App\Chapter');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
