<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EachAgencySystem extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        // 'each_agency_status'
    ];

    public function menuTypes()
    {
        return $this->hasMany(MenuType::class, 'each_agency_systems_id', 'id');
    }

}
