@extends('main_master')


@section('content')
    <div class="row row-cols-1 row-cols-md-3" style="margin-left: 240px">


        @foreach ($projects as $all_projects)
            <div class="col mb-4">
                <div class="card h-500">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col">Category:</div>
                                    <div class="col">{{ $all_projects->name }}</div>
                                </div><br>

                                <div class="row">
                                    <div class="col">Time:</div>
                                    {{-- <div class="col">
                                        <div class="row">{{ $all_projects->start_date }}</div>
                                        <div class="row">{{ $all_projects->deadline }}</div>
                                    </div> --}}
                                </div><br>



                                @foreach ($all_projects->estimate_date as $e_date)
                                    <div class="row">
                                        <div class="col">Project 1's Time:</div>
                                        <div class="col">
                                            <div class="row">{{ optional($e_date)->start_date }}</div>
                                            <div class="row">{{ optional($e_date)->deadline }}</div>


                                        </div>
                                    </div><br>
                                @endforeach

                                <div class="row">
                                    <div class="col">Project Budget:</div>
                                    <div class="col">{{ $all_projects->budget }}</div>
                                </div><br>

                                <div class="row">
                                    <div class="col">Re Budget:</div>
                                    <div class="col">d</div>
                                </div><br>


                                <div class="row">
                                    <div class="col">Re Budget:</div>
                                    <div class="col">d</div>
                                </div>


                            </div>

                            <div class="col-md-6">

                                <div class="row">
                                    <div class="col">Task:</div>
                                    <div class="col">d</div>
                                </div><br>

                                <div class="row">
                                    <div class="col">Time Bar:</div>
                                    <div class="col">

                                        <div class="row">AA</div>
                                        <div class="row">AA</div>
                                        <div class="row">AA</div>

                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col">Ecpense Vs Budget:</div>
                                    <div class="col">

                                        <div class="row">AA</div>
                                        <div class="row">AA</div>
                                        <div class="row">AA</div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach







    </div>
@endsection
