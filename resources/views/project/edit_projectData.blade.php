@extends('main_master')

@section('content')
    <style>
        label {

            font-weight: bold;
            color: #3E0E40;

        }

        button {

            border: 1px solid black;
        }

        .add_project {
            colo
        }

        /* to do list design start */

        /* to do list design e */
    </style>

    <div class="container">

        <form method="POST" action="{{ route('update.project_data', ['id' =>$project_edit->id]) }}" class="form form-vertical">
            @csrf

            <input type="hidden" name="pro_id" value="{{ $project_edit->id }}">

            <div>
                <div class="row">

                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Project ID</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="{{ $project_edit->project_id }}"
                                    name="project_id" id="inputPassword" placeholder="Give a unique ID">
                            </div>
                        </div>


                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Project Name</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="{{ $project_edit->name }}" name="name"
                                    id="inputPassword" placeholder="Give a unique project name">
                            </div>
                        </div>


                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Project Description</label>
                            <div class="col-sm-5">
                                <textarea type="text" class="form-control" value="{{ $project_edit->description }}" name="description"
                                    id="exampleFormControlTextarea1" rows="3" placeholder="Write about project"></textarea>
                            </div>
                        </div>



                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Project Category</label>
                            <div class="col-sm-5">
                                <select value="{{ $project_edit->category }}" name="category" id="state"
                                    class="form-control">
                                    <option value="">---Select---</option>
                                    <option value="Complex">Complex</option>
                                    <option value="Simple">Simple</option>
                                    <option value="Compound">Compound</option>
                                </select>
                            </div>
                        </div>



                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Departments</label>
                            <div class="col-sm-5">
                                <select class="form-select form-select" name="department_id">
                                    <option disabled>Open this select menu</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">
                                            {{ ucwords($department->name) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">SubDepartments</label>
                            <div class="col-sm-5">
                                <select class="form-select form-select" name="department_id">
                                    <option disabled>Open this select menu</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">
                                            {{ ucwords($department->name) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Project Start Date</label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" value="{{ $project_edit->start_date }}"
                                    name="start_date" id="inputPassword" placeholder="">
                            </div>
                        </div>



                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Project Deadline</label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" value="{{ $project_edit->deadline }}"
                                    name="deadline" id="inputPassword" placeholder="">
                            </div>
                        </div>

                    </div>



                    <div class="col-lg-1 col-md-1 col-sm-1">


                    </div>



                    <div class="col-lg-5 col-md-5 col-sm-12">


                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Assign Employee</label>
                            <div class="col-sm-5">
                                <select class="form-select form-select" name="assign_employee">
                                    <option disabled>Open this select menu</option>
                                    @foreach ($employees as $emp)
                                        <option value="{{ $emp->id }}">
                                            {{ ucwords($emp->name) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Notifications</label>
                            <div class="col-sm-5">
                                <select class="form-select form-select" value="{{ $project_edit->notification }}"
                                    name="notification">
                                    <option disabled>Open this select menu</option>
                                    @foreach ($employees as $emp)
                                        <option value="{{ $emp->id }}">
                                            {{ ucwords($emp->name) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Upload Project Image</label>
                            <div class="col-sm-5">
                                <input type="file" class="form-control" value="{{ $project_edit->upload_image }}"
                                    name="upload_image" placeholder="Upload jpg or png image">
                            </div>
                        </div>



                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Upload Document</label>
                            <div class="col-sm-5">
                                <input type="file" class="form-control" value="{{ $project_edit->upload_document }}"
                                    name="upload_document" placeholder="Upload document">
                            </div>
                        </div>



                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Project Priority</label>
                            <div class="col-sm-5">
                                <select name="priority" id="state" class="form-control">
                                    <option value="">---Select---</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Project Status</label>
                            <div class="col-sm-5">
                                <select name="status" id="state" class="form-control">
                                    <option value="">---Select---</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Deadline Over">Deadline Over</option>
                                    <option value="Closed">Closed</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Project Budget</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" value="{{ $project_edit->budget }}"
                                    name="budget" id="inputPassword" placeholder="">
                            </div>
                        </div>


                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Add Client</label>
                            <div class="col-sm-5">
                                <select class="form-select form-select" name="client_id">
                                    <option disabled>Open this select menu</option>
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">
                                            {{ ucwords($client->name) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                    </div>
                </div>




                <h5 style="margin-top: 90px; margin-bottom: 30px">Add Task Progressbar</h5>
                <p><strong>For Long Term Project</strong> </p>


                {{-- for multiple building and flat12  Start --}}


                <div class="col-md-12" id="buldingFlatContainer" style="margin-left: 10px">
                    <div class="singleitems">


                        <div class="row" style="margin-top:30px">
                            <div class="col-md-2">
                                <div class="form-group md-2">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="first-name-icon" class="form-control" value=""
                                            name="progressbar_name[0][progressbar_name]" placeholder="Add Taskbar Add">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-1">
                                <div class="form-group md-2">
                                    <select value="" name="progressbar_name[0][percentage]" id="state"
                                        class="form-control">
                                        <option value="">%</option>
                                        <option value="30">30% done</option>
                                        <option value="50">50% done</option>
                                        <option value="70">70% done</option>
                                        <option value="100">100% done</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-md-1">
                                <div class="form-group md-2">
                                    <div class="input-group input-group-merge">
                                        <input type="date" id="first-name-icon" class="form-control" value=""
                                            name="progressbar_name[0][date_from]" placeholder="Employee Address">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-1">
                                <div class="form-group md-2">
                                    <div class="input-group input-group-merge">
                                        <input type="date" id="first-name-icon" class="form-control" value=""
                                            name="progressbar_name[0][date_to]" placeholder="Employee Address">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-1">
                                <div class="form-group md-2">
                                    <div class="input-group input-group-merge">
                                        <input type="time" id="first-name-icon" class="form-control" value=""
                                            name="progressbar_name[0][time_from]" placeholder="Employee Address">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-1">
                                <div class="form-group md-2">
                                    <div class="input-group input-group-merge">
                                        <input type="time" id="first-name-icon" class="form-control" value=""
                                            name="progressbar_name[0][time_to]" placeholder="Employee Address">
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-1">
                                <div class="form-group md-2">
                                    <div class="input-group input-group-merge">
                                        <input type="date" id="first-name-icon" class="form-control" value=""
                                            name="progressbar_name[0][estimate]" placeholder="Estimate">
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-3 mt-5">
                                <div style="margin-top:-3rem !important">
                                    <button type="button" class="btn btn-success btn-sm glyphicon glyphicon-plus"
                                        id="addNewItem">Add</button>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>

                {{-- for multiple building and flat12 End --}}


                <div class="col-12" style="margin:70px 1100px">
                    <button type="submit" class="btn btn-primary active">
                        Add Project
                    </button>


                </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>





    <script>
        function appendChildToContainer(event) {
            const singleitems = document.querySelectorAll('.singleitems');
            const index = singleitems.length;
            const html = addBuildingFlat(index);
            buldingFlatContainer.appendChild(html);
        }



        let buldingFlatContainer = document.querySelector('#buldingFlatContainer');
        let addNewItem = document.querySelector('#addNewItem');
        addNewItem.addEventListener('click', appendChildToContainer);

        let counter = 1;

        function addBuildingFlat(index) {
            const singleItem = document.createElement('div');
            singleItem.classList.add('singleitems');
            let html = `

                        <div class="row" style="margin-top:30px">
                            <div class="col-md-2">
                                <div class="form-group md-2">
                                    <div class="input-group input-group-merge">
                                    <input type="text" id="first-name-icon" class="form-control" name="progressbar_name[${counter}][progressbar_name]" placeholder="Add Taskbar Add">
                                </div>
                                </div>
                            </div>


                            <div class="col-md-1">
                            <div class="form-group md-2">
                                <select name="progressbar_name[${counter}][percentage]" id="state" class="form-control">
                                    <option value="">%</option>
                                    <option value="30">30% done</option>
                                    <option value="50">50% done</option>
                                    <option value="70">70% done</option>
                                    <option value="100">100% done</option>
                                </select>
                            </div>
                        </div>

                            <div class="col-md-1">
                                    <div class="form-group md-2">
                                        <div class="input-group input-group-merge">
                                        <input type="date" id="first-name-icon" class="form-control" name="progressbar_name[${counter}][date_from]" placeholder="Employee Address">
                                    </div>
                                    </div>
                                </div>


                                <div class="col-md-1">
                                    <div class="form-group md-2">
                                        <div class="input-group input-group-merge">
                                        <input type="date" id="first-name-icon" class="form-control" name="progressbar_name[${counter}][date_to]" placeholder="Employee Address">
                                    </div>
                                    </div>
                                </div>



                                <div class="col-md-1">
                                    <div class="form-group md-2">
                                        <div class="input-group input-group-merge">
                                        <input type="time" id="first-name-icon" class="form-control" name="progressbar_name[${counter}][time_from]" placeholder="Employee Address">
                                    </div>
                                    </div>
                                </div>


                                <div class="col-md-1">
                                    <div class="form-group md-2">
                                        <div class="input-group input-group-merge">
                                        <input type="time" id="first-name-icon" class="form-control" name="progressbar_name[${counter}][time_to]" placeholder="Employee Address">
                                    </div>
                                    </div>
                                </div>



                                <div class="col-md-1">
                                    <div class="form-group md-2">
                                        <div class="input-group input-group-merge">
                                        <input type="date" id="first-name-icon" class="form-control" name="progressbar_name[${counter}][estimate]" placeholder="Employee Address">
                                    </div>
                                    </div>
                                </div>



                        </div>`;

            singleItem.innerHTML = html;
            counter++;
            return singleItem;
        }
    </script>
@endsection
