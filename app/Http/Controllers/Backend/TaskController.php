<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Project;
use App\Models\Department;
use App\Models\Module;
use App\Models\Feature;
use App\Models\Sub_Department;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\File;
use Intervention\Image\Facades\Image;



use Carbon\Carbon;


class TaskController extends Controller
{


    public function TaskView()
    {
        $employees = Employee::all();
        $projects = Project::all();
        $modules = Module::all();
        $features = Feature::all();
        $departments = Department::all();
        $tasks = Task::with('departmentt.parent')->get();
        // dd($tasks);
        return view('task.view_task', compact('employees', 'projects', 'departments', 'tasks', 'modules', 'features'));
    }


    // Task store
    public function TaskStore(Request $request)
    {

        $request->validate([
            'employee_id' => 'required',
            // 'project_id' => 'required',
            // 'module_id' => 'required',
            // 'feature_id' => 'required',
            // 'department_id' => 'required',
            'name' => 'required',
            'start_date' => 'required',
            'dead_line' => 'required',
            'end_date' => 'required',
            'progressbar' => 'required',
            'status' => 'required',
            'type' => 'required',
            'priority' => 'required',
            'work_duration' => 'required',
            'working_time' => 'required',
            // 'tag' => 'required',
            'image' => 'required',

        ]);


        // for image
        $file = $request->file('image');
        $extension = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
        Image::make($file)->resize(500, 500)->save('images/' . $extension);
        $save_url = 'images/' . $extension;
        $task = new Task;
        $task->employee_id = $request->employee_id;
        $task->project_id = $request->project_id;
        $task->module_id = $request->module_id;
        $task->feature_id = $request->feature_id;
        $task->department_id = $request->department_id;
        $task->name = $request->name;
        $task->start_date = $request->start_date;
        $task->dead_line = $request->dead_line;
        $task->end_date = $request->end_date;
        $task->progressbar = $request->progressbar;
        $task->status = $request->status;
        $task->type = $request->type;
        $task->priority = $request->priority;
        $task->work_duration = $request->work_duration;
        $task->working_time = $request->working_time;
        $task->tag = $request->tag;
        $task->image = $save_url;
        $task->save();


        return redirect()->back();
    }




    //    public function TaskEdit($id){
    //     $employee_edit = Employee::find($id);
    //     return view('employee.edit_employee',compact('employee_edit'));
    // }



    public function TaskDelete($id)
    {
        $task_delete = Task::find($id)->delete();
        return redirect()->back();
    }
}
