<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin-vendor/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{asset('admin-vendor/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin-css/css/sb-admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="/admin">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!--pages-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Login Screens:</h6>
                <a class="dropdown-item" href="login.html">Login</a>
                <a class="dropdown-item" href="register.html">Admin Register</a>
                <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Other Pages:</h6>
                <a class="dropdown-item" href="404.html">404 Page</a>
                <a class="dropdown-item" href="blank.html">Blank Page</a>
            </div>
        </li>
        <!--User & Product detiles-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>User & Product</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <!-- <h6 class="dropdown-header">LoginController Screens:</h6>-->
                <a class="dropdown-item" href="all-user.php">Show all user </a>
                <a class="dropdown-item" href="all-product.php">Show all product</a>
                <a class="dropdown-item" href="add-product.php">Add Product</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Other Pages:</h6>
                <a class="dropdown-item" href="404.html">404 Page</a>
                <a class="dropdown-item" href="blank.html">Blank Page</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li>
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>

            <!--product reg form-->
            <div class="container">
                <div class="card card-product mx-auto mt-5">
                    <h3><div class="card-header text-center" style="font-weight: bold">Product Add Page</div></h3>
                    <div class="row justify-content-center">
                        <div class="col-6">
                            @include('admin.error-display')

                            <form method="post" enctype="multipart/form-data" action="{{route('admin.product.store')}}">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label for="book-name">Book Name</label>
                                    <input type="text" class="form-control" id="book-name" name="product_name" value="" aria-describedby="booknameHelp" placeholder="Enter book name">
                                </div>
                                <div class="form-group">
                                    <label for="book-title">Book category name</label>
                                    <br>
                                    <select class="form-control" name="category_id" >
                                        @foreach($categories as $category)
                                        <option  value="{{ $category->id}}" >{{ $category->category_name}}</option>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="book-details">Details</label>
                                    <input type="text" class="form-control" id="book-details" name="product_details" value="" aria-describedby="detailsHelp" placeholder="Enter details">
                                </div>
                                <div class="form-group">
                                    <label for="book-photo">Image</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="file" class="form-control" id="book-photo" name="product_image[]" value="" accept="image/*" aria-describedby="photoHelp" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" class="form-control" id="book-photo" name="product_image[]" value="" accept="image/*" aria-describedby="photoHelp" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" class="form-control" id="book-photo" name="product_image[]" value="" accept="image/*" aria-describedby="photoHelp" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" class="form-control" id="book-photo" name="product_image[]" value="" accept="image/*" aria-describedby="photoHelp" placeholder="">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="book-quantity">Quantity</label>
                                    <input type="number" class="form-control" id="book-quantity" name="product_quantity" value="" aria-describedby="quantityHelp" placeholder="Enter book quantity">
                                </div>
                                <div class="form-group">
                                    <label for="book-price">Price</label>
                                    <input type="number" class="form-control" id="book-price" name="product_price" value="" aria-describedby="priceHelp" placeholder="Enter price">
                                </div>
                                <div class="form-group">
                                    <label for="book-price">Status</label>
                                    <input type="number" class="form-control" id="book-price" name="product_status" value="" aria-describedby="priceHelp" placeholder="Enter price">
                                </div>
                                <div class="form-group">
                                    <label for="book-price">offer-price</label>
                                    <input type="number" class="form-control" id="book-price" name="offer_price" value="" aria-describedby="priceHelp" placeholder="Enter price">
                                </div>


                                <div class="form-group">
                                    <label for="book-publish-date">Publish Date</label>
                                    <input type="date" class="form-control" id="book-publish-date" name="book-publish-date" value="" aria-describedby="publishdateHelp" placeholder="">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <!--<footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2019</span>
                    </div>
                </div>
            </footer>-->

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin-vendor/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin-vendor/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin-vendor/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{asset('admin-vendor/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin-vendor/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin-vendor/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin-js/js/sb-admin.min.js')}}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{asset('admin-js/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('admin-js/js/demo/chart-area-demo.js')}}"></script>

</body>

</html>
