<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Issue;
use App\Models\Task;
use Carbon\Carbon;



class IssueController extends Controller
{



    public function IssueView(){
        $tasks = Task::all();
        $issues = Issue::all();
        return view('issue.view_issue',compact('issues','tasks'));
    }



//Issue store
public function IssueStore(Request $request){

    $request->validate([
        'task_id' => 'required',
        'name' => 'required',
        'type' => 'required',
        'date' => 'required',
        'time' => 'required',
        'issued_by' => 'required',

    ]);



    Issue::insert([
        'task_id' => $request->task_id,
        'name' => $request->name,
        'type' => $request->type,
        'date' => $request->date,
        'time' => $request->time,
        'issued_by' => $request->issued_by,

            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back();
   }




   public function IssueDelete($id)
   {
       $issue_delete = Issue::find($id)->delete();
       return redirect()->back();
   }


}
