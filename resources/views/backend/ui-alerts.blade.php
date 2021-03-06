@extends('backend.layouts.app2')
@section('title')
    Alerts
@endsection
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Alerts</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                <li class="breadcrumb-item active">Alerts</li>
                            </ol>
                        </div>

                        <div class="state-information d-none d-sm-block">
                            <div class="state-graph">
                                <div id="header-chart-1"></div>
                                <div class="info">Balance $ 2,317</div>
                            </div>
                            <div class="state-graph">
                                <div id="header-chart-2"></div>
                                <div class="info">Item Sold 1230</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Start Page Content Wrapper -->
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Examples</h4>
                                <p class="card-title-desc">Alerts are available for any length of
                                    text, as well as an optional dismiss button. For proper styling, use one
                                    of the four <strong>required</strong> contextual classes (e.g., <code
                                        class="highlighter-rouge">.alert-success</code>). For inline
                                    dismissal, use the alerts jQuery plugin.</p>

                                <div class="">
                                    <div class="alert alert-primary" role="alert">
                                        A simple <strong>primary alert</strong> ???check it out!
                                    </div>
                                    <div class="alert alert-success" role="alert">
                                        A simple <strong>success alert</strong> ???check it out!
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        A simple <strong>info alert</strong> ???check it out!
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        A simple <strong>warning alert</strong> ???check it out!
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        A simple <strong>danger alert</strong> ???check it out!
                                    </div>
                                    <div class="alert alert-dark mb-0" role="alert">
                                        A simple <strong>dark alert</strong> ???check it out!
                                    </div>
                                </div>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Link color</h4>
                                <p class="card-title-desc">Use the <code
                                        class="highlighter-rouge">.alert-link</code>
                                    utility class to
                                    quickly provide matching colored links within any alert.</p>

                                <div class="">
                                    <div class="alert alert-primary" role="alert">
                                        A simple primary alert with <a href="#" class="alert-link">an example
                                            link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-success" role="alert">
                                        A simple success alert with <a href="#" class="alert-link">an example
                                            link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        A simple info alert with <a href="#" class="alert-link">an example
                                            link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        A simple warning alert with <a href="#" class="alert-link">an example
                                            link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        A simple warning alert with <a href="#" class="alert-link">an example
                                            link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-dark mb-0" role="alert">
                                        A simple dark alert with <a href="#" class="alert-link">an example
                                            link</a>. Give it a click if you like.
                                    </div>
                                </div>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Dismissing</h4>
                                <p class="card-title-desc">You can see this in action with a live demo:</p>

                                <div class="">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">
                                        </button>
                                        <strong>Well done!</strong> You successfully read this important alert
                                        message.
                                    </div>
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">
                                        </button>
                                        <strong>Heads up!</strong> This alert needs your attention, but it's not
                                        super important.
                                    </div>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">
                                        </button>
                                        <strong>Warning!</strong> Better check yourself, you're not looking too
                                        good.
                                    </div>
                                    <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">
                                        </button>
                                        <strong>Oh snap!</strong> Change a few things up and try submitting
                                        again.
                                    </div>
                                </div>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Additional content</h4>
                                <p class="card-title-desc">Alerts can also contain additional HTML elements
                                    like headings and paragraphs.</p>

                                <div class="">
                                    <div class="alert alert-success mb-0" role="alert">
                                        <h4 class="alert-heading font-size-18">Well done!</h4>
                                        <p>Aww yeah, you successfully read this important alert message. This
                                            example text is going to run a bit longer so that you can see how
                                            spacing within an alert works with this kind of content.</p>
                                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to
                                            keep things nice and tidy.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Examples</h4>
                                <p class="card-title-desc">Alerts are available for any length of
                                    text, as well as an optional dismiss button. For proper styling, use one
                                    of the four <strong>required</strong> contextual classes (e.g., <code
                                        class="highlighter-rouge">.alert-success .bg-**</code>). For inline
                                    dismissal, use the alerts jQuery plugin.</p>

                                <div class="">
                                    <div class="alert alert-success bg-success text-white" role="alert">
                                        <strong>Well done!</strong> You successfully read this important alert
                                        message.
                                    </div>
                                    <div class="alert alert-info bg-info text-white" role="alert">
                                        <strong>Heads up!</strong> This alert needs your attention, but it's not
                                        super important.
                                    </div>
                                    <div class="alert alert-warning bg-warning text-white" role="alert">
                                        <strong>Warning!</strong> Better check yourself, you're not looking too
                                        good.
                                    </div>
                                    <div class="alert alert-danger bg-danger text-white mb-0" role="alert">
                                        <strong>Oh snap!</strong> Change a few things up and try submitting
                                        again.
                                    </div>
                                </div>
                            </div>
                            <!-- End Cardbody-->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page content wrapper-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <script>document.write(new Date().getFullYear())</script> ?? Agroxa <span
                        class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-primary"></i> by
                        Themesbrand.</span>
                </div>

            </div>
        </div>
    </footer>
</div>
@endsection