<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مديرية التربية لولاية الوادي</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets/media/image/favicon.png') }}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ url('vendors/bundle.css') }}" type="text/css">

    @yield('head')

    <!-- App styles -->
    <link rel="stylesheet" href="{{ url('assets/css/app.min.css') }}" type="text/css">
</head>
<body class="@yield('bodyClass')">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<!-- begin::header -->
<div class="header">

    <div>
        <ul class="navbar-nav">

            <!-- begin::navigation-toggler -->
            <li class="nav-item navigation-toggler">
                <a href="#" class="nav-link" title="Hide navigation">
                    <i data-feather="arrow-left"></i>
                </a>
            </li>
            <li class="nav-item navigation-toggler mobile-toggler">
                <a href="#" class="nav-link" title="Show navigation">
                    <i data-feather="menu"></i>
                </a>
            </li>
            <!-- end::navigation-toggler -->

           <!-- <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Create</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">User</a>
                    <a href="#" class="dropdown-item">Category</a>
                    <a href="#" class="dropdown-item">Product</a>
                    <a href="#" class="dropdown-item">Report</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Apps</a>
                <div class="dropdown-menu dropdown-menu-big">
                    <div class="p-3">
                        <div class="row row-xs">
                            <div class="col-6">
                                <a href="#">
                                    <div class="p-3 border-radius-1 border text-center mb-3">
                                        <i class="width-23 height-23" data-feather="message-circle"></i>
                                        <div class="mt-2">Chat</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#">
                                    <div class="p-3 border-radius-1 border text-center mb-3">
                                        <i class="width-23 height-23" data-feather="mail"></i>
                                        <div class="mt-2">Mail</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ ('apps.todo') }}">
                                    <div class="p-3 border-radius-1 border text-center">
                                        <i class="width-23 height-23" data-feather="check-circle"></i>
                                        <div class="mt-2">Todo</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ ('apps.file-manager') }}">
                                    <div class="p-3 border-radius-1 border text-center">
                                        <i class="width-23 height-23" data-feather="file"></i>
                                        <div class="mt-2">File Manager</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>-->
        </ul>
    </div>

    <div>
        <ul class="navbar-nav">
            <!-- begin::header search -->
            <li class="nav-item">
                <a href="#" class="nav-link" title="Search" data-toggle="dropdown">
                    <i data-feather="search"></i>
                </a>
                <div class="dropdown-menu p-2 dropdown-menu-right">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-prepend">
                                <button class="btn" type="button">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <!-- end::header search -->

            <!-- begin::header minimize/maximize -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                    <i class="maximize" data-feather="maximize"></i>
                    <i class="minimize" data-feather="minimize"></i>
                </a>
            </li>
            <!-- end::header minimize/maximize -->

            <!-- begin::header messages dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link nav-link-notify" title="Chats" data-toggle="dropdown">
                    <i data-feather="message-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                    <div class="p-4 text-center d-flex justify-content-between"
                         data-backround-image="{{ url('assets/media/image/image1.jpg') }}">
                        <h6 class="mb-0">Chats</h6>
                        <small class="font-size-11 opacity-7">2 unread chats</small>
                    </div>
                    <div>
                        <ul class="list-group list-group-flush">
                            <li>
                                <a href="#" class="list-group-item d-flex hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                            <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                                 class="rounded-circle" alt="user">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            Herbie Pallatina
                                            <i title="Mark as read" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                        </p>
                                        <div class="small text-muted">
                                            <span class="mr-2">02:30 PM</span>
                                            <span>Have you madimage</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="list-group-item d-flex align-items-center hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                            <img src="{{ url('assets/media/image/user/women_avatar5.jpg') }}"
                                                 class="rounded-circle" alt="user">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            Andrei Miners
                                            <i title="Mark as read" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                        </p>
                                        <div class="small text-muted">
                                            <span class="mr-2">08:36 PM</span>
                                            <span>I have a meetinimage</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="text-divider small pb-2 pl-3 pt-3">
                                <span>Old chats</span>
                            </li>
                            <li>
                                <a href="#"
                                   class="list-group-item d-flex align-items-center hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                            <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                                 class="rounded-circle" alt="user">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            Kevin added
                                            <i title="Mark as unread" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                        </p>
                                        <div class="small text-muted">
                                            <span class="mr-2">11:09 PM</span>
                                            <span>Have you madimage</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item d-flex hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                            <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                                 class="rounded-circle" alt="user">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            Eugenio Carnelley
                                            <i title="Mark as unread" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                        </p>
                                        <div class="small text-muted">
                                            <span class="mr-2">Yesterday</span>
                                            <span>I have a meetinimage</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="list-group-item d-flex align-items-center hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                            <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle" alt="user">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            Neely Ferdinand
                                            <i title="Mark as unread" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                        </p>
                                        <div class="small text-muted">
                                            <span class="mr-2">Yesterday</span>
                                            <span>I have a meetinimage</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-2 text-right">
                        <ul class="list-inline small">
                            <li class="list-inline-item">
                                <a href="#">Mark All Read</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <!-- end::header messages dropdown -->

            <!-- begin::header notification dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                    <i data-feather="bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                    <div class="p-4 text-center d-flex justify-content-between"
                         data-backround-image="{{ url('assets/media/image/image1.jpg') }}">
                        <h6 class="mb-0">Notifications</h6>
                        <small class="font-size-11 opacity-7">1 unread notifications</small>
                    </div>
                    <div>
                        <ul class="list-group list-group-flush">
                            <li>
                                <a href="#" class="list-group-item d-flex hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            New customer registered
                                            <i title="Mark as read" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                        </p>
                                        <span class="text-muted small">20 min ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="text-divider small pb-2 pl-3 pt-3">
                                <span>Old notifications</span>
                            </li>
                            <li>
                                <a href="#" class="list-group-item d-flex hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            New Order Recieved
                                            <i title="Mark as unread" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                        </p>
                                        <span class="text-muted small">45 sec ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="list-group-item d-flex align-items-center hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            Server Limit Reached!
                                            <i title="Mark as unread" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                        </p>
                                        <span class="text-muted small">55 sec ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="list-group-item d-flex align-items-center hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            Apps are ready for update
                                            <i title="Mark as unread" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                        </p>
                                        <span class="text-muted small">Yesterday</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-2 text-right">
                        <ul class="list-inline small">
                            <li class="list-inline-item">
                                <a href="#">Mark All Read</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <!-- end::header notification dropdown -->

            <!-- begin::user menu -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link" title="User menu" data-toggle="dropdown">
                    <i data-feather="settings"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                    <div class="p-4 text-center d-flex justify-content-between"
                         data-backround-image="{{ url('assets/media/image/image1.jpg') }}">
                        <h6 class="mb-0">Settings</h6>
                    </div>
                    <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                    <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                    <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                                    <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                    <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                    <label class="custom-control-label" for="customSwitch6">Enable report generation.</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <!-- end::user menu -->
        </ul>

        <!-- begin::mobile header toggler -->
        <ul class="navbar-nav d-flex align-items-center">
            <li class="nav-item header-toggler">
                <a href="#" class="nav-link">
                    <i data-feather="arrow-down"></i>
                </a>
            </li>
        </ul>
        <!-- end::mobile header toggler -->
    </div>

</div>
<!-- end::header -->

<!-- begin::main -->
<div id="main">

    <!-- begin::navigation -->
    <div class="navigation">

        <div class="navigation-menu-tab">
            <div>
                <div class="navigation-menu-tab-header" data-toggle="tooltip" title="Roxana Roussell" data-placement="right">
                    <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                        <figure class="avatar avatar-sm">
                            <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}" class="rounded-circle" alt="avatar">
                        </figure>
                    </a>
                   <!--
                     <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-3 text-center" data-backround-image="{{ url('assets/media/image/image1.jpg') }}">
                            <figure class="avatar mb-3">
                                <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}" class="rounded-circle" alt="image">
                            </figure>
                            <h6 class="d-flex align-items-center justify-content-center">
                                Roxana Roussell
                                <a href="#" class="btn btn-primary btn-sm ml-2" data-toggle="tooltip" title="Edit profile">
                                    <i data-feather="edit-2"></i>
                                </a>
                            </h6>
                            <small>Balance: <strong>$105</strong></small>
                        </div>
                        <div class="dropdown-menu-body">
                            <div class="border-bottom p-4">
                                <h6 class="text-uppercase font-size-11 d-flex justify-content-between">
                                    Storage
                                    <span>%25</span>
                                </h6>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 35%;"
                                         aria-valuenow="35"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item">Profile</a>
                                <a href="#" class="list-group-item d-flex">
                                    Followers <span class="text-muted ml-auto">214</span>
                                </a>
                                <a href="#" class="list-group-item d-flex">
                                    Inbox <span class="text-muted ml-auto">18</span>
                                </a>
                                <a href="#" class="list-group-item" data-sidebar-target="#settings">Billing</a>
                                <a href="#" class="list-group-item" data-sidebar-target="#settings">Need help?</a>
                                <a href="#" class="list-group-item text-danger" data-sidebar-target="#settings">Sign Out!</a>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
            <div class="flex-grow-1">
                <ul>
                    <li>
                        <a @if(!request()->segment(1) || request()->segment(1) == 'dashboards') class="active" @endif href="#" data-toggle="tooltip" data-placement="right" title="الامانة الخاصة"
                           data-nav-target="#dashboards">
                            <i data-feather="bar-chart-2"></i>
                        </a>
                    </li>

                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Settings">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                    <li>
                        <a href="login" data-toggle="tooltip" data-placement="right" title="Logout">
                            <i data-feather="log-out"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- begin::navigation menu -->
        <div class="navigation-menu-body">

            <!-- begin::navigation-logo -->
            <div>
                <div id="navigation-logo">
                    <a href="{{ url('/') }}">

                        الامانة الخاصة
                    </a>
                </div>
            </div>
            <!-- end::navigation-logo -->

            <div class="navigation-menu-group">

                <div @if(!request()->segment(1) || request()->segment(1) == 'sp') class="open" @endif id="dashboards">
                    <ul>
                        <li class="navigation-divider">الامانة الخاصة</li>
                        <li><a @if(!request()->segment(1) || (request()->segment(1) == 'sp' && request()->segment(3) == 'list')) class="active" @endif href="{{ route("mail-follow-list") }}">متابعة المراسلات</a></li>
                        <li><a @if(!request()->segment(1) || (request()->segment(1) == 'sp' && request()->segment(3) == 'add')) class="active" @endif href="{{ route("mail-follow-add") }}"> مراسلة جديدة</a></li>

                    </ul>
                </div>

            </div>
        </div>
        <!-- end::navigation menu -->

    </div>
    <!-- end::navigation -->

    <!-- begin::main-content -->
    <div class="main-content">

        @yield('content')

        <!-- begin::footer -->
        <footer>
            <div class="container-fluid">
                <div>الحقوق محفوظة لمديرية التربية لولاية الوادي</div>
                <div>
                    <nav class="nav">
                        <a class="nav-link">بنطوير - كحلة محمد الحبيب -</a>
                    </nav>
                </div>
            </div>
        </footer>
        <!-- end::footer -->

    </div>
    <!-- end::main-content -->

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="{{ url('vendors/bundle.js') }}"></script>

@yield('script')

<!-- App scripts -->
<script src="{{ url('assets/js/app.min.js') }}"></script>

</body>
</html>
