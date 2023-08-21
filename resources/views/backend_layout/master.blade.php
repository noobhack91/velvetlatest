<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Velvet Klub</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('images/velvet_favicon.png') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('style.css') }}">

  @yield('custom_css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('homepage') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
      </li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->



    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">

          <div class="custom-admin-logo">
          <a href="{{ route('homepage') }}" class="logo logo_image">
            <img src="{{ asset('images/velvet_lg.png'); }}" alt="">
          </a>
          </div>
          <a href="#" class="d-block">
            @if (auth()->check())
              @if (auth()->user()->role=='admin')


              <a href="{{url('admin/profile/'. encrypt(auth()->user()->id))}}" class="nav-link">{{ auth()->user()->name }}</a>
              @endif
            @endif
            @if (auth()->check())
              @if (auth()->user()->role=='customer')
              <a href="{{url('customer/profile/'. encrypt(auth()->user()->id))}}" class="nav-link">{{ auth()->user()->name }}</a>
              @endif
            @endif
            @if (auth()->check())
              @if (auth()->user()->role=='model')
              <a href="{{url('model/profile/'. encrypt(auth()->user()->id))}}" class="nav-link">{{ auth()->user()->name }}</a>
              @endif
            @endif

            @if (auth()->check())
              @if (auth()->user()->role=='agency')
              <a href="{{url('agency/profile/'. encrypt(auth()->user()->id))}}" class="nav-link">{{ auth()->user()->name }}</a>
              @endif
            @endif

          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!--<div class="form-inline">-->
      <!--  <div class="input-group" data-widget="sidebar-search">-->
      <!--    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">-->
      <!--    <div class="input-group-append">-->
      <!--      <button class="btn btn-sidebar">-->
      <!--        <i class="fas fa-search fa-fw"></i>-->
      <!--      </button>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->

      <!-- Sidebar Menu -->
       <!-- Sidebar Menu -->
       <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

             @if (auth()->check())
               @if (auth()->user()->role=='admin')
               <li class="nav-item">
                  <a href="{{url('admin/')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                     Dashboard
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{url('admin/')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                      </a>
                  </li>
                  </ul>
                </li>


               <li class="nav-item">
                  <a href="{{url('admin/users')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      Customers
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{url('admin/users')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Customers</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{url('admin/addcustomer')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Customer</p>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="{{url('admin/models')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      Models
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{url('admin/models')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Models</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('admin/modelVerification')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Models Verification </p>
                        </a>
                      </li>
                    <li class="nav-item">
                      <a href="{{url('admin/addmodel')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Models</p>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="{{url('admin/blogs')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      Blogs
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{url('admin/blogs')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Blogs</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{url('admin/addblog')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Blog</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="{{url('admin/agencies')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      Agency
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{url('admin/agencies')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Agency</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{url('admin/addagency')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Agency</p>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="{{url('admin/pages')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      Pages
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{url('admin/pages')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pages</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{url('admin/addpage')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Page</p>
                      </a>
                    </li>
                  </ul>
                </li>

              <li class="nav-item">
                  <a href="{{url('admin/profile/'. encrypt(auth()->user()->id))}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      Profile
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                   <li class="nav-item">
                <a href="{{url('admin/profile/'. encrypt(auth()->user()->id))}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/profile/updatepassword/'. encrypt(auth()->user()->id))}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Password </p>
                </a>
              </li>
            </ul>
          </li>
            </ul>
          </li>
            </ul>
          </li>

              @endif
            @endif
            @if (auth()->check())
               @if (auth()->user()->role=='customer')
               <li class="nav-item">
                  <a href="{{url('customer/')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                     Dashboard
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{url('customer/')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                      </a>
                    </li>

                  </ul>
                </li>



              <li class="nav-item">
                  <a href="{{url('customer/profile/'. encrypt(auth()->user()->id))}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      Profile
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                   <li class="nav-item">
                <a href="{{url('customer/profile/'. encrypt(auth()->user()->id))}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('customer/profile/updatepassword/'. encrypt(auth()->user()->id))}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Password </p>
                </a>
              </li>
            </ul>
          </li>






              @endif
            @endif

            @if (auth()->check())
               @if (auth()->user()->role=='agency')
               <li class="nav-item">
                  <a href="{{url('agency/')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                     Dashboard
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{url('agency/')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                      </a>
                    </li>

                  </ul>
                </li>


                <li class="nav-item">
                  <a href="{{url('agency/models')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      Models
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{url('agency/models')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Models</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{url('agency/addmodel')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Models</p>
                      </a>
                    </li>
                  </ul>
                </li>



              <li class="nav-item">
                  <a href="{{url('agency/profile/'. encrypt(auth()->user()->id))}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      Profile
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                   <li class="nav-item">
                <a href="{{url('agency/profile/'. encrypt(auth()->user()->id))}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('agency/profile/updatepassword/'. encrypt(auth()->user()->id))}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Password </p>
                </a>
              </li>
            </ul>
          </li>

              @endif
            @endif


            @if (auth()->check())
               @if (auth()->user()->role=='model')

                <li class="nav-item">
                      <a href="{{url('model/')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                      </a>
                </li>
                <!--<li class="nav-item"><a href="{{url('model/profile/'. encrypt(auth()->user()->id))}}" class="nav-link">-->
                <!--    <i class="far fa-circle nav-icon"></i><p>Profile</p></a>-->
                <!--</li>-->
                <li class="nav-item"><a href="{{url('model/profile_details/'. encrypt(auth()->user()->id))}}" class="nav-link"><i class="far fa-circle nav-icon"></i>
                    <p>Profile Details</p></a>
                </li>
                <li class="nav-item"><a href="{{url('model/profile_text/update/'. encrypt(auth()->user()->id))}}" class="nav-link"><i class="far fa-circle nav-icon"></i>
                    <p>Profile Text</p></a>
                </li>
                <li class="nav-item"><a href="{{url('model/photos/update/'. encrypt(auth()->user()->id))}}" class="nav-link"><i class="far fa-circle nav-icon"></i>
                    <p>Photos</p></a>
                </li>
                 <li class="nav-item"><a href="{{url('model/base_location/update/'. encrypt(auth()->user()->id))}}" class="nav-link"><i class="far fa-circle nav-icon"></i>
                    <p>Base location</p></a>
                </li>
                <!--<li class="nav-item"><a href="{{url('model/avaliablity/'. encrypt(auth()->user()->id))}}" class="nav-link"><i class="far fa-circle nav-icon"></i>-->
                <!--    <p>Availability</p></a>-->
                <!--</li>-->
                <li class="nav-item"><a href="{{url('model/verification/'. encrypt(auth()->user()->id))}}" class="nav-link"><i class="far fa-circle nav-icon"></i>
                    <p>Verification</p></a>
                </li>
                <!--<li class="nav-item"><a href="{{url('model/profile/'. encrypt(auth()->user()->id))}}" class="nav-link"><i class="far fa-circle nav-icon"></i>-->
                <!--        <p>Profile</p></a>-->
                <!--</li>-->
                <li class="nav-item"><a href="{{url('model/profile/updatepassword/'. encrypt(auth()->user()->id))}}" class="nav-link"><i class="far fa-circle nav-icon"></i>
                        <p>Update Password </p></a>
                </li>




          <!--    <li class="nav-item">-->
          <!--        <a href="{{url('model/profile/'. encrypt(auth()->user()->id))}}" class="nav-link">-->
          <!--          <i class="nav-icon fas fa-user"></i>-->
          <!--          <p>-->
          <!--            Profile-->
          <!--            <i class="right fas fa-angle-left"></i>-->
          <!--          </p>-->
          <!--        </a>-->
          <!--        <ul class="nav nav-treeview">-->
          <!--          <li class="nav-item">-->
          <!--            <a href="{{url('model/profile_details/'. encrypt(auth()->user()->id))}}" class="nav-link">-->
          <!--              <i class="far fa-circle nav-icon"></i>-->
          <!--              <p>Profile Details</p>-->
          <!--            </a>-->
          <!--          </li>-->
          <!--          <li class="nav-item">-->
          <!--            <a href="{{url('model/profile_text/update/'. encrypt(auth()->user()->id))}}" class="nav-link">-->
          <!--              <i class="far fa-circle nav-icon"></i>-->
          <!--              <p>Profile Text</p>-->
          <!--            </a>-->
          <!--          </li>-->

          <!--          <li class="nav-item">-->
          <!--            <a href="{{url('model/photos/update/'. encrypt(auth()->user()->id))}}" class="nav-link">-->
          <!--              <i class="far fa-circle nav-icon"></i>-->
          <!--              <p>Photos</p>-->
          <!--            </a>-->
          <!--          </li>-->

          <!--          <li class="nav-item">-->
          <!--            <a href="{{url('model/base_location/update/'. encrypt(auth()->user()->id))}}" class="nav-link">-->
          <!--              <i class="far fa-circle nav-icon"></i>-->
          <!--              <p>Base location</p>-->
          <!--            </a>-->
          <!--          </li>-->

          <!--          <li class="nav-item">-->
          <!--            <a href="{{url('model/avaliablity/'. encrypt(auth()->user()->id))}}" class="nav-link">-->
          <!--              <i class="far fa-circle nav-icon"></i>-->
          <!--              <p>Availability</p>-->
          <!--            </a>-->
          <!--          </li>-->

          <!--          <li class="nav-item">-->
          <!--            <a href="{{url('model/verification/'. encrypt(auth()->user()->id))}}" class="nav-link">-->
          <!--              <i class="far fa-circle nav-icon"></i>-->
          <!--              <p>Verification</p>-->
          <!--            </a>-->
          <!--          </li>-->

          <!--          <li class="nav-item">-->
          <!--            <a href="{{url('model/profile/'. encrypt(auth()->user()->id))}}" class="nav-link">-->
          <!--              <i class="far fa-circle nav-icon"></i>-->
          <!--              <p>Profile</p>-->
          <!--            </a>-->
          <!--          </li>-->

          <!--          <li class="nav-item">-->
          <!--            <a href="{{url('model/profile/updatepassword/'. encrypt(auth()->user()->id))}}" class="nav-link">-->
          <!--              <i class="far fa-circle nav-icon"></i>-->
          <!--              <p>Update Password </p>-->
          <!--            </a>-->
          <!--          </li>-->
          <!--  </ul>-->
          <!--</li>-->

              @endif
            @endif



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!--- Content Call --->

  <div id="loader">
    <img class="loaderimg" src="{{ asset('images/imageloader.gif') }}">
  </div>
  @yield('content')

  <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Select Customer</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="userdata">

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
      <!-- /.modal -->

      <div class="modal fade" id="chqueModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Select Customer</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="chqueModaldata">

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="chqueModalmultiple">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Select Customer</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="chqueModaldatamultiple">

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
      <!-- /.modal -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="https://unpkg.com/@ckeditor/ckeditor5-build-classic@12.2.0/build/ckeditor.js"></script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/5.2.0/js/tableexport.min.js" integrity="sha512-XmZS54be9JGMZjf+zk61JZaLZyjTRgs41JLSmx5QlIP5F+sSGIyzD2eJyxD4K6kGGr7AsVhaitzZ2WTfzpsQzg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('asset/js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js"></script>






<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>

<script>
      @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              toastr.error("{{ $error }}");
          @endforeach
      @endif
</script>
@yield('custom_js')

</body>
</html>
