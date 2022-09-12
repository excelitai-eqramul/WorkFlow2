<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Project;

use Carbon\Carbon;



class ModuleController extends Controller
{

    public function ModuleView()
    {
        $modules = Module::all();
        $projects = Project::all();
        return view('module.view_module', compact('modules', 'projects'));
    }



    //Issue store
    public function ModuleStore(Request $request)
    {

        $request->validate([
            'project_id' => 'required',
            'name' => 'required',
        ]);



        Module::insert([
            'project_id' => $request->project_id,
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back();
    }


    public function ModuleDelete($id)
    {
        $module_delete = Module::find($id)->delete();
        return redirect()->back();
    }
}
