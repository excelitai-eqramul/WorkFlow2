<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Department extends Model
{
    use HasFactory;



    public function departmentt(){
        return $this->belongsTo(Department::class,'department_id','id');
    }


}
