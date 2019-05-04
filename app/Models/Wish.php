<?php

namespace App\Models;

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
        return $this->belongsTo('App\Models\Specialization');
    }

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }

    public function module(){
        return $this->belongsTo('App\Models\Module');
    }

    public function chapter(){
        return $this->belongsTo('App\Models\Chapter');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
