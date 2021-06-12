@php use Illuminate\Support\Facades\Session;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/dash" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/dash" class="brand-link">
            <img src="{{asset('/img/cdv.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">CDV_SKLEP</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">
                        @php
                        $user = Auth::user();
                            if(isset($user))   print $user->name;
                            else echo '<a href="'.route('login').'">Log in!</a>';
                        @endphp
                    </a>
                </div>
            </div>



            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{route('admin_panel')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>ADMIN SHOP MANAGEMENT</p>
                            <i class="fas fa-angle-left right"></i>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('users_management')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User management</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('view_products_manage')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Products management</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/boxed.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View orders</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                T-shirts
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/list/category/shirts/type/basic" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Basic</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/shirts/type/with_text" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>With text</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/shirts/type/with_picture" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>With picture</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/shirts/type/polo" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Polo</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/shirts/type/sport" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sport</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/shirts/type/long_sleeve" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Long sleeve</p>
                                </a>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Sweatshirt
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/list/category/hoodies/type/hoodie" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Hoodie</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/hoodies/type/basic" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Basic</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/hoodies/type/with_slider" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>With slider</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                Pants
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/list/category/trousers/type/trousers" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Trousers</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/trousers/type/shorts" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Shorts</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/trousers/type/sport" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sport</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Shoes
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/list/category/sneakers/type/sneakers" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sneakers</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/sneakers/type/high" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>High</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/sneakers/type/low" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Low</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/sneakers/type/sport" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sport</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Accessories
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/list/category/accessories/type/watch" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Watches</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/accessories/type/caps" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Caps</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/accessories/type/jewelry" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Jewelry</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list/category/accessories/type/sunglasses" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sunglasses</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="pages/gallery.html" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                All
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
