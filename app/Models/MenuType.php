<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuType extends Model
{
    use HasFactory;

    protected $fillable = [
        'each_agency_systems_id',
        'menu_type_name',
    ];

    public function eachAgencySystem()
    {
        return $this->belongsTo(EachAgencySystem::class, 'each_agency_systems_id', 'id');
    }

    public function postTypes()
    {
        return $this->hasMany(PostType::class);
    }
}
