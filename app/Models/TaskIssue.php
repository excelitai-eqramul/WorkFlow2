<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskIssue extends Model
{
    use HasFactory;


    public function tasked(){
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }

    public function issued(){
        return $this->belongsTo(Issue::class, 'issue_id', 'id');
    }








}
