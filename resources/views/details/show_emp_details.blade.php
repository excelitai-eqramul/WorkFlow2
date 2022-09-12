@extends('main_master')

@section('content')
    <section id="responsive-datatable">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-md-4 col-sm-12">
                    <h3 style="background-color: blanchedalmond">Employee Wise Data</h3>

                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Employee Detail</h4>
                        </div>
                        <div class="card-datatable">
                            <table class="table employeeTable dt-responsive table dataTable dtr-column collapsed"
                                id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                                <thead style="background-color: #3E0E40; color:white">
                                    <tr>
                                        <th scope="col"> Employee Name </th>
                                        <th scope="col"> Employee Email </th>
                                        <th scope="col">Employee Address</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>{{ $emp->name }}</td>
                                        <td>{{ $emp->email }}</td>
                                        <td>{{ $emp->address }}</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <br><br>

                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">{{ $emp->name }}'s Task</h4>
                        </div>
                        <div class="card-datatable">
                            <table class="table employeeTable dt-responsive table dataTable dtr-column collapsed"
                                id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                                <thead style="background-color: #3E0E40; color:white">
                                    <tr>
                                        <th>SN</th>
                                        <th>Task Name</th>
                                        <th>Task Type</th>
                                        <th>Task Status</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $sn = 1;
                                    @endphp
                                    @foreach ($task as $tasks)
                                        <tr>
                                            <td scope="row">{{ $sn++ }}</td>
                                            <td>{{ $tasks->name }}</td>
                                            <td>{{ $tasks->type }}</td>
                                            <td>{{ $tasks->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br><br>

                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">{{ $emp->name }}'s Project</h4>
                        </div>
                        <div class="card-datatable">
                            <table class="dt-responsive employeeTable table dataTable dtr-column collapsed"
                                id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                                <thead style="background-color: #3E0E40; color:white">
                                    <tr>
                                        <th>SN</th>
                                        <th>Project Name</th>
                                        <th>Member</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sn = 1;
                                    @endphp
                                    @foreach ($task as $tasks)
                                        <tr>
                                            <td scope="row">{{ $sn++ }}</td>
                                            <td>{{ optional($tasks->project)->name }}</td>
                                            <td>{{ optional($tasks->project)->member }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br><br>


                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">{{ $emp->name }}'s Module</h4>
                        </div>
                        <div class="card-datatable">
                            <table class="dt-responsive employeeTable table dataTable dtr-column collapsed"
                                id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Project Name</th>
                                        <th>Module Name</th>
                                    </tr>
                                </thead style="background-color: #3E0E40; color:white">
                                <tbody>
                                    @php
                                        $sn = 1;
                                    @endphp
                                    @foreach ($task as $tasks)
                                        <tr>
                                            <td scope="row">{{ $sn++ }}</td>
                                            <td>{{ optional($tasks->project)->name }}</td>
                                            <td>{{ optional($tasks->module)->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div><br><br>


                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">{{ $emp->name }}'s Features</h4>
                        </div>
                        <div class="card-datatable">
                            <table class="dt-responsive employeeTable table dataTable dtr-column collapsed"
                                id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                                <thead style="background-color: #3E0E40; color:white">
                                    <tr>
                                        <th>SN</th>
                                        <th>Project Name</th>
                                        <th>Module Name</th>
                                        <th>Features Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sn = 1;
                                    @endphp
                                    @foreach ($task as $tasks)
                                        <tr>
                                            <td scope="row">{{ $sn++ }}</td>
                                            <td>{{ optional($tasks->project)->name }}</td>
                                            <td>{{ optional($tasks->module)->name }}</td>
                                            <td>{{ optional($tasks->feature)->name }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div><br><br>
                </div>
            </div>

            <div class="card" style="border: 1px solid black">
                <div class="card-header border-bottom">
                    <h4 class="card-title">{{ $emp->name }}'s all data</h4>
                </div>
                <div class="card-datatable">
                    <table style="border: 1px solid black; text-align:center"
                        class="dt-responsive employeeTable table dataTable dtr-column collapsed" id="DataTables_Table_3"
                        role="grid"aria-describedby="DataTables_Table_3_info">

                        <thead style="background-color: #3E0E40; color:white">
                            <tr>
                                <th>Employee Name</th>
                                <th>Project Name</th>
                                <th>Module Name</th>
                                <th>Feature Name</th>
                                <th>Department Name</th>
                                <th>Task Name</th>
                                <th>Start Date\DeadLine\End Date</th>
                                <th>Task Progressbar</th>
                                <th>Task's Status\Type</th>
                                <th>Work Duration\Time</th>
                                <th>Tag</th>
                                <th>Image</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $sn = 1;
                            @endphp

                            <td rowspan="50" style="text-align: center ;border: 1px solid black">
                                {{ $emp->name }}</td>

                            @foreach ($task as $tasks)
                                <tr>
                                    <td> <a href="{{ route('all.project') }}">{{ optional($tasks->project)->name }}</a> </td>
                                    <td><a href="{{ route('all.module') }}">{{ optional($tasks->module)->name }}</a></td>
                                    <td><a href="{{ route('all.feature') }}">{{ optional($tasks->feature)->name }}</a></td>
                                    <td><a href="{{ route('all.department') }}">{{ optional($tasks->departmentt)->name }}</a></td>
                                    <td><a href="{{ route('all.task') }}">{{ $tasks->name }}</a></td>
                                    <td>{{ $tasks->start_date }}<br>{{ $tasks->dead_line }}<br>{{ $tasks->end_date }}
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100"
                                                style="width:{{ $tasks->progressbar }}%">
                                            </div>
                                    </td>
                                    <td>{{ $tasks->status }}<br>{{ $tasks->type }}</td>
                                    <td>{{ $tasks->work_duration }} <br> {{ $tasks->working_time }}</td>
                                    <td>{{ $tasks->tag }}</td>
                                    <td><img src="{{ asset($tasks->image) }}" alt=""
                                            style="height:80px; width:60px"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><br><br>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
@endsection
