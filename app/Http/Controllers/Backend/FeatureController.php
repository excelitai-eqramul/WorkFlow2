<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Feature;
use App\Models\Module;
use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;


class FeatureController extends Controller
{

    public function FeatureView()
    {
        $projects = Project::all();
        $features = Feature::all();
        $modules = Module::all();

        return view('feature.view_feature', compact('features','modules','projects'));
    }


    public function store(Request $req)
    {

        $engData = [
            'project_id' => $req->project_id,
            'module_id' => $req->module_id,
            'name' => $req->name,

        ];


        Feature::create($engData);
        return response()->json([
            'status' => 200
        ]);

    }


    public function getModules($id)
    {

        $modules = Module::where('project_id', $id)->get();
        return json_encode($modules);
    }


//sub auto complate category method
public function GetFeature($module_id)
{

    $feature = Feature::where('module_id', $module_id)->orderBy('name', 'ASC')->get();
    return json_encode($feature);
} // end mathod




    //fetch all Features
    public function fetchAll()
    {
        $engs = Feature::all();
        $output = '';
        if($engs->count() > 0)
        {
            $output .= '<table class = "table table-striped table-sm align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Project Name</th>
                    <th>Module Name</th>
                    <th>Feature Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
            foreach($engs as $eng)
            {
              $output .= '<tr>
              <td>' .$eng->id. '</td>
              <td>' .$eng->project_id. '</td>
              <td>' .$eng->module_id. '</td>
              <td>' .$eng->name. '</td>
              <td>
                <a href="#" id="' .$eng->id. '" class = "text-success mx-1 editIcon" data-bs-toggle = "modal" data-bs-target = "#editEngineerModal"><i class = "bi-pencil-square h4"></i></a>

                <a href="#" id="' .$eng->id. '" class = "text-danger mx-1 deleteIcon"><i class = "bi-trash h4"></i></a>
              </td>
            </tr>';
            }
            $output .= '</tbody>
            </table>';
            echo $output;
        }
        else
        {
            echo '<h1 class = "text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }





 // store Feature
 public function FeatureStore(Request $request){

    $featureData = [
        'project_id' => $request->project_id,
        'module_id' => $request->module_id,
        'name' => $request->name,

    ];


    Feature::create($featureData);
    return response()->json([
        'status' => 200
    ]);

  } // end method




    public function FeatureDelete($id){
        $feature_delete = Feature::find($id)->delete();
        return redirect()->back();

    }






}
