<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progressbar extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function projects(){
        return $this->belongsTo(Project::class,'id','project_id');
    }
}
