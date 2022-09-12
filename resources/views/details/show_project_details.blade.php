@extends('main_master')

@section('content')
    <section id="responsive-datatable">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-md-4 col-sm-12">
                    <h3 style="background-color: blanchedalmond">Project Wise Data Searching</h3>

                    <div class="card">
                        <div class="card-header border-bottom">
                            {{-- <h4 class="card-title">{{ $emp->name }}'s Project</h4> --}}
                        </div>
                        <div class="card-datatable">
                            <table class="dt-responsive employeeTable table dataTable dtr-column collapsed"
                                id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                                <thead style="background-color: #3E0E40; color:white">
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Member</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sn = 1;
                                    @endphp
                                    <tr>
                                        <td>{{ $pro->name }}</td>
                                        <td>{{ $pro->member }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><br><br>

                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Employee Detail</h4>
                        </div>
                        <div class="card-datatable">
                            <table class="table employeeTable dt-responsive table dataTable dtr-column collapsed"
                                id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                                <thead style="background-color: #3E0E40; color:white">
                                    <tr>
                                        <th>SN</th>
                                        <th scope="col"> Employee Name </th>
                                        <th scope="col"> Employee Email </th>
                                        <th scope="col">Employee Address</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $sn = 1;
                                    @endphp
                                    @foreach ($ptasks as $ptask)
                                        <tr>
                                            <td scope="row">{{ $sn++ }}</td>
                                            <td>{{ optional($ptask->employee)->name }}</td>
                                            <td>{{ optional($ptask->employee)->email }}</td>
                                            <td>{{ optional($ptask->employee)->address }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br><br>

                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">{{ $pro->name }}'s Task</h4>
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
                                    @foreach ($ptasks as $ptask)
                                        <tr>
                                            <td scope="row">{{ $sn++ }}</td>
                                            <td>{{ $ptask->name }}</td>
                                            <td>{{ $ptask->type }}</td>
                                            <td>{{ $ptask->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br><br>


                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">{{ $pro->name }}'s' Module</h4>
                        </div>
                        <div class="card-datatable">
                            <table class="dt-responsive employeeTable table dataTable dtr-column collapsed"
                                id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                                <thead style="background-color: #3E0E40; color:white">
                                    <tr>
                                        <th>SN</th>
                                        <th>Project Name</th>
                                        <th>Module Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sn = 1;
                                    @endphp
                                    @foreach ($ptasks as $ptask)
                                        <tr>
                                            <td scope="row">{{ $sn++ }}</td>
                                            <td>{{ optional($ptask->project)->name }}</td>
                                            <td>{{ optional($ptask->module)->name }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div><br><br>

                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">{{ $pro->name }}'s Features</h4>
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
                                    @foreach ($ptasks as $ptask)
                                        <tr>
                                            <td scope="row">{{ $sn++ }}</td>
                                            <td>{{ optional($ptask->project)->name }}</td>
                                            <td>{{ optional($ptask->module)->name }}</td>
                                            <td>{{ optional($ptask->feature)->name }}</td>
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
                    <h4 class="card-title">{{ $pro->name }} Project's All Data</h4>
                </div>
                <div class="card-datatable">
                    <table style="border: 1px solid black"
                        class="dt-responsive employeeTable table dataTable dtr-column collapsed" id="DataTables_Table_3"
                        role="grid"aria-describedby="DataTables_Table_3_info">

                        <thead style="background-color: #3E0E40; color:white">
                            <tr>
                                <th>Project Name</th>
                                <th>Employee Name</th>
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

                            <td rowspan="50" style="text-align: center ;border: 1px solid black">{{ $pro->name }}</td>
                            @foreach ($ptasks as $ptask)
                                <tr>
                                    <td><a href="{{ route('all.employee') }}">{{ optional($ptask->employee)->name }}</a></td>
                                    <td><a href="{{ route('all.module') }}">{{ optional($ptask->module)->name }}</a></td>
                                    <td><a href="{{ route('all.feature') }}">{{ optional($ptask->feature)->name }}</a></td>
                                    <td><a href="{{ route('all.department') }}">{{ optional($ptask->departmentt)->name }}</a></td>
                                    <td><a href="{{ route('all.task') }}">{{ $ptask->name }}</a></td>
                                    <td>{{ $ptask->start_date }}<br>{{ $ptask->dead_line }}<br>{{ $ptask->end_date }}
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100"
                                                style="width:{{ $ptask->progressbar }}%">
                                            </div>
                                    </td>
                                    <td>{{ $ptask->status }}<br>{{ $ptask->type }}</td>
                                    <td>{{ $ptask->work_duration }} <br> {{ $ptask->working_time }}</td>
                                    <td>{{ $ptask->tag }}</td>
                                    <td><img src="{{ asset($ptask->image) }}"
                                            alt=""style="height:80px; width:60px"></td>
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
