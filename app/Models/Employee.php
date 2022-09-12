<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

protected $fillable=[

'name',
'email',
'address'

];


    public function tasks(){
        return $this->belongsTo(Task::class,'task_id','id');
    }


    public function team(){
        return $this->belongsTo(Team::class,'team_id','id');
    }








    

}
