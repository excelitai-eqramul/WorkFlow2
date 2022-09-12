@extends('main_master')

@section('content')
    <style>
        .btn-sm {

            font-size: 13px;

        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
            </div>

            {{-- Employee wise search Start --}}
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card" style="height: 70px; width:280px">
                    <div class="card-datatable">
                        <form method="POST" action="{{ route('add.details') }}">
                            @csrf

                            <div class="row">
                                <div class="col-12" style="display: flex">
                                    <div>
                                        <label class="form-label" style="margin-left: 10px; font-weight:bold"
                                            for="first-name-icon">Employer wise search</label>
                                        <div class="input-group">
                                            <select class="form-select form-select" name="employee_id">
                                                <option disabled>Open this select menu</option>
                                                @foreach ($employees as $emp)
                                                    <option value="{{ $emp->id }}">
                                                        {{ ucwords($emp->name) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit"
                                            class="btn btn-primary btn-sm me-1 waves-effect waves-float waves-light"
                                            style="display: flex; margin-top:34.5px; margin-left: 14px">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Employee wise search End --}}


            {{-- project wise search Start --}}
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card" style="height: 70px; width:280px">
                    <div class="card-datatable">
                        <form method="POST" action="{{ route('add.project_details') }}">
                            @csrf

                            <div class="row">
                                <div class="col-12" style="display: flex">
                                    <div>
                                        <label class="form-label" style="margin-left: 10px; font-weight:bold"
                                            for="first-name-icon">Project wise search</label>
                                        <div class="input-group">
                                            <select class="form-select form-select" name="project_id">
                                                <option disabled>Open this select menu</option>
                                                @foreach ($projects as $project)
                                                    <option value="{{ $project->id }}">
                                                        {{ ucwords($project->name) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit"
                                            class="btn btn-primary btn-sm me-1 waves-effect waves-float waves-light"
                                            style="display: flex; margin-top:34.5px; margin-left: 14px">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- project wise search End --}}
        </div>
    </div>


    {{-- <div class="container mt-3"> --}}
    <button style="height: 50px; width:150px; margin-left:1740px" type="button" class="btn btn-primary mb-3"
        data-bs-toggle="modal" data-bs-target="#myModal">
        Add Task
    </button>
    {{-- </div> --}}

    <section id="responsive-datatable">
        <div class="container">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card" style="width: 99rem;">

                    <div class="card-header border-bottom" style="background-color: skyblue">
                        <h4 class="card-title">All Task</h4>
                    </div>
                    <div class="card-datatable">
                        <table style="text-align:center"
                            class="align-middle table employeeTable dt-responsive table dataTable dtr-column collapsed"
                            id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
                            <thead style="background-color: #3E0E40; color:white">
                                <tr>
                                    <th>SN</th>
                                    <th>Employee Name</th>
                                    <th>Project Name\ID</th>
                                    <th>Module</th>
                                    <th>Features</th>
                                    <th>Sub Department\Department</th>
                                    <th>Task Name</th>
                                    <th>Start Date</th>
                                    <th>Deadline</th>
                                    <th>End Date</th>
                                    <th>Task Progressbar</th>
                                    <th>Task Status</th>
                                    <th>Task Type</th>
                                    <th>Task Priority</th>
                                    <th>Work Duration</th>
                                    <th>Work Time</th>
                                    <th>Tag</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $sn = 1;
                                @endphp
                                @foreach ($tasks as $task)
                                    <tr style="text-align:center">
                                        <td>{{ $sn++ }}</td>
                                        <td><a href="{{ route('all.employee') }}">{{ optional($task->employee)->name }}</a>
                                        </td>

                                        <td><a
                                                href="{{ route('all.project') }}">{{ optional($task->project)->name }}</a><br><a
                                                href="{{ route('all.project') }}">{{ optional($task->project)->id }}</a>
                                        </td>

                                        <a href=""></a>
                                        <td>

                                            <a href="{{ route('all.module') }}">{{ optional($task->module)->name }}</a>

                                        </td>

                                        <td>
                                            <a href="{{ route('all.feature') }}">{{ optional($task->feature)->name }}</a>
                                        </td>

                                        <td><a
                                                href="{{ route('all.department') }}">{{ optional($task->departmentt)->name }}</a>
                                            <br>{{ optional(optional($task->departmentt)->parent)->name }}
                                        </td>
                                        <td>{{ $task->name }}</td>
                                        <td>{{ $task->start_date }}</td>
                                        <td>{{ $task->dead_line }}</td>
                                        <td>{{ $task->end_date }}</td>
                                        <td>

                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    style="width:{{ $task->progressbar }}%">{{ $task->progressbar }}%
                                                    <span class="sr-only">70% Complete</span>
                                                </div>
                                        </td>
                                        <td>{{ $task->status }}</td>
                                        <td>{{ $task->type }}</td>
                                        <td>{{ $task->priority }}</td>
                                        <td>{{ $task->work_duration }}</td>
                                        <td>{{ $task->working_time }}</td>
                                        <td style="font-weight: bold">{{ $task->tag }}</td>
                                        <td><img src="{{ asset($task->image) }}" alt=""
                                                style="height:80px; width:60px"></td>

                                        <td>
                                            <button type="button" class="btn btn-relief-danger"><a
                                                    href="{{ route('delete.task', $task->id) }}">
                                                    <i class="fa fa-trash"></i></a> </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-md-2 col-sm-2">
                <!-- The Modal Start-->
                <div class="modal" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h3 class="modal-title" style="font-weight:bold; color:blue">Add Task</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">

                                <div class="container-fluid">

                                    <form method="POST" action="{{ route('add.task') }}" class="form form-vertical"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-4">

                                                <div class="mb-1">
                                                    <label>Employer ID</label>
                                                    <div class="input-group">
                                                        <select class="form-select form-select" id="selectLarge"
                                                            name="employee_id">
                                                            <option disabled>Open this select menu</option>
                                                            @foreach ($employees as $emp)
                                                                <option value="{{ $emp->id }}">
                                                                    {{ ucwords($emp->name) }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">Project Name</label>
                                                    <div class="input-group">
                                                        <select class="form-select form-select" id="selectLarge"
                                                            name="project_id">
                                                            <option disabled>Open this select menu</option>
                                                            @foreach ($projects as $project)
                                                                <option value="{{ $project->id }}">
                                                                    {{ $project->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label>Module Name</label>
                                                    <div class="input-group">
                                                        <select class="form-select form-select" id="selectLarge"
                                                            name="module_id">
                                                            <option disabled>Open this select menu</option>
                                                            @foreach ($modules as $module)
                                                                <option value="{{ $module->id }}">
                                                                    {{ ucwords($module->name) }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">Feature Name</label>
                                                    <div class="input-group">
                                                        <select class="form-select form-select" id="selectLarge"
                                                            name="feature_id">
                                                            <option disabled>Open this select menu</option>
                                                            @foreach ($features as $feature)
                                                                <option value="{{ $feature->id }}">
                                                                    {{ $feature->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">Department</label>
                                                    <div class="input-group">
                                                        <select class="form-select form-select" id="selectLarge"
                                                            name="department_id">
                                                            <option disabled>Open this select menu</option>
                                                            @foreach ($departments as $department)
                                                                <option value="{{ $department->id }}">
                                                                    {{ ucwords($department->name) }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">Task
                                                        Name</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="first-name-icon" class="form-control"
                                                            name="name" placeholder="Enter task Name">
                                                    </div>
                                                    @error('cat_name_en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">start_date</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="date" id="first-name-icon" class="form-control"
                                                            name="start_date" placeholder="start_date">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">dead_line</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="date" id="first-name-icon" class="form-control"
                                                            name="dead_line" placeholder="dead_line">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">end_date</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="date" id="first-name-icon" class="form-control"
                                                            name="end_date" placeholder="end_date">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="progressbar">progressbar</label>
                                                    <select name="progressbar" id="state" class="form-control">
                                                        <option value="">---Select---</option>
                                                        <option value="30">30% done</option>
                                                        <option value="50">50% done</option>
                                                        <option value="70">70% done</option>
                                                        <option value="100">100% done</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">
                                                <div class="form-group">
                                                    <label for="progressbar">Task Status</label>
                                                    <select name="status" id="state" class="form-control">
                                                        <option value="">---Select---</option>
                                                        <option value="In Progress">In Progress</option>
                                                        <option value="Completed">Completed</option>
                                                        <option value="Deadline Over">Deadline Over</option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">
                                                <div class="form-group">
                                                    <label for="progressbar">Task Type</label>
                                                    <select name="type" id="state" class="form-control">
                                                        <option value="">---Select---</option>
                                                        <option value="Complex">Complex</option>
                                                        <option value="Simple">Simple</option>
                                                        <option value="Compound">Compound</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="progressbar">Task Priority</label>
                                                    <select name="priority" id="state" class="form-control">
                                                        <option value="">---Select---</option>
                                                        <option value="High">High</option>
                                                        <option value="Medium">Medium</option>
                                                        <option value="Low">Low</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">Work
                                                        Duration</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="first-name-icon" class="form-control"
                                                            name="work_duration" placeholder="Enter work duration">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">

                                                <div class="mb-1">
                                                    <label for="first-name-icon">Working
                                                        Time</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="first-name-icon" class="form-control"
                                                            name="working_time" placeholder="Enter work time">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Task Image:</label>
                                                        <input type="file" name="image" class="form-control"
                                                            placeholder="Image">
                                                        @error('image')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-20">
                                                <div class="mb-1">
                                                    <div class="form-check" style="margin-top: 30px">
                                                        <input class="form-check-input" type="checkbox" value="Ticket"
                                                            name="tag" id="flexCheckDefault">
                                                        <strong>Ticket</strong>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">
                                            </div>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <button type="submit"
                                                class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                                            <button type="reset"
                                                class="btn btn-outline-secondary waves-effect">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal End --}}
            </div>
        </div><br><br><br>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
@endsection
