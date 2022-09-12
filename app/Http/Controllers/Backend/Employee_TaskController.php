<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Task;
use App\Models\Project;
use App\Models\Team;
use App\Models\Employee_Task;


class Employee_TaskController extends Controller
{



    public function Employee_taskView(){
        $employee_tasks = Employee_Task::all();
        $employeess = Employee::orderBy('name','ASC')->get();
        $tasks = Task::orderBy('name','ASC')->get();
        $issues = Project::orderBy('name','ASC')->get();
        $teams = Team::orderBy('name','ASC')->get();
        return view('employee_task.view_employee_task',compact('employeess','tasks','issues','teams','employee_tasks'));
    }




//Issue store
public function Employee_taskStore(Request $request){

    $request->validate([

        'employee_id' => 'required',
        'task_id' => 'required',
        'issue_id' => 'required',
        'team_id' => 'required',

    ]);



    Employee_Task::insert([

            'employee_id' => $request->employee_id,
            'task_id' => $request->task_id,
            'issue_id' => $request->issue_id,
            'team_id' => $request->team_id,

        ]);

        return Redirect()->back();
   }




   public function Employee_taskDelete($id){
    $employee_task_delete = Employee_Task::find($id)->delete();
    return redirect()->back();

}





}
