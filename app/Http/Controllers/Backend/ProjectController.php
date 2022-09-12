<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Project;
use App\Models\Task;
use App\Models\Progressbar;
use App\Models\Projects_date_history;
use Facade\FlareClient\Http\Response;

use Illuminate\Http\Request;
use Illuminate\Support\File;
use Intervention\Image\Facades\Image;


use Carbon\Carbon;


class ProjectController extends Controller
{


    public function ProjectView()
    {
        $projects = Project::all();
        $employees = Employee::all();
        $clients = Client::all();
        $departments = Department::all();

        return view('project.view_project', compact('projects', 'employees', 'clients', 'departments'));
    }


    //Project store
    public function store(Request $request)
    {

        $request->validate([
            //'name' => 'required',
        ]);


        $request->validate([
            // 'title' => 'required',
            // 'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'description' => 'required',
        ]);


        $path = $request->file('upload_image')->store('public/images/');
        $path2 = $request->file('upload_image')->store('public/images/');

        $project = new Project();
        $project->project_id = $request->project_id;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->category = $request->category;
        $project->department_id = $request->department_id;
        $project->start_date = $request->start_date;
        $project->deadline = $request->deadline;
        $project->assign_employee = $request->assign_employee;
        $project->notification = $request->notification;
        //$project->upload_image = $request->upload_image;
        //$project->upload_document = $request->upload_document;
        $project->priority = $request->priority;
        $project->status = $request->status;
        $project->budget = $request->budget;
        $project->client_id = $request->client_id;
        $project->upload_image = $path;
        $project->upload_document = $path2;
        $project->save();



        foreach ($request->progressbar_name as $key => $progessbar) {

            $expenseItemData = array(
                'project_id' => $project->id,
                'progressbar_name' => $progessbar['progressbar_name'],
                'percentage' => $progessbar['percentage'],
                'date_from' => $progessbar['date_from'],
                'date_to' => $progessbar['date_to'],
                'time_from' => $progessbar['time_from'],
                'time_to' => $progessbar['time_to'],
                'estimate' => $progessbar['estimate'],
            );

            $bfdgb = Progressbar::create($expenseItemData);
        }





        $data = Projects_date_history::insert([
            'project_id' => $request->project_id,
            'name' => $request->name,
            'start_date' => $request->start_date,
            'deadline' => $request->deadline,
        ]);



        return redirect()->to('project_data/show');


    }



    public function ProjectDataView()
    {
        $projects = Project::all();
        return view('project.view_projectData', compact('projects'));
    }



    public function EachProjectDataView($id)
    {
        $each_project_data_view = Project::find($id);
        return view('project.each_project_view', compact('each_project_data_view'));
    }



    // All_project_dashboard_View
    public function All_project_dashboard_View()
    {
        $projects = Project::all();
        $progressbar = Progressbar::all();

        $clients = Client::all();
        $departments = Department::all();

        return view('project.all_project_dashboard', compact('projects', 'progressbar', 'clients', 'departments'));
    }



    public function EditProjectData($id)
    {
        $project_edit = Project::find($id);
        $employees = Employee::all();
        $clients = Client::all();
        $departments = Department::all();
        return view('project.edit_projectData', compact('project_edit','employees','clients','departments'));
    }



//Project update
public function UpdateProjectData(Request $request, $id)
{

    // $request->validate([
    //     //'name' => 'required',
    // ]);


    $request->validate([
        // 'title' => 'required',
        // 'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // 'description' => 'required',
    ]);


    // $path = $request->file('upload_image')->store('public/images/');
    // $path2 = $request->file('upload_image')->store('public/images/');

    $project = Project::find($id);
    $project->project_id = $request->project_id;
    $project->name = $request->name;
    $project->description = $request->description;
    $project->category = $request->category;
    $project->department_id = $request->department_id;
    $project->start_date = $request->start_date;
    $project->deadline = $request->deadline;
    $project->assign_employee = $request->assign_employee;
    $project->notification = $request->notification;
    //$project->upload_image = $request->upload_image;
    // $project->upload_document = $request->upload_document;
    $project->priority = $request->priority;
    $project->status = $request->status;
    $project->budget = $request->budget;
    $project->client_id = $request->client_id;
    // $project->upload_image = $path;
    // $project->upload_document = $path2;
    $project->save();



    //dd($project);
    foreach ($request->progressbar_name as $key => $progessbar) {

        $expenseItemData = array(
            'project_id' => $project->id,
            'progressbar_name' => $progessbar['progressbar_name'],
            'percentage' => $progessbar['percentage'],
            'date_from' => $progessbar['date_from'],
            'date_to' => $progessbar['date_to'],
            'time_from' => $progessbar['time_from'],
            'time_to' => $progessbar['time_to'],
            'estimate' => $progessbar['estimate'],
        );

        $bfdgb = Progressbar::create($expenseItemData);
    }








        $data = Projects_date_history::insert([
            'project_id' => $request->project_id,
            'name' => $request->name,
            'start_date' => $request->start_date,
            'deadline' => $request->deadline,
        ]);







    return redirect()->to('project_data/show');
}



// All_project_dashboard_View
public function ProjectEstimateDateHistory_View()
{
    $projects = Project::all();
    $progressbar = Progressbar::all();

    $clients = Client::all();
    $departments = Department::all();

    return view('project.project_estimate_dateHistory.estimate_dateHistory', compact('projects', 'progressbar', 'clients', 'departments'));
}







    public function ProjectDelete($id)
    {
        $project_delete = Project::find($id)->delete();
        return redirect()->back();
    }





}
