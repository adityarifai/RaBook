<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="{{ asset('/favicon.ico') }}"> -->
    <link rel="icon" type="image/x-icon" sizes="16x16" href="{{ asset('/favicon.ico') }}">
    <title>Admin - Read a Book @yield('title')</title>
    <link href="{{ asset('template/css/lib/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('template/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('template/css/helper.css') }}" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <!-- Dropzone -->
    <link href="{{ asset('template/css/lib/dropzone/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
           <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
       </div>
       <!-- Main wrapper  -->
       <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                        <!-- Logo icon -->
                        <b><img src="{{ asset('picture/logo.png')}}" alt="homepage" class="dark-logo" style="width: 50%; height: 50%;" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!-- <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span> -->
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            </ul>
                            <!-- User profile and search -->
                            <ul class="navbar-nav my-lg-0">
                                    <!-- Profile -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('picture/1.png') }}" alt="user" class="profile-pic" /></a>
                                        <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                            <ul class="dropdown-user">
                                                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <i class="fa fa-power-off"></i> Logout</a></li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                   @csrf
                                               </form>
                                           </ul>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                       </nav>
                   </div>
                   <!-- End header header -->
                   <!-- Left Sidebar  -->
                   <div class="left-sidebar">
                    <!-- Sidebar scroll-->
                    <div class="scroll-sidebar">
                        <!-- Sidebar navigation-->
                         <nav class="sidebar-nav">
                            <ul id="sidebarnav">
                                <li class="nav-devider"></li>
                                <li class="nav-label">Home</li>
                                    <li>
                                        <a class="" href="{{ route('admin.index2') }}" aria-expanded="false">
                                            <i class="fa fa-home"></i>
                                            <span class="hide-menu">Administrator</span>
                                        </a>
                                    </li>
                                <li class="nav-label">Features</li>
                                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-th-large"></i><span class="hide-menu">Libraries</span></a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="{{ route('libraries.index') }}">List Book</a></li>
                                            <li><a href="{{ route('libraries.addbook') }}">Add Book</a></li>
                                        </ul>
                                    </li>
                                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Books</span></a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="{{ route('books.index') }}">List Page</a></li>
                                            <li><a href="{{ route('books.addpage') }}">Add Page</a></li>
                                        </ul>
                                    </li>
                            </ul>
                        </nav>
                        <!-- End Sidebar navigation -->
                    </div>
                    <!-- End Sidebar scroll-->
                </div>
                <!-- End Left Sidebar  -->
                <!-- Page wrapper  -->
                @yield('content')
                <footer class="footer"> © 2018 All rights reserved. Template designed by ElaAdmin Powered CreativeCompany</a></footer>
                <!-- End Page wrapper  -->
            </div>

            <!-- End Wrapper -->
            <script src="{{ asset('template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
            <!-- All Jquery -->
            <script src="{{ asset('template/js/lib/jquery/jquery.min.js') }}"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="{{ asset('template/js/lib/bootstrap/js/popper.min.js') }}"></script>
            <script src="{{ asset('template/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="{{ asset('template/js/jquery.slimscroll.js') }}"></script>
            <!--Menu sidebar -->
            <script src="{{ asset('template/js/sidebarmenu.js') }}"></script>
            <!--stickey kit -->
            <script src="{{ asset('template/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>

            <!-- Sweet aler -->
            <script src="{{ asset('template/js/lib/sweetalert/sweetalert.min.js') }}"></script>
            <!-- scripit init-->
            <script src="{{ asset('template/js/lib/sweetalert/sweetalert.init.js') }}"></script>
            
            <!--Custom JavaScript -->
            <script src="{{ asset('template/js/custom.min.js') }}"></script>

            <!-- DropZone -->
            <script src="{{ asset('template/js/lib/dropzone/dropzone.js') }}"></script>

            <!-- Select 2-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
            <!-- Datatables -->
            <script src="{{ asset('template/js/lib/datatables/datatables.min.js') }}"></script>
            <script src="{{ asset('template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
            <script src="{{ asset('template/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
            <script src="{{ asset('template/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
            <script src="{{ asset('template/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
            <script src="{{ asset('template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
            <script src="{{ asset('template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }}"></script>
            <script src="{{ asset('template/js/lib/datatables/datatables-init.js') }}"></script>
            <script type="text/javascript">
              $(document).ready(function(){
                $('#example23').dataTables({
                  "ordering": false,
              });
                $('.js-example-basic-multiple').select2();
                $('.js-example-basic-single').select2();
            });
        </script>

    </body>

    </html>
