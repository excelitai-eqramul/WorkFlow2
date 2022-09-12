<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }

    public function feature()
    {
        return $this->hasOne(Feature::class, 'module_id', 'id');
    }
}
