<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Task;
use App\Models\Project;
use App\Models\Team;
use App\Models\Employee_Task;
use App\Models\Details;
use App\Models\Feature;
use App\Models\Module;

class DetailsController extends Controller
{


    //Employee wise search
    public function DetailsStore(Request $request)
    {

        $request->validate([

            'employee_id' => 'required',

            // 'project_id' => 'required',


        ]);

        //For Employee Search
        $id = $request->employee_id;
        $task = Task::where('employee_id', $id)->get();
        $emp = Employee::find($id);


        // dd($task);
        return view('details.show_emp_details', compact('task', 'emp'));


        return Redirect()->back();
    }




 //Project wise search
 public function ProjectWiseInput(Request $request)
 {

     $request->validate([

         'project_id' => 'required',
     ]);


     //For Project Search
     $id = $request->project_id;
     $ptasks = Task::where('project_id', $id)->get();
     $pro = Project::find($id);

     // dd($task);
     return view('details.show_project_details', compact('pro','ptasks'));


     return Redirect()->back();
 }



}
