<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\TaskController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\Employee_TaskController;
use App\Http\Controllers\Backend\Issue_TeamController;
use App\Http\Controllers\Backend\DetailsController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\Sub_DepartmentController;
use App\Http\Controllers\Backend\ModuleController;
use App\Http\Controllers\Backend\FeatureController;
use App\Http\Controllers\Backend\IssueController;
use App\Http\Controllers\Backend\TaskIssueController;
use App\Http\Controllers\Backend\ProgressbarController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Employee routes
Route::get('employee/show', [EmployeeController::class, 'EmployeeView'])->name('all.employee');
Route::post('employee/store', [EmployeeController::class, 'EmployeeStore'])->name('add.employee');
Route::get('employee/edit/{id}', [EmployeeController::class, 'EmployeeEdit'])->name('edit.employee');
Route::post('employee/update', [EmployeeController::class, 'EmployeeUpdate'])->name('update.employee');
Route::get('employee/delete/{id}', [EmployeeController::class, 'EmployeeDelete'])->name('delete.employee');



// Client routes
Route::get('client/show', [ClientController::class, 'ClientView'])->name('all.client');
Route::post('client/store', [ClientController::class, 'ClientViewStore'])->name('add.client');
Route::get('client/edit/{id}', [ClientController::class, 'ClientEdit'])->name('edit.client');
Route::post('client/update', [ClientController::class, 'ClientUpdate'])->name('update.client');
Route::get('client/delete/{id}', [ClientController::class, 'ClientDelete'])->name('delete.client');



// Task routes
Route::get('task/show', [TaskController::class, 'TaskView'])->name('all.task');
Route::post('task/store', [TaskController::class, 'TaskStore'])->name('add.task');
 Route::get('task/edit/{id}', [TaskController::class, 'TaskEdit'])->name('edit.task');
// Route::post('employee/update', [EmployeeController::class, 'EmployeeUpdate'])->name('update.employee');
Route::get('task/delete/{id}', [TaskController::class, 'TaskDelete'])->name('delete.task');

////
Route::get('phones/phones', [ProjectController::class, 'phones'])->name('all.issue');

// Project routes
Route::get('project/show', [ProjectController::class, 'ProjectView'])->name('all.project');
Route::post('project/store', [ProjectController::class, 'store'])->name('add.project');
Route::get('project_data/show', [ProjectController::class, 'ProjectDataView'])->name('all.project_data');
Route::get('project_data/edit/{id}', [ProjectController::class, 'EditProjectData'])->name('edit.project_data');
Route::post('project_data/update/{id}', [ProjectController::class, 'UpdateProjectData'])->name('update.project_data');
Route::get('each_project_data/show/{id}', [ProjectController::class, 'EachProjectDataView'])->name('each.project_data_view');
Route::get('project/delete/{id}', [ProjectController::class, 'ProjectDelete'])->name('delete.project');

//All project dashboard route
Route::get('all_project_dashboard/show', [ProjectController::class, 'All_project_dashboard_View'])->name('all_project_dashboard');


//Project's Estimate Date History
Route::get('project_estimate_dateHistory/show', [ProjectController::class, 'ProjectEstimateDateHistory_View'])->name('project_esti.date_history');
// Route::get('project_estimate_dateHistory/show', [ProjectController::class, 'ProjectEstimateDateHistory_Store'])->name('project_esti.date_history');





// Team routes
Route::get('team/show', [TeamController::class, 'TeamView'])->name('all.team');
Route::post('team/store', [TeamController::class, 'TeamStore'])->name('add.team');
Route::get('team/delete/{id}', [TeamController::class, 'TeamDelete'])->name('delete.team');


// // Employe_Task routes
// Route::get('employee_task/show', [Employee_TaskController::class, 'Employee_taskView'])->name('all.employee_task');
// Route::post('employee_task/store', [Employee_TaskController::class, 'Employee_taskStore'])->name('add.employee_task');
// Route::get('employee_task/delete/{id}', [Employee_TaskController::class, 'Employee_taskDelete'])->name('delete.employee_task');



// Employee Wise data show page
// Route::get('details/show', [DetailsController::class, 'DetailsView'])->name('all.details');
Route::post('details/store', [DetailsController::class, 'DetailsStore'])->name('add.details');


// // Project Wise data show page
// Route::get('details/show', [DetailsController::class, 'ProjectWiseView'])->name('all.details');
Route::post('project_details/store', [DetailsController::class, 'ProjectWiseInput'])->name('add.project_details');




// Department routes
Route::get('department/show', [DepartmentController::class, 'DepartmentView'])->name('all.department');
Route::post('department/store', [DepartmentController::class, 'DepartmentStore'])->name('add.department');
Route::get('department/delete/{id}', [DepartmentController::class, 'DepartmentDelete'])->name('delete.department');


//SubDepartment routes
Route::get('sub_department/show', [Sub_DepartmentController::class, 'Sub_DepartmentView'])->name('all.sub_department');
Route::post('sub_department/store', [Sub_DepartmentController::class, 'Sub_DepartmentStore'])->name('add.sub_department');
Route::get('sub_department/delete/{id}', [Sub_DepartmentController::class, 'Sub_DepartmentDelete'])->name('delete.sub_department');


//Module routes
Route::get('module/show', [ModuleController::class, 'ModuleView'])->name('all.module');
Route::post('module/store', [ModuleController::class, 'ModuleStore'])->name('add.module');
Route::get('module/delete/{id}', [ModuleController::class, 'ModuleDelete'])->name('delete.module');



//Features routes
Route::get('feature/show', [FeatureController::class, 'FeatureView'])->name('all.feature');
Route::post('feature/store', [FeatureController::class, 'FeatureStore'])->name('add.feature');
Route::get('feature/delete/{id}', [FeatureController::class, 'FeatureDelete'])->name('delete.feature');
Route::get('/feature/get_module/{id}', [FeatureController::class, 'getModules'])->name('modules.get');
Route::get('/feature/module/ajax/{project_id}', [FeatureController::class, 'GetFeature'])->name('modules.get');




//Issue routes
Route::get('issue/show', [IssueController::class, 'IssueView'])->name('all.issue');
Route::post('issue/store', [IssueController::class, 'IssueStore'])->name('add.issue');
Route::get('issue/delete/{id}', [IssueController::class, 'IssueDelete'])->name('delete.issue');



//Task Issue routes
Route::get('task_issue/show', [TaskIssueController::class, 'TaskIssueView'])->name('all.task_issue');
Route::post('task_issue/store', [TaskIssueController::class, 'TaskIssueStore'])->name('add.task_issue');
Route::get('task_issue/delete/{id}', [TaskIssueController::class, 'TaskIssueDelete'])->name('delete.task_issue');




//Progressbar routes
 Route::post('progressbar/store', [ProgressbarController::class, 'ProgressbarStore'])->name('add.progressbar');
// Route::get('client/edit/{id}', [ProgressbarController::class, 'ClientEdit'])->name('edit.client');
// Route::post('client/update', [ClientController::class, 'ClientUpdate'])->name('update.client');
// Route::get('client/delete/{id}', [ProgressbarController::class, 'ClientDelete'])->name('delete.client');
