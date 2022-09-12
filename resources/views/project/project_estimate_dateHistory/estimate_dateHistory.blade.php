@extends('main_master')


@section('content')

  <section id="responsive-datatable">
    <div class="container">
      <div class="row mt-4">
        <div class="col-lg-8 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header border-bottom" style="background-color: skyblue">
              <h4 class="card-title">Project's All Estimate Date History</h4>
            </div>
            <div class="card-datatable">
              <table class="table employeeTable dt-responsive table dataTable dtr-column collapsed" id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info" >
                <thead style="background-color: #3E0E40; color:white">
                  <tr>
                    <th scope="col"> Project ID </th>
                    <th scope="col"> Project Name  </th>
                    <th scope="col"> Start Date </th>
                    <th scope="col">Deadline</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                {{-- <tbody>
              @php
                  $sn=1;
              @endphp
              @foreach ($employees as $employee)
              <tr>
                    <td scope="row" >{{ $sn++ }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>
                        <button type="button" class="btn btn-relief-warning"><a href="{{ route('edit.employee',$employee->id) }}"> <i class="fa fa-edit"></i> </a> </button>
                        <button type="button" class="btn btn-relief-danger"><a href="{{ route('delete.employee',$employee->id) }}"> <i class="fa fa-trash"></i> </a> </button>
                    </td>
              </tr>
              @endforeach
                </tbody> --}}
              </table>
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Project's All Estimate Date History</h4>
            </div>
            <div class="card-body">
              <form  method="POST" action="" class="form form-vertical">
                  @csrf
                <div class="row">

                  <div class="col-12">
                    <div class="mb-1">
                      <label class="form-label" for="first-name-icon">Project ID</label>
                      <div class="input-group input-group-merge">
                        <input type="text" id="first-name-icon" class="form-control" name="name" placeholder="Employee Name">
                      </div>
                      @error('cat_name_en')
                            <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>


                  <div class="col-12">
                      <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Project Name</label>
                        <div class="input-group input-group-merge">
                          <input type="email" id="first-name-icon" class="form-control" name="email" placeholder="Employee Email">
                        </div>
                        @error('cat_name_bn')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>



                    <div class="col-12">
                      <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Start Date</label>
                        <div class="input-group input-group-merge">
                          <input type="text" id="first-name-icon" class="form-control" name="address" placeholder="Employee Address">
                        </div>
                        @error('cat_name_bn')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>




                    <div class="col-12">
                        <div class="mb-1">
                          <label class="form-label" for="first-name-icon">Deadline</label>
                          <div class="input-group input-group-merge">
                            <input type="text" id="first-name-icon" class="form-control" name="address" placeholder="Employee Address">
                          </div>
                          @error('cat_name_bn')
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







