<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lumina Admin - Edit Our Work</title>

    <!-- Custom fonts for this template-->
    {{-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('vendor_admin/fontawesome-free/css/all.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    {{-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layout.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-xxl">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Edit Our Services</h1>
                    {{-- <p class="mb-4">Bootstrap's default utility classes can be found on the official <a
                            href="https://getbootstrap.com/docs">Bootstrap Documentation</a> page. The custom utilities
                        below were created to extend this theme past the default utility classes built into Bootstrap's
                        framework.</p> --}}

                    <!-- Content Row -->
                    <div class="row">
                        <div class="container-fluid mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <header>
                                        <h3>Add Our Services</h3>
                                    </header>
                                    <hr style="margin: 1rem -1rem;" />
                                    <form action="/admin/cms/ourservices/create" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="imagefile" class="form-label">Image File</label>
                                            <input type="file" class="form-control" name="imagefile">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="section1title">section 1 title</label>
                                            <input type="text" class="form-control" name="sec1title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="section1description">section 1 description</label>
                                            <input type="text" class="form-control" name="sec1description">
                                        </div>
                                        <div class="mb-3">
                                            <label for="section2title">section 2 title</label>
                                            <input type="text" class="form-control" name="sec2title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="section2description">section 2 description</label>
                                            <input type="text" class="form-control" name="sec2description">
                                        </div>
                                        <div class="mb-3">
                                            <label for="section3title">section 3 title</label>
                                            <input type="text" class="form-control" name="sec3title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="section3description">section 3 description</label>
                                            <input type="text" class="form-control" name="sec3description">
                                        </div>
                                        <div class="mb-3">
                                            <label for="section4title">section 4 title</label>
                                            <input type="text" class="form-control" name="sec4title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="section4description">section 4 description</label>
                                            <input type="text" class="form-control" name="sec4description">
                                        </div>

                                        <div class="mb-3 footer text-end">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <header>
                                        <h3>Our Services</h3>
                                    </header>
                                    <hr style="margin: 1rem -1rem;" />
                                    <div class="table-responsive">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th class="text-center">Image</th>
                                                    <th class="text-center">Title</th>
                                                    <th class="text-center">section 1 title</th>
                                                    <th class="text-center">section 1 description</th>
                                                    <th class="text-center">section 2 title</th>
                                                    <th class="text-center">section 2 description</th>
                                                    <th class="text-center">section 3 title</th>
                                                    <th class="text-center">section 4 description</th>
                                                    <th class="text-center">section 4 title</th>
                                                    <th class="text-center">section 4 description</th>
                                                    <th class="text-center" scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($dataourservices as $item)
                                                    <tr id = "{{$item->id}}">
                                                        <td>{{$loop->index+1}}</td>
                                                        <td><img src="{{$item->url_image}}" alt="" class="w-100 h-100"></td>
                                                        <td class="text-center">{{ $item->title }}</td>
                                                        <td class="text-center">{{ $item->section1title }}</td>
                                                        <td class="text-center">{{ $item->section1description }}</td>
                                                        <td class="text-center">{{ $item->section2title }}</td>
                                                        <td class="text-center">{{ $item->section2description }}</td>
                                                        <td class="text-center">{{ $item->section3title }}</td>
                                                        <td class="text-center">{{ $item->section3description }}</td>
                                                        <td class="text-center">{{ $item->section4title }}</td>
                                                        <td class="text-center">{{ $item->section4description }}</td>
                                                        <td class="text-center d-flex flex-nowrap">
                                                            <button  class="btn btn-info btn-circle displayCarouselDetail">
                                                                <i class="fas fa-info-circle"></i>
                                                            </button>
                                                            <a href="/admin/cms/ourservices/delete/{{$item->id}}" class="btn btn-danger btn-circle">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
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

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <div class="modal" tabindex="-1" id="modal-displayedit">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Our Services</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post" id = "form-update-displaybanner" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="imagefile" class="form-label">Image File</label>
                                    <input type="file" class="form-control" name="imagefilemodal">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="titlemodal" id="db-title">
                                </div>
                                <div class="mb-3">
                                    <label for="section1title">section 1 title</label>
                                    <input type="text" class="form-control" name="sec1titlemodal" id = "db-sec1title">
                                </div>
                                <div class="mb-3">
                                    <label for="section1description">section 1 description</label>
                                    <input type="text" class="form-control" name="sec1descriptionmodal" id = "db-sec1description">
                                </div>
                                <div class="mb-3">
                                    <label for="section2title">section 2 title</label>
                                    <input type="text" class="form-control" name="sec2titlemodal" id = "db-sec2title">
                                </div>
                                <div class="mb-3">
                                    <label for="section2description">section 2 description</label>
                                    <input type="text" class="form-control" name="sec2descriptionmodal" id = "db-sec2description">
                                </div>
                                <div class="mb-3">
                                    <label for="section3title">section 3 title</label>
                                    <input type="text" class="form-control" name="sec3titlemodal" id = "db-sec3title">
                                </div>
                                <div class="mb-3">
                                    <label for="section3description">section 3 description</label>
                                    <input type="text" class="form-control" name="sec3descriptionmodal" id = "db-sec3description">
                                </div>
                                <div class="mb-3">
                                    <label for="section4title">section 4 title</label>
                                    <input type="text" class="form-control" name="sec4titlemodal" id = "db-sec4title">
                                </div>
                                <div class="mb-3">
                                    <label for="section4description">section 4 description</label>
                                    <input type="text" class="form-control" name="sec4descriptionmodal" id = "db-sec4description">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->







    <!-- Bootstrap core JavaScript-->
    {{-- <script src="vendor/jquery/jquery.min.js"></script> --}}



    <script src="{{ asset('vendor_admin/jquery/jquery.min.js') }}"></script>
    {{-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{ asset('vendor_admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    {{-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> --}}
    <script src="{{ asset('vendor_admin/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    {{-- <script src="js/sb-admin-2.min.js"></script> --}}
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>


    <!-- Page level plugins -->
    {{-- <script src="vendor/chart.js/Chart.min.js"></script> --}}

    <!-- Page level custom scripts -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    {{-- <script src="js/demo/chart-area-demo.js"></script> --}}
    {{-- <script src="js/demo/chart-pie-demo.js"></script> --}}

    <script>
        $('.displayCarouselDetail').on('click', function(){
        var temp = $(this).closest('tr').children();
        $('#form-update-displaybanner').prop('action',"/admin/cms/ourservices/update/"+$(this).closest('tr').attr('id'));

        $('#db-title').val(temp.eq(2).html());
        $('#db-sec1title').val(temp.eq(3).html());
        $('#db-sec1description').val(temp.eq(4).html());
        $('#db-sec2title').val(temp.eq(5).html());
        $('#db-sec2description').val(temp.eq(6).html());
        $('#db-sec3title').val(temp.eq(7).html());
        $('#db-sec3description').val(temp.eq(8).html());
        $('#db-sec4title').val(temp.eq(9).html());
        $('#db-sec4description').val(temp.eq(10).html());
        $('#modal-displayedit').modal('show');
    });
    </script>
</body>

</html>
