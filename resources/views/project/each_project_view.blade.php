AAAAAAAA

@extends('main_master')

@section('content')
    <style>
        label {

            font-weight: bold;
            color: #3E0E40;
        }
    </style>



    <div>
        <div class="row" style="margin-left: 300px">

            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project ID</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->project_id }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Name</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Description</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->description }}
                    </div>
                </div>



                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Category</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->category }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Departments</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->department->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">SubDepartments</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->department->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Start Date</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->start_date }}
                    </div>
                </div>



                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Deadline</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->deadline }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label class="col-sm-4 col-form-label">Project Assign Person</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->employeee->name }}
                    </div>
                </div>



            </div>



            {{--
                $table->string('project_id')->nullable();
                $table->string('name')->nullable();
                $table->string('description')->nullable();
                $table->string('category')->nullable();
                $table->string('department_id')->nullable(); //foreign key
                $table->string('start_date')->nullable();
                $table->string('deadline')->nullable();
                $table->string('assign_employee')->nullable(); //foreign key
                $table->string('notification')->nullable();
                $table->string('upload_image')->nullable();
                $table->string('upload_document')->nullable();
                $table->string('priority')->nullable();
                $table->string('status')->nullable();
                $table->string('budget')->nullable();
                $table->string('client_id')->nullable(); //foreign key
                --}}






            <div class="col-lg-1 col-md-1 col-sm-1">
            </div>



            <div class="col-lg-5 col-md-5 col-sm-12">

                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Documents</label>
                    <div class="col-sm-5">

                    </div>
                </div>

                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Priority</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->priority }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Status</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->status }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Budget</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->budget }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Client</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->employeee->name }}
                    </div>
                </div>



                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Notifications</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view->notification }}
                    </div>
                </div>


            </div>
        </div>

    </div>






    {{-- Prgrssbar for Each Project --}}

    <div class="col-md-12" id="buldingFlatContainer" style="margin-left: 300px">
        <div class="singleitems">


            <h6 style="margin-top: 90px; margin-bottom: 30px; font-weight:bold">Task Progressbar</h6>

            @foreach ($each_project_data_view->progressbar as $item)
                <div class="row" style="margin-left: 200px">
                    <div class="col-sm-2">
                        <p> {{ optional($item)->progressbar_name }}:</p>
                    </div>

                    <div class="col-sm-1">
                        <p>{{ optional($item)->percentage }}%</p>
                    </div>

                    <div class="col-sm-1" style="margin-left: 40px">
                        <div class="progress progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                            style="width:{{ optional($item)->percentage }}">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    {{-- Prgrssbar for Each Project End --}}


    <div class="col-12" style="margin:70px 1100px">
        <button type="submit" class="btn btn-primary active">
            Add Project
        </button>


    </div>


    </div>
@endsection
