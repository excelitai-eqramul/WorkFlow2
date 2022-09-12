@extends('main_master')

@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid mt-5">
            <div class="row" style="margin-left: 500px">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="header-title"> Feature List</h4>
                                <button data-bs-toggle="modal" data-bs-target="#addfeaturemodal" type="button"
                                    class="btn btn-success waves-effect waves-light mb-2 me-2"><i
                                        class="fas fa-plus pe-2"></i>
                                    Add Feature</button>
                            </div>


                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead style="background-color: #3E0E40; color:white">
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Module Name</th>
                                        <th>Feature Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($features as $feat)
                                        <tr>

                                            <td>{{ optional($feat->project)->name }}</td>
                                            <td>{{ optional($feat->module)->name }}</td>
                                            <td>{{ $feat->name }}</td>

                                            <td>
                                                <button type="button" class="btn btn-relief-danger"><a
                                                        href="{{ route('delete.feature', $feat->id) }}">
                                                        <i class="fa fa-trash"></i></a> </button>
                                            </td>
                                        <tr>
                                    @endforeach

                                </tbody>
                            </table>


                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- container -->
    </div> <!-- content -->

    <!--Add Category modal-->
    <div class="add-feature-modal">
        <div class="modal fade" tabindex="-1" id="addfeaturemodal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Feature</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form name="add_feature_form" id="add_feature_form">


                        {{-- @csrf --}}
                        <div class="modal-body p-4 bg-light">
                            <div class="row">
                                <div class="my-2">
                                    <label for="project_id">Project Name</label>
                                    <select name="project_id" class="form-control">
                                        <option selected="">Select a category</option>
                                        @foreach ($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->name }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <span id="error_project_id" class="errorColor"></span> --}}
                                </div>

                                <div class="my-2">
                                    <label for="module_id">Module Name</label>
                                    <select name="module_id" class="form-control">
                                        <option value="" selected="" disabled="">Select Module Name </option>
                                    </select>
                                </div>

                                <div class="my-2">
                                    <label for="name">Feature Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Feature Name">
                                    {{-- <span id="error_name" class="errorColor"></span> --}}
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="add_feature_btn" class="btn btn-info">Add Feature</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>



    <script>
        //Add Submit
        $("#add_feature_form").submit(function(e) {
            e.preventDefault();


            let formData = new FormData($('#add_feature_form')[0]);
            console.log(formData);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                url: `/feature/store`,
                method: "POST",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(res) {
                    console.log(res);
                    if (res.status == 200) {
                        // window.alert('Feature has been added successfully!');
                    }
                    $("#add_feature_btn").text('Add Feature');
                    $("#add_feature_form")[0].reset();
                    $("#addfeaturemodal").modal('hide');
                    location.reload();
                }
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            $('select[name="project_id"]').on('change', function() {
                var project_id = $(this).val();
                if (project_id) {
                    $.ajax({
                        url: `/feature/get_module/${project_id}`,
                        type: "GET",
                        dataType: "json",
                        success: function(response) {
                            console.log(response);
                            var d = $('select[name="module_id"]').empty();
                            $.each(response, function(key, value) {
                                $('select[name="module_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
@endsection
