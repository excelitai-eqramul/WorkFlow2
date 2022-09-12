<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;


    // public function departmentt(){
    //     return $this->belongsTo(Department::class,'parent_id','id');
    // }



    public function parent()
    {
       return $this->hasone(Department::class,'id','parent_id');
    }




}
