@extends('main_master')



<style>
    .projectTable tr:nth-child(even) {
        background-color: #E7D4E8;
    }
</style>





@section('content')
    <section id="responsive-datatable">
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        {{-- <div class="card-header border-bottom">
                            <h4 class="card-title">All Department</h4>
                        </div> --}}
                        <div class="card-datatable">
                            <table class="table projectTable dt-responsive table dataTable dtr-column collapsed"
                                id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                                <thead style="text-align: center">
                                    <tr>
                                        <th scope="col">Project ID</th>
                                        <th scope="col">Project Name</th>
                                        <th scope="col">Assigned Employee</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">Estimate Date</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Progressbar</th>
                                        <th scope="col">Attachment</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>


                                {{-- $table->string('project_id')->nullable();
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
                                $table->string('client_id')->nullable(); //foreign key --}}


                                <tbody>

                                    @foreach ($projects as $project)
                                        @php

                                            $today_check_in = Carbon\Carbon::parse($project->start_date);
                                            $check_out = Carbon\Carbon::parse($project->deadline);
                                            $duration = $today_check_in->diff($check_out);
                                            // dd($duration);
                                        @endphp


                                        <tr>
                                            <td>{{ $project->project_id }}</td>
                                            <td>{{ $project->name }}</td>
                                            <td>{{ $project->employeee->name }}</td>
                                            <td>{{ $project->start_date }}</td>
                                            <td>Null</td>
                                            <td>{{ $project->deadline }}</td>


                                            <td style="padding:0px 30px">
                                                @foreach ($project->progressbar as $item)
                                                    <label for="">{{ optional($item)->progressbar_name }}</label>
                                                    <div class="progress progress-bar" role="progressbar" aria-valuemin="0"
                                                        aria-valuemax="100" style="width:{{ optional($item)->percentage }}">
                                                        {{ optional($item)->percentage }}%
                                                        <span class="sr-only">70% Complete</span>
                                                    </div><br>
                                                @endforeach

                                            </td>




                                            <td><img src="{{ Storage::url($project->upload_document) }}" height="45"
                                                    width="65" alt="" /></td>

                                            <td>

                                                {{ $duration->m }} month, <br> {{ $duration->d }} days

                                            </td>



                                            <td>{{ $project->status }}</td>

                                            <td>

                                                <button type="button" class="btn btn-relief-warning"><a
                                                        href="{{ route('edit.project_data', $project->id) }}"> <i
                                                            class="fa fa-edit"></i> </a> </button>


                                                <button type="button" class="btn btn-relief-danger"><a
                                                        href="{{ route('delete.project', $project->id) }}"> <i
                                                            class="fa fa-trash"></i> </a> </button>


                                                <button type="button" class="btn btn-relief-danger"><a
                                                        href="{{ route('each.project_data_view', $project->id) }}"> <i
                                                            class="fa fa-eye"></i> </a> </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
@endsection
