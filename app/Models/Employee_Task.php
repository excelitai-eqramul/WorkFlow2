<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Task extends Model
{
    use HasFactory;



    public function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }


    public function module(){
        return $this->belongsTo(Module::class,'module_id','id');
    }



    public function feature(){
        return $this->belongsTo(Feature::class,'feature_id','id');
    }




}
