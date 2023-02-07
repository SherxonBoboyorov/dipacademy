<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.min.css">
    @yield('custom_css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ route('homeAdmin') }}" class="brand-link">
            <style>
                .brand-link {
                    background-color: #007bff;
                }
            </style>
            <span class="brand-text font-weight-light" style="margin-left: 55px">Dip Academy</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    {{-- start--}}
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                             Sliders
                             <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('slider.index') }}" class="nav-link">
                               <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('slider.create') }}" class="nav-link">
                               <p>Create</p>
                            </a>
                        </li>
                        </ul>
                     </li>
                     {{-- end --}}

                     {{-- start--}}
                     <li class="nav-item">

                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            The academy
                             <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">

                        <li class="nav-item">

                            <a href="#" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>
                                About
                                 <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('page.index') }}" class="nav-link">
                                   <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('page.create') }}" class="nav-link">
                                   <p>Create</p>
                                </a>
                            </li>
                            </ul>
                         </li>
                        </ul>
                     </li>
                    {{-- end --}}

                     {{-- start--}}
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                             Advisory Board
                             <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('advisoryboard.index') }}" class="nav-link">
                               <p>List</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('advisoryboard.create') }}" class="nav-link">
                               <p>Add</p>
                            </a>
                        </li> --}}
                        </ul>
                     </li>
                     {{-- end --}}

                       {{-- start--}}
                       <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                             Leadership
                             <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('leadership.index') }}" class="nav-link">
                               <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('leadership.create') }}" class="nav-link">
                               <p>Create</p>
                            </a>
                        </li>
                        </ul>
                     </li>
                     {{-- end --}}


                     {{-- start--}}

                     <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>
                                Norms & Statements
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('statement.index') }}" class="nav-link">
                                   <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('statement.create') }}" class="nav-link">
                                   <p>Create</p>
                                </a>
                            </li>
                            </ul>

                     </li>
                     {{-- end--}}


                     {{-- start--}}

                     <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>
                                Departments & Staff
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('department.index') }}" class="nav-link">
                                   <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('department.create') }}" class="nav-link">
                                   <p>Create</p>
                                </a>
                            </li>
                            </ul>

                     </li>
                     {{-- end--}}

                      {{-- start--}}

                      <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>
                                Team
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('team.index') }}" class="nav-link">
                                   <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('team.create') }}" class="nav-link">
                                   <p>Create</p>
                                </a>
                            </li>
                            </ul>

                     </li>
                     {{-- end--}}


                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper" style="background-color: #FFFFFF">
        @yield('content')
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>

<script src="/admin/plugins/jquery/jquery.min.js"></script>
<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin/dist/js/adminlte.js"></script>

<!-- App js -->
<script src="{{ asset('admin/js/app.js') }}"></script>
@yield('custom_js')
</body>
</html>
