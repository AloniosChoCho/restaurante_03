<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title> @yield('title') | Agroxa - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset ('backend/images/favicon.ico') }} ">

    @yield('time')

    @yield('alert1')
        <link href="{{ asset ('backend/libs/ion-rangeslider/css/ion.rangeSlider.min.css') }} " rel="stylesheet" type="text/css" />


        <link href="{{ asset ('backend/libs/magnific-popup/magnific-popup.css') }} " rel="stylesheet" type="text/css" />
        <link href="{{ asset ('backend/css/bootstrap.min.css') }} " id="bootstrap-style" rel="stylesheet" type="text/css" />

        <link href="{{ asset ('backend/css/icons.min.css') }} " rel="stylesheet" type="text/css" />

        <link href="{{ asset ('backend/css/app.min.css') }} " id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset ('backend/css/style.css') }}">
    </head>
    <body data-topbar="colored">

        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <div class="navbar-brand-box">
                            <a href="#" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset ('backend/images/logo-sm-dark.png') }} " alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset ('backend/images/logo-dark.png') }} " alt="" height="24">
                                </span>
                            </a>

                            <a href="#" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset ('backend/images/logo-sm-light.png') }} " alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset ('backend/images/logo-light.png') }} " alt="" height="24">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>


                        <div class="dropdown d-none d-lg-inline-block align-self-center">
                            <button class="btn btn-header waves-effect  dropdown-toggle" type="button" id="createNewDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Create New<i class="mdi mdi-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="createNewDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-bell"></i>
                                <span class="badge bg-info rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <h5 class="p-3 text-dark mb-0">Notifications (37)</h5>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex mt-3">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="mdi mdi-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex mt-3">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                    <i class="mdi mdi-message"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">New Massage received</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">You have 87 unread message
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex mt-3">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-info rounded-circle font-size-16">
                                                    <i class="mdi mdi-flag"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex mt-3">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="mdi mdi-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Your Order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">It will seem like simplified English
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex mt-3">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-danger rounded-circle font-size-16">
                                                    <i class="mdi mdi-message"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">New Massage received</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">You have 87 unread message
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="p-2 d-grid">
                                    <a class="font-size-14 text-center" href="javascript:void(0)">View all</a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset ('backend/images/users/avatar-4.jpg') }} "
                                    alt="Header Avatar">
                            </button>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-account-circle font-size-16 align-middle me-2 text-muted"></i>
                                    <span>Profile</span></a>
                                <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-wallet font-size-16 align-middle text-muted me-2"></i>
                                    <span>My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i
                                        class="mdi mdi-wrench font-size-16 align-middle text-muted me-2"></i>
                                    <span>Settings</span></a>
                                <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-lock-open-outline font-size-16 text-muted align-middle me-2"></i>
                                    <span>Lock screen</span></a>
                                <div class="dropdown-divider"></div>



                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                                <a class="dropdown-item text-primary" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit()">
                                    <i class="mdi mdi-power font-size-16 align-middle me-2 text-primary"></i>
                                    <span>Cerrar sesion</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-cog bx-spin"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header>

            <div class="vertical-menu">

                <div data-simplebar class="h-100">
                    <div class="user-details">
                        <div class="d-flex">
                            <div class="me-2">
                                <img src="{{ asset ('backend/images/users/avatar-4.jpg') }} " alt="" class="avatar-md rounded-circle">
                            </div>
                            <div class="user-info w-100">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Donald Johnson
                                        <i class="mdi mdi-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-account-circle text-muted me-2"></i>
                                                Profile<div class="ripple-wrapper me-2"></div>
                                            </a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-cog text-muted me-2"></i>
                                                Settings</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock-open-outline text-muted me-2"></i>
                                                Lock screen</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-power text-muted me-2"></i>
                                                Logout</a></li>
                                    </ul>
                                </div>

                                <p class="text-white-50 m-0">Administrator</p>
                            </div>
                        </div>
                    </div>


                    <div id="sidebar-menu">
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="{{ route('Dashboard') }}" class="waves-effect">
                                    <i class="mdi mdi-home"></i><span class="badge bg-primary float-end">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-title">administrar</li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-email"></i>
                                    <span>Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('Inbox') }}">Inbox</a></li>
                                    <li><a href="{{ route('Email') }}">Read Email</a></li>
                                    <li><a href="{{ route('Compose') }}">Email Compose</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('users') }}" class="waves-effect">
                                    <i class="fas fa-users"></i>
                                    <span>Usuarios</span>
                                </a>
                            </li>

                            {{-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-buffer"></i>
                                    <span>UI Elements</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-pagination.html">Pagination</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                </ul>
                            </li> --}}

                            {{-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-black-mesa"></i>
                                    <span>Components</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="components-lightbox.html">Lightbox</a></li>
                                    <li><a href="components-range-slider.html">Range Slider</a></li>
                                    <li><a href="components-session-timeout.html">Session Timeout</a></li>
                                    <li><a href="components-sweet-alert.html">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="mdi mdi-clipboard"></i>
                                    <span class="badge bg-success float-end">6</span>
                                    <span>Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-finance"></i>
                                    <span>Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><a href="charts-c3.html">C3 Charts</a></li>
                                    <li><a href="charts-morris.html">Morris Charts</a></li>
                                    <li><a href="charts-knob.html">Jquery Knob Chart</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-table-settings"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-album"></i>
                                    <span>Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-ion-icons.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                    <li><a href="icons-themify-icons.html">Themify Icons</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect">
                                    <i class="mdi mdi-calendar-check"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-google-maps"></i>
                                    <span>Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                </ul>
                            </li> --}}

                            <li class="menu-title text-uppercase">Extras</li>

                            {{-- <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="mdi mdi-page-layout-sidebar-left"></i>
                                    <span class="badge bg-warning float-end">New</span>
                                    <span>Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);" class="has-arrow">Vertical</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                            <li><a href="layouts-sidebar-user.html">Sidebar With User</a></li>
                                            <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                            <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                            <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                            <li><a href="layouts-page-title2.html">Page Title 2</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                            <li><a href="layouts-hori-topbarlight.html">Topbar Light</a></li>
                                            <li><a href="layouts-hori-boxed.html">Boxed Layout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-file-document-multiple"></i>
                                    <span>Pages</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    {{-- <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-directory.html">Directory</a></li> --}}
                                    <li><a href="{{ route('Start') }}">Starter Page</a></li>
                                    {{-- <li><a href="pages-error404.html">Error 404</a></li>
                                    <li><a href="pages-error500.html">Error 500</a></li> --}}
                                </ul>
                            </li>

                            {{-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-file-tree"></i>
                                    <span>Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}

                        </ul>
                    </div>


                </div>
            </div>



           @yield('content')


           <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>


                <hr class="" />
                <h6 class="text-center mb-0">Seleccione tema</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <label for="light-mode-switch" class="cursor-pointer select-none">
                            <img src="{{ asset ('backend/images/layouts/layout-1.png') }} " class="img-fluid img-thumbnail" alt="">
                        </label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice cursor-pointer select-none" id="light-mode-switch" checked />
                        <label class="form-check-label cursor-pointer select-none" for="light-mode-switch">Modo claro</label>
                    </div>





                    <div class="mb-2">
                        <label for="dark-mode-switch" class="cursor-pointer select-none">
                               <img src="{{ asset ('backend/images/layouts/layout-2.png') }} " class="img-fluid img-thumbnail" alt="">
                        </label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice cursor-pointer select-none" id="dark-mode-switch"
                            data-bsStyle="{{ asset ('backend/css/bootstrap-dark.min.css') }} " data-appStyle="{{ asset ('backend/css/app-dark.min.css') }} " />
                        <label class="form-check-label cursor-pointer select-none" for="dark-mode-switch">Modo oscuro</label>
                    </div>




                </div>

            </div>
            </div>


        <div class="rightbar-overlay"></div>


        <script src="{{ asset ('backend/libs/jquery/jquery.min.js') }} "></script>
        <script src="{{ asset ('backend/libs/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @yield('scripts')
        <script src="{{ asset ('backend/libs/metismenu/metisMenu.min.js') }} "></script>
        <script src="{{ asset ('backend/libs/simplebar/simplebar.min.js') }} "></script>
        <script src="{{ asset ('backend/libs/node-waves/waves.min.js') }} "></script>
        <script src="{{ asset ('backend/libs/jquery-sparkline/jquery.sparkline.min.js') }} "></script>
        <script src="{{ asset ('backend/libs/peity/jquery.peity.min.js') }} "></script>
        <script src="{{ asset ('backend/libs/morris.js/morris.min.js') }} "></script>
        <script src="{{ asset ('backend/libs/raphael/raphael.min.js') }} "></script>
        {{-- <script src="{{ asset ('backend/js/pages/dashboard.init.js') }} "></script>--}}
        <script src="{{ asset ('backend/js/app.js') }} "></script>
        <script src="{{ asset ('backend/libs/magnific-popup/jquery.magnific-popup.min.js') }} "></script>
        <script src="{{ asset ('backend/js/pages/lightbox.init.js') }} "></script>
        <script src="{{ asset ('backend/libs/ion-rangeslider/js/ion.rangeSlider.min.js') }} "></script>
        <script src="{{ asset ('backend/js/pages/range-sliders.init.js') }} "></script>
    </body>
</html>
