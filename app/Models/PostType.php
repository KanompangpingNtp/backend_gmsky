<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_type_id',
        'type_name',
    ];

    public function menuType()
    {
        return $this->belongsTo(MenuType::class);
    }

    public function postDetails()
    {
        return $this->hasMany(PostDetail::class);
    }
}
