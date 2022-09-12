<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .employeeTable tr:nth-child(even) {
            background-color: #f8f0e3;
        }

        /* Sidebar design start */
        body {
            background-color: #fbfbfb;
        }

        @media (min-width: 991.98px) {
            main {
                padding-left: 240px;
            }
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 58px 0 0;
            /* Height of navbar */
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
            width: 240px;
            z-index: 600;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                width: 100%;
            }
        }

        .sidebar .active {
            border-radius: 5px;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
        }

        /* Sidebar design End */
        /* dropdown design start */
        body {
            font-family: "Lato", sans-serif;
        }

        /* Fixed sidenav, full height */
        .sidenav {
            height: 100%;
            width: 220px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #3E0E40;
            overflow-x: hidden;
            padding-top: 20px;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a,
        .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }

        /* On mouse-over */
        .sidenav a:hover,
        .dropdown-btn:hover {
            color: black;
        }

        /* Main content */
        .main {
            margin-left: 200px;
            /* Same as the width of the sidenav */
            font-size: 20px;
            /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        /* Add an active class to the active dropdown button */
        .active {
            background-color: green;
            color: white;
        }

        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
            display: none;
            background-color:3E0E40;
            padding-left: 8px;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
            float: right;
            padding-right: 8px;
        }

        /* Some media queries for responsiveness */
        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        /* dropdown End */
        a {

            color: black;
        }
    </style>

</head>

<body>


    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4 sidenav">
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                        <i class=""></i><span style="font-size: 26px; font-weight:bold">Work Flow</span>
                    </a>

                    <a href="{{ route('all.employee') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-users fa-fw me-3"></i><span>Employee</span>
                    </a>

                    <a href="{{ route('all.client') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-users fa-fw me-3"></i><span>Client</span>
                    </a>

                    {{-- <a href="{{ route('all.project') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-chart-line fa-fw me-3"></i><span>Project</span>
                    </a> --}}


                    {{-- <a href="" class="dropdown-btn"><i
                        class="fas fa-chart-line fa-fw me-3"></i><span>Project</span>
                </a> --}}




                    <button class="dropdown-btn list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-line fa-fw me-3"><span style="font-size: 15px; margin-left:15px">Project</span></i>
                    </button>

                    <div class="dropdown-container">
                        <a href="{{ route('all_project_dashboard') }}">Projects</a>
                        <a href="{{ route('all.project') }}">Add Project</a>
                        <a href="{{ route('all.project_data') }}">View Project</a>
                    </div>



                    <a href="{{ route('all.department') }}" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-pie fa-fw me-3"></i><span>Department</span>
                    </a>

                    <a href="{{ route('all.task') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-globe fa-fw me-3"></i><span>Task</span>
                    </a>

                    <a href="{{ route('all.module') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-building fa-fw me-3"></i><span>Module</span>
                    </a>

                    <a href="{{ route('all.feature') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-calendar fa-fw me-3"></i><span>Feature</span>
                    </a>

                    <a href="{{ route('all.issue') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-chart-line fa-fw me-3"></i><span>Issue</span>
                    </a>




                    {{-- <button class="dropdown-btn">Dropdown
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                      </div>
                    </div> --}}




                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/excelitai.png') }}" height="55" alt="MDB Logo" loading="lazy" />
                    {{-- <img src="{{ asset('images/excelitai.png') }}" /> --}}
                </a>
                <!-- Search form -->
                <form class="d-none d-md-flex input-group w-auto my-auto">
                    <input autocomplete="off" type="search" class="form-control rounded"
                        placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px;" />
                    <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
                </form>

                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">
                    <!-- Notification dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">Some news</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Another news</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Icon -->
                    <li class="nav-item">
                        <a class="nav-link me-3 me-lg-0" href="#">
                            <i class="fas fa-fill-drip"></i>
                        </a>
                    </li>
                    <!-- Icon -->
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>

                    <!-- Icon dropdown -->
                    <li class="nav-item dropdown">

                        <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#"
                            id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="united kingdom flag m-0"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
                                    <i class="fa fa-check text-success ms-2"></i></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />

                                <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#"
                                    id="navbarDropdown" role="button" data-mdb-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="flag-united-kingdom flag m-0"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="#"><i
                                                class="flag-united-kingdom flag"></i>English
                                            <i class="fa fa-check text-success ms-2"></i></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i
                                                class="flag-poland flag"></i>Polski</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i
                                                class="flag-japan flag"></i>日本語</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i
                                                class="flag-germany flag"></i>Deutsch</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i
                                                class="flag-france flag"></i>Français</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i
                                                class="flag-spain flag"></i>Español</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i
                                                class="flag-russia flag"></i>Русский</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i
                                                class="flag-portugal flag"></i>Português</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Avatar -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
                                    href="#" id="navbarDropdownMenuLink" role="button"
                                    data-mdb-toggle="dropdown" aria-expanded="false">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
                                        class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="#">My profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Settings</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px;">
        <div class="container pt-4"></div>
    </main>
    <!--Main layout-->


    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
</body>

</html>
