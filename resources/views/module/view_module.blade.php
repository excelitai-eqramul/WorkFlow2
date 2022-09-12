@extends('main_master')

@section('content')
  <section id="responsive-datatable">
    <div class="container">
      <div class="row mt-4">
        <div class="col-lg-8 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header border-bottom" style="background-color: skyblue">
              <h4 class="card-title">All Module</h4>
            </div>
            <div class="card-datatable">
                <table class="dt-responsive employeeTable table dataTable dtr-column collapsed" id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                    <thead style="background-color: #3E0E40; color:white">
                        <tr>
                            <th>SN</th>
                            <th>Project Name</th>
                            <th>Module Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                                $sn=1;
                            @endphp
                            @foreach ($modules as $module)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ optional($module->project)->name }}</td>
                                <td>{{ $module->name }}</td>
                            <td>
                                <button type="button" class="btn btn-relief-danger"><a href="{{ route('delete.module',$module->id) }}">
                                <i class="fa fa-trash"></i></a> </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Add Module</h4>
            </div>
            <div class="card-body">
                <form  method="POST" action="{{ route('add.module') }}" class="form form-vertical">
                    @csrf
                <div class="row">




                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon">Project Name</label>
                            <div class="input-group">
                                <select class="form-select form-select-lg" id="selectLarge" name="project_id">
                                    <option disabled >Open this select menu</option>
                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id}}">
                                        {{  ucwords($project->name) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                        </div>


                    <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Module Name</label>
                        <div class="input-group input-group-merge">
                        <input type="text" id="first-name-icon" class="form-control" name="name" placeholder="Module Name">
                        </div>
                        @error('cat_name_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    </div>


                    <div class="col-12">
                    <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                    </div>
                </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    @endsection








