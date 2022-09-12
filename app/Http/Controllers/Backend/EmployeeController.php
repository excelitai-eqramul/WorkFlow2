<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Task;
use App\Models\Team;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use Carbon\Carbon;

class EmployeeController extends Controller
{


    public function EmployeeView(){
        $employees = Employee::all();
        $tasks = Task::orderBy('name','ASC')->get();
        $teams = Team::orderBy('name','ASC')->get();

        return view('employee.view_employee',compact('employees','tasks','teams'));
    }


// employee store
public function EmployeeStore(Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'address' => 'required',

    ]);
        Employee::insert([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,


            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back();
   }



   public function EmployeeEdit($id){
    $employee_edit = Employee::find($id);
    return view('employee.edit_employee',compact('employee_edit'));
}

public function EmployeeUpdate(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'address' => 'required'

    ]);

    Employee::where('id', $request->emp_id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'created_at' => Carbon::now(),
    ]);

    return redirect()->to('project_data/show');
}



public function EmployeeDelete($id){
    $employee_delete = Employee::find($id)->delete();
    return redirect()->back();
}


}
