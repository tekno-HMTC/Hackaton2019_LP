<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'chapter_id', 'name', 'video_path', 'image_path', 'html', 'active', 'type',
    ];

    public function module(){
        return $this->belongsTo('App\Module');
    }
}
