<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;






    public function tasked(){
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }






}
