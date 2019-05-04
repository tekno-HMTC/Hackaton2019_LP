<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    const TYPE_VIDEO = 'VIDEO';
    const TYPE_IMAGE = 'IMAGE';
    const TYPE_HTML = 'HTML';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'module_id', 'name', 'video_path', 'image_path', 'html', 'active', 'type',
    ];

    public function module(){
        return $this->belongsTo('App\Models\Module');
    }
}
