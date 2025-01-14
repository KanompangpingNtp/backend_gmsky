<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_type_id',
        'date',
        'title_name',
        'topic_name',
        'details',
    ];

    public function postType()
    {
        return $this->belongsTo(PostType::class);
    }

    public function postPhotos()
    {
        return $this->hasMany(PostPhoto::class);
    }

    public function postPdf()
    {
        return $this->hasOne(PostPdf::class);
    }

    public function postVideo()
    {
        return $this->hasOne(PostVideo::class);
    }
}
