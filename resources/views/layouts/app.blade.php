<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png" sizes="16x16">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css/nifty.min.css') }}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ asset('css/demo/nifty-demo-icons.min.css') }}" rel="stylesheet">


    <!--=================================================-->

    <!--Animate.css [ OPTIONAL ]-->
    <link href="{{ asset('plugins/animate-css/animate.min.css') }}" rel="stylesheet">

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!--Weather Icons [ OPTIONAL ]-->
    <link href="{{ asset('plugins/weather-icons/css/weather-icons.min.css') }}" rel="stylesheet">


    <!--Weather Wind Icons [ OPTIONAL ]-->
    <link href="{{ asset('plugins/weather-icons/css/weather-icons-wind.min.css') }}" rel="stylesheet">

    <!--Themify Icons [ OPTIONAL ]-->
    <link href="{{ asset('plugins/themify-icons/themify-icons.min.css') }}" rel="stylesheet">

    <!--Ion Icons [ OPTIONAL ]-->
    <link href="{{ asset('plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{ asset('plugins/pace/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/pace/pace.min.js') }}"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{ asset('css/demo/nifty-demo.min.css') }}" rel="stylesheet">

    <!--DataTables [ OPTIONAL ]-->
    <link href="{{ asset('plugins/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css') }}" rel="stylesheet">

    @yield('style')

    <!--Switchery [ OPTIONAL ]-->
    <link href="{{ asset('plugins/switchery/switchery.min.css') }}" rel="stylesheet">


    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="{{ asset('plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">


    <!--Bootstrap Tags Input [ OPTIONAL ]-->
    <link href="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.css') }}" rel="stylesheet">


    <!--Chosen [ OPTIONAL ]-->
    <link href="{{ asset('plugins/chosen/chosen.min.css') }}" rel="stylesheet">


    <!--noUiSlider [ OPTIONAL ]-->
    <link href="{{ asset('plugins/noUiSlider/nouislider.min.css') }}" rel="stylesheet">


    <!--Select2 [ OPTIONAL ]-->
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet">


    <!--Bootstrap Timepicker [ OPTIONAL ]-->
    <link href="{{ asset('plugins/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">


    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <link href="{{ asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    <!--Full Calendar [ OPTIONAL ]-->
    <link href="{{ asset('plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/fullcalendar/nifty-skin/fullcalendar-nifty.min.css') }}" rel="stylesheet">

    @yield('validation_style')

    <!--Summernote [ OPTIONAL ]-->
    <link href="{{ asset('plugins/summernote/summernote.min.css') }}" rel="stylesheet">

    <!-- Dark active inside box -->
    {{--<link id="theme" href="{{ asset('css/themes/type-full/theme-dark-full.min.css') }}" rel="stylesheet">--}}

    <!-- Light active inside box-->
    {{--<link id="theme" href="{{ asset('css/themes/type-full/theme-light-full.min.css') }}" rel="stylesheet">--}}

    <!-- Themes active inside box-->


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body >

<div id="container" class="effect aside-float @yield('fixed-bar') @yield('fixed-bar-right')  aside-bright mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">

            <!--Brand logo & name-->
            <!--================================-->
            <div class="navbar-header">

               <a href="{{ url('/home') }}" class="navbar-brand">
                   {{--<img src="{{ asset('img/Untitled-2.png')}}" alt="Nifty Logo" class="" >--}}
                    <img src="{{ asset('img/logo2.png')}}" alt="Nifty Logo" class="brand-icon">
                    <div class="brand-title">
                        <span class="brand-text" style="font-size: 15px;!important;">{{ config('app.name', 'Laravel') }}</span>
                    </div>
                </a>
            </div>
            <!--================================-->
            <!--End brand logo & name-->


            <!--Navbar Dropdown-->
            <!--================================-->
            <div class="navbar-content">
                <ul class="nav navbar-top-links">

                    <!--Navigation toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="tgl-menu-btn">
                        <a class="mainnav-toggle" href="#">
                            <i class="demo-pli-list-view"></i>
                        </a>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Navigation toogle button-->



                    <!--Search-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    {{--<li>
                        <div class="custom-search-form">
                            <label class="btn btn-trans" for="search-input" data-toggle="collapse" data-target="#nav-searchbox">
                                <i class="demo-pli-magnifi-glass"></i>
                            </label>
                            <form>
                                <div class="search-container collapse" id="nav-searchbox">
                                    <input id="search-input" type="text" class="form-control" placeholder="Type for search...">
                                </div>
                            </form>
                        </div>
                    </li>--}}
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Search-->

                </ul>
                <ul class="nav navbar-top-links">


                    <!--Mega dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="mega-dropdown">
                        <a href="#" class="mega-dropdown-toggle">
                            <i class="demo-pli-layout-grid"></i>
                        </a>
                        <div class="dropdown-menu mega-dropdown-menu">
                            <div class="row">
                                <div class="col-sm-4 col-md-4">

                                    <!--Mega menu list-->
                                    <ul class="list-unstyled">
                                        <p class="pad-top text-main text-sm text-uppercase text-bold"><i class="icon-lg ti-link icon-fw"></i>Links</p>
                                        <li class="bord-top"><a href="{{ url('/home') }}">Home</a></li>
                                        <li><a href="{{ url('profile') }}">Profile</a></li>
                                        <li><a href="#">Messages</a></li>
                                        <li><a href="{{ url('/locked') }}">Sreen Lock</a></li>
                                    </ul>

                                </div>
                                <div class="col-sm-4 col-md-4">

                                    <!--Mega menu list-->
                                    <ul class="list-unstyled">

                                                <p class="pad-top text-main text-sm text-uppercase text-bold"><i class="icon-lg demo-pli-mail icon-fw"></i>
                                                    Messages
                                                </p>
                                                <li class="bord-top"><a href="{{ url('messages/create') }}">New Message</a></li>
                                                <li class=""><a href="{{ url('messages') }}">Inbox</a></li>
                                                <li class=""><a href="{{ url('messages/sent') }}">Sent</a></li>


                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <!--Mega menu list-->
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{ url('schedules') }}" class="media mar-btm">
                                                <div class="media-left">
                                                    <i class="demo-pli-calendar-4 icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text-semibold text-main mar-no">Schedules</p>
                                                    <small class="text-muted">Check your schedule now</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('events') }}" class="media mar-btm">
                                                <div class="media-left">
                                                    <i class="ti-calendar icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text-semibold text-main mar-no">Events</p>
                                                    <small class="text-muted">Check all the events.</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('feedback/create') }}" class="media mar-btm">
                                                <div class="media-left">
                                                    <i class="ti-back-left icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text-semibold text-main mar-no">Feedback</p>
                                                    <small class="text-muted">Your feedback matters</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End mega dropdown-->



                    <!--Notification dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <i class="demo-pli-bell"></i>
                            
                        </a>


                        <!--Notification dropdown menu-->
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                            <div class="nano scrollable">
                                <div class="nano-content">
                                    <ul class="head-list">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End notifications dropdown-->



                    <!--User dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li id="dropdown-user" class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--You can use an image instead of an icon.-->
                                    <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <i class="demo-pli-male"></i>
                                </span>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--You can also display a user name in the navbar.-->
                            <!--<div class="username hidden-xs">Aaron Chavez</div>-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        </a>


                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                            <ul class="head-list">
                                <li>
                                    <a href="{{ url('profile') }}"><i class="demo-pli-male icon-lg icon-fw"></i> Profile</a>
                                </li>
                                <li>
                                    <a href="{{ url('/locked') }}"><i class="demo-pli-computer-secure icon-lg icon-fw"></i> Lock screen</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="demo-pli-unlock icon-lg icon-fw"></i> {{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End user dropdown-->


                    <li>
                        <a href="#" class="aside-toggle">
                            <i class="demo-pli-dot-vertical"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!--================================-->
            <!--End Navbar Dropdown-->

        </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">

                @yield('content')

        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->



        <!--ASIDE-->
        <!--===================================================-->
        <aside id="aside-container">
            <div id="aside">
                <div class="nano">
                    <div class="nano-content">

                        <!--Nav tabs-->
                        <!--================================-->
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a href="#demo-asd-tab-1" data-toggle="tab">
                                    <i class="ti-notepad icon-fw icon-lg"></i>  To do list
                                </a>
                            </li>
                           {{-- <li>
                                <a href="#demo-asd-tab-2" data-toggle="tab">
                                    <i class="demo-pli-wrench icon-lg icon-fw"></i> Settings <span class="label label-success pull-right">Soon</span>
                                </a>
                            </li>--}}
                        </ul>
                        <!--================================-->
                        <!--End nav tabs-->



                        <!-- Tabs Content -->
                        <!--================================-->
                        <div class="tab-content">

                            <!--First tab (Contact list)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="tab-pane fade in active" id="demo-asd-tab-1">

                                    <!--List Todo-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <div class="panel panel-trans">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">To do list</h3>
                                        </div>
                                        <div class="pad-ver">
                                            <ul class="list-group bg-trans list-todo mar-no">
                                            </ul>
                                        </div>
                                        <div class="input-group pad-all">
                                            <input type="text" name="" id="input-todo" class="form-control" placeholder="New task" autocomplete="off">
                                            <span class="input-group-btn">
                                                <button id="create-todo" type="button" class="btn btn-success"><i class="demo-pli-add"></i></button>
					                        </span>
                                        </div>
                                    </div>
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--End todo list-->


                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End first tab (Contact list)-->

                            <!--Third tab (Settings)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            {{--<div class="tab-pane fade" id="demo-asd-tab-2">
                                <ul class="list-group bg-trans">
                                    <li class="pad-top list-header">
                                        <p class="text-main text-sm text-uppercase text-bold mar-no">Account Settings</p>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-1" type="checkbox" checked>
                                            <label for="demo-switch-1"></label>
                                        </div>
                                        <p class="mar-no text-main">Show my personal status</p>
                                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-2" type="checkbox" checked>
                                            <label for="demo-switch-2"></label>
                                        </div>
                                        <p class="mar-no text-main">Show offline contact</p>
                                        <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-3" type="checkbox">
                                            <label for="demo-switch-3"></label>
                                        </div>
                                        <p class="mar-no text-main">Invisible mode </p>
                                        <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </small>
                                    </li>
                                </ul>


                                <hr>

                                <ul class="list-group pad-btm bg-trans">
                                    <li class="list-header"><p class="text-main text-sm text-uppercase text-bold mar-no">Public Settings</p></li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-4" type="checkbox" checked>
                                            <label for="demo-switch-4"></label>
                                        </div>
                                        Online status
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-5" type="checkbox" checked>
                                            <label for="demo-switch-5"></label>
                                        </div>
                                        Show offline contact
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-6" type="checkbox" checked>
                                            <label for="demo-switch-6"></label>
                                        </div>
                                        Show my device icon
                                    </li>
                                </ul>



                                <hr>

                                <p class="pad-hor text-main text-sm text-uppercase text-bold mar-no">Task Progress</p>
                                <div class="pad-all">
                                    <p class="text-main">Upgrade Progress</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                                    </div>
                                    <small>15% Completed</small>
                                </div>
                                <div class="pad-hor">
                                    <p class="text-main">Database</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                                    </div>
                                    <small>17/23 Database</small>
                                </div>

                                <hr>

                                <div class="text-center">
                                    <div><i class="demo-pli-old-telephone icon-3x"></i></div>
                                    Questions?
                                    <p class="text-lg text-semibold text-main"> (415) 234-53454 </p>
                                    <small><em>We are here 24/7</em></small>
                                </div>

                            </div>--}}
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--Third tab (Settings)-->

                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--===================================================-->
        <!--END ASIDE-->


        <!--MAIN NAVIGATION-->
        <!--===================================================-->
        <nav id="mainnav-container">
            <div id="mainnav">


                <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
                <!--It will only appear on small screen devices.-->
                <!--================================
                <div class="mainnav-brand">
                    <a href="index.html" class="brand">
                        <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <span class="brand-text">Nifty</span>
                    </a>
                    <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
                </div>
                -->



                <!--Menu-->
                <!--================================-->
                <div id="mainnav-menu-wrap">
                    <div class="nano">
                        <div class="nano-content">

                            <!--Profile Widget-->
                            <!--================================-->
                            <div id="mainnav-profile" class="mainnav-profile">
                                <div class="profile-wrap text-center">
                                    <div class="pad-btm">
                                        <img class="img-circle img-md" src="{{asset('img/profile-photos/1.png')}}" alt="Profile Picture">
                                    </div>
                                    <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                        <p class="mnp-name"></p>
                                        <span class="mnp-desc"></span>
                                    </a>
                                </div>
                                <div id="profile-nav" class="collapse list-group bg-trans">
                                    <a href="{{ url('profile') }}" class="list-group-item">
                                        <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="demo-pli-gear icon-lg icon-fw"></i> Settings <span class="label label-success pull-right">Soon</span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="demo-pli-information icon-lg icon-fw"></i> Help <span class="label label-success pull-right">Soon</span>
                                    </a>
                                    <a href="{{ route('logout') }}" class="list-group-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="demo-pli-unlock icon-lg icon-fw"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>


                            <!--Shortcut buttons-->
                            <!--================================-->
                            <div id="mainnav-shortcut" class="">
                                <ul class="list-unstyled shortcut-wrap">
                                    <li class="col-xs-3" data-content="My Profile">
                                        <a class="shortcut-grid" href="{{ url('profile') }}">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                                <i class="demo-pli-male"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3" data-content="Messages">
                                        <a class="shortcut-grid" href="{{ url('messages') }}">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                                <i class="demo-pli-speech-bubble-3"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3" data-content="Activity (soon)">
                                        <a class="shortcut-grid" href="#">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                <i class="demo-pli-thunder"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3" data-content="Lock Screen">
                                        <a class="shortcut-grid" href="{{ url('/locked') }}">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                                <i class="demo-pli-lock-2"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--================================-->
                            <!--End shortcut buttons-->


                            <ul id="mainnav-menu" class="list-group">

                                <!--Category name-->
                                <li class="list-header">Navigation</li>

                                <!--Menu list item-->
                                <li class="@yield('dashboard')">
                                    <a href="{{ url('/home') }}">
                                        <i class="demo-pli-home"></i>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                </li>

                                <!--Menu list item-->
                                <li class="@yield('emails')">
                                    <a href="{{ url('emails') }}">
                                        <i class="demo-pli-mail"></i>
                                        <span class="menu-title">Email </span>
                                    </a>
                                </li>

                                <!--Menu list item-->
                                <li  class="@yield('messages')">
                                    <a href="#">
                                        <i class="ti-comments"></i>
                                        <span class="menu-title">
                                        </span>
                                        <i class="arrow"></i>
                                    </a>
                                    <!--Submenu-->
                                    <ul class="collapse @yield('collapse-messages')">
                                        <li class="@yield('messages-create')"><a href="{{ url('/messages/create') }}">New Message</a></li>
                                        <li class="@yield('all-messages')"><a href="{{ url('/messages') }}">Inbox
                                               
                                            </a> </li>
                                        <li class="@yield('sent-messages')"><a href="{{ url('/messages/sent') }}">Sent</a></li>
                                    </ul>
                                </li>



                                <li class="list-divider"></li>

                                <!--Category name-->
                                <li class="list-header">Academic</li>


                                <!--Menu list item-->

                                <li class="list-divider"></li>

                                <!--Category name-->
                                <li class="list-header">More</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--================================-->
                <!--End menu-->

            </div>
        </nav>
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->

    </div>



    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">

        <!-- Visible when footer positions are fixed -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="show-fixed pad-rgt pull-right">
            You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
        </div>



        {{--<!-- Visible when footer positions are static -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="hide-fixed pull-right pad-rgt">
            14GB of <strong>512GB</strong> Free.
        </div>--}}



        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <p class="pad-lft ">&#0169; 2020 Oncreation</p>



    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->





<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="{{ asset('js/jquery.min.js') }}"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

@yield('app')

{{--<script src="{{ asset('js/app.js') }}"></script>--}}

<!--NiftyJS [ RECOMMENDED ]-->
<script src="{{ asset('js/nifty.min.js') }}"></script>

<!--=================================================-->

<!--Demo script [ DEMONSTRATION ]-->
<script>
    $(document).on('nifty.ready', function () {


        // SETTINGS WINDOW
        // =================================================================
        var contentIndi = '<div id="demo-settings-load" class="demo-settings-load"><i class="text-main demo-pli-repeat-2 icon-3x fa-spin"></i><br><h4 id="demo-get-status" class="text-bold text-uppercase">Loading...</h4><p id="demo-get-status-text">Please wait while the content is loaded</p></div>';
        var settingsComp = '<div id="demo-nifty-settings" class="demo-nifty-settings"><button id="demo-set-btn" class="btn"><i class="demo-psi-gear"></i></button><div id="demo-set-content" class="demo-set-content"></div></div>';

        $("body").append(settingsComp);

        $('#demo-set-btn').one('click', function(){
            $("#demo-nifty-settings").addClass("in");
            $("#demo-set-content").append(contentIndi);
            $.get("{{ url('settings.html') }}", function( data ) {
                $("#demo-set-content").empty().append(data);
                settingsInit();
            }).fail(function(e) {
                $("#demo-get-status").html(e.status);
                $("#demo-get-status-text").html(e.statusText);
            });
        });


        //Offcanvas initialize
        var nav_mode = function(){
            var query = window.location.search.substring(1);
            var vars = query.split("&");
            for (var i=0;i<vars.length;i++) {
                var pair = vars[i].split("=");
                if(pair[0] == "offcanvas"){return pair[1];}
            }
            return(false);
        }();
        if(nav_mode == "push" || nav_mode == "slide" ||nav_mode == "reveal"){
            $('.mainnav-toggle').removeClass('push slide reveal').addClass(nav_mode);
            $('#container').removeClass('mainnav-lg mainnav-sm').addClass('mainnav-out '+nav_mode);
        }


        var settingsInit = function(){
            var demoSet             = $('#demo-nifty-settings'),
                niftyContainer      = $('#container'),
                niftyMainNav        = $('#mainnav-container'),
                niftyAside          = $('#aside-container'),
                demoSetBtn          = $('#demo-set-btn');

            // BOXED LAYOUT
            // =================================================================
            var boxedLayoutCheckbox     = document.getElementById('demo-box-lay'),
                boxedLayoutImgBtn       = document.getElementById('demo-box-img'),
                boxedLayoutImgBox       = $('#demo-bg-boxed'),
                boxedLayoutBtnClose     = document.getElementById('demo-close-boxed-img'),
                blurredBgList           = $('#demo-blurred-bg'),
                polygonBgList           = $('#demo-polygon-bg'),
                abstractBgList          = $('#demo-abstract-bg');


            // Initialize
            // =================================================================
            $("#demo-set-tooltip").tooltip();

            if(niftyContainer.hasClass('boxed-layout')){
                boxedLayoutCheckbox.checked = true;
                boxedLayoutImgBtn.disabled = false;
            }else{
                boxedLayoutCheckbox.checked = false;
                boxedLayoutImgBtn.disabled = true;
            }

            if (boxedLayoutImgBox.hasClass('open')) {
                boxedLayoutImgBtn.checked = true;
            }else{
                boxedLayoutImgBtn.checked = false;
            }

            function bg_thumb_template(cat){
                var list = '';
                for (var i = 1; i < 17; i++) {
                    list += '<a href="#" class="thumbnail box-inline"><img class="img-responsive" src="./premium/boxed-bg/'+cat+'/thumbs/'+i+'.jpg" alt="Background Image"></a>';
                }
                return list;
            }
            function add_bg_thumbs(){
                blurredBgList.append(bg_thumb_template('blurred'));
                polygonBgList.append(bg_thumb_template('polygon'));
                abstractBgList.append(bg_thumb_template('abstract'));

                var boxedBgthumb = boxedLayoutImgBox.find('.thumbnail');
                boxedBgthumb.on('click', function(){
                    boxedBgthumb.removeClass('selected');
                    var url = $(this).children('img').prop('src').replace('thumbs','bg');
                    $(this).addClass('selected');
                    niftyContainer.css({
                        'background-image': 'url('+url+')',
                        'background-repeat': 'no-repeat',
                        'background-size': 'cover',
                        'background-attachment': 'fixed'
                    })
                });
            }



            // Boxed Layout Checkbox
            // =================================================================
            boxedLayoutCheckbox.onchange = function(){
                if (boxedLayoutCheckbox.checked) {
                    niftyContainer.addClass('boxed-layout');
                    boxedLayoutImgBtn.disabled = false;
                } else {
                    niftyContainer.removeClass('boxed-layout').removeAttr( 'style' );
                    boxedLayoutImgBtn.checked = false;
                    boxedLayoutImgBtn.disabled = true;
                    boxedLayoutImgBox.removeClass('open').find('.thumbnail').removeClass('selected');
                }
                $(window).trigger('resize');
            };

            // Image Buttons
            // =================================================================
            boxedLayoutImgBtn.onchange = function(){
                if (boxedLayoutImgBtn.checked) {
                    boxedLayoutImgBox.addClass('open');
                    if(!demoSet.hasClass('hasbgthumbs')){
                        add_bg_thumbs();
                        demoSet.addClass('hasbgthumbs')
                    }
                } else {
                    boxedLayoutImgBox.removeClass('open');
                }
            };

            // Close Button
            // =================================================================
            boxedLayoutBtnClose.onclick = function(){
                boxedLayoutImgBox.removeClass('open');
                boxedLayoutImgBtn.disabled = false;
                boxedLayoutImgBtn.checked = false;
            }






            // TRANSITION EFFECTS
            // =================================================================
            // =================================================================
            var effectList = 'easeInQuart easeOutQuart easeInBack easeOutBack easeInOutBack steps jumping rubber',
                animCheckbox = document.getElementById('demo-anim'),
                transitionVal = document.getElementById('demo-ease');


            // Initialize
            // =================================================================
            if(niftyContainer.hasClass('effect')){
                animCheckbox.checked = true;
                transitionVal.disabled = false;
            }else{
                animCheckbox.checked = false;
                transitionVal.disabled = true;
            }

            // Animations checkbox
            animCheckbox.onchange = function(){
                if (animCheckbox.checked) {
                    niftyContainer.addClass('effect');
                    transitionVal.disabled = false;
                    transitionVal.value = 'effect';
                } else {
                    niftyContainer.removeClass('effect ' + effectList);
                    transitionVal.disabled = true;
                }
            };


            // Transition selectbox
            var effectArray = effectList.split(" ");
            for (i = 0; i < effectArray.length; i++) {
                if (niftyContainer.hasClass(effectArray[i])){
                    transitionVal.value = effectArray[i];
                    break;
                }
            }
            transitionVal.onchange = function(){
                var optionSelected = $("option:selected", this);
                var valueSelected = this.options[this.selectedIndex].value;
                if (valueSelected) {
                    niftyContainer.removeClass(effectList).addClass(valueSelected);
                }
            };





            // NAVBAR
            // =================================================================
            // =================================================================
            var navbarFixedCheckbox = document.getElementById('demo-navbar-fixed');

            // Initialize
            // =================================================================
            if(niftyContainer.hasClass('navbar-fixed')){
                navbarFixedCheckbox.checked = true;
            }else{
                navbarFixedCheckbox.checked = false;
            }

            // Fixed Position
            // =================================================================
            navbarFixedCheckbox.onchange = function(){
                if (navbarFixedCheckbox.checked) {
                    niftyContainer.addClass('navbar-fixed');
                } else {
                    niftyContainer.removeClass('navbar-fixed');
                }

                // Refresh the aside, to enable or disable the "Bootstrap Affix" when the navbar in a "static position".
                niftyMainNav.niftyAffix('update');
                niftyAside.niftyAffix('update');
            };



            // FOOTER
            // =================================================================
            // =================================================================
            var footerFixedCheckbox = document.getElementById('demo-footer-fixed');


            // Initialize
            // =================================================================
            if(niftyContainer.hasClass('footer-fixed')){
                footerFixedCheckbox.checked = true;
            }else{
                footerFixedCheckbox.checked = false;
            }

            // Fixed Position
            // =================================================================
            footerFixedCheckbox.onchange = function(){
                if (footerFixedCheckbox.checked) {
                    niftyContainer.addClass('footer-fixed');
                } else {
                    niftyContainer.removeClass('footer-fixed');
                }
            };




            // NAVIGATION
            // =================================================================
            // =================================================================
            var collapsedCheckbox   = document.getElementById('demo-nav-coll'),
                navFixedCheckbox    = document.getElementById('demo-nav-fixed'),
                navProfileCheckbox  = document.getElementById('demo-nav-profile'),
                navShortcutCheckbox = document.getElementById('demo-nav-shortcut'),
                navOffcanvasSB      = document.getElementById('demo-nav-offcanvas'),
                navProfile          = $('#mainnav-profile'),
                navShortcut         = $('#mainnav-shortcut');



            // Initialize
            // =================================================================
            if(niftyContainer.hasClass('mainnav-fixed')){
                navFixedCheckbox.checked = true;
            }else{
                navFixedCheckbox.checked = false;
            }


            // Fixed Position
            // =================================================================
            if(niftyContainer.hasClass('mainnav-fixed')){
                navFixedCheckbox.checked = true;
            } else{
                navFixedCheckbox.checked = false;
            }
            navFixedCheckbox.onchange = function(){
                if (navFixedCheckbox.checked) {
                    $.niftyNav('fixedPosition');
                } else {
                    $.niftyNav('staticPosition');
                }
            };


            // Profile
            // =================================================================
            if(navProfile.hasClass('hidden')){
                navProfileCheckbox.checked = false;
            } else{
                navProfileCheckbox.checked = true;
            }
            navProfileCheckbox.onchange = function(){
                navProfile.toggleClass('hidden');
            };



            // Shortcut Buttons
            // =================================================================
            if(navShortcut.hasClass('hidden')){
                navShortcutCheckbox.checked = false;
            } else{
                navShortcutCheckbox.checked = true;
            }
            navShortcutCheckbox.onchange = function(){
                navShortcut.toggleClass('hidden');
            };



            // Collapsing/Expanding Navigation
            // =================================================================
            if(niftyContainer.hasClass('mainnav-sm')){
                collapsedCheckbox.checked = true;
            }else{
                collapsedCheckbox.checked = false;
            }
            collapsedCheckbox.onchange = function(){
                if (collapsedCheckbox.checked) {
                    if(navOffcanvasSB.value != 'none'){
                        navOffcanvasSB.value = 'none';
                        location.href = location.protocol + '//' + location.host + location.pathname;
                    }
                    $.niftyNav('collapse');
                } else {
                    $.niftyNav('expand');
                }
            };



            // Offcanvas Navigation
            // =================================================================
            navOffcanvasSB.onchange = function(){
                if (collapsedCheckbox.checked) {
                    collapsedCheckbox.checked = false;
                }
                demoSet.removeClass('in');

                location.href = location.protocol + '//' + location.host + location.pathname + '?&offcanvas=' + this.options[this.selectedIndex].value;
            };

            if(nav_mode == "push" || nav_mode == "slide" ||nav_mode == "reveal"){
                $('.mainnav-toggle').removeClass('push slide reveal').addClass(nav_mode);
                navOffcanvasSB.value = nav_mode;
            }else{
                if(niftyContainer.hasClass('mainnav-sm')){
                    collapsedCheckbox.checked = true;
                }else{
                    collapsedCheckbox.checked = false;
                }
            }







            // ASIDE
            // =================================================================
            // =================================================================
            var asdVisCheckbox      = document.getElementById('demo-asd-vis'),
                asdFixedCheckbox    = document.getElementById('demo-asd-fixed'),
                asdFloatCheckbox    = document.getElementById('demo-asd-float'),
                asdPosCheckbox      = document.getElementById('demo-asd-align'),
                asdThemeCheckbox    = document.getElementById('demo-asd-themes');





            // Visible
            // =================================================================
            if(niftyContainer.hasClass('aside-in')){
                asdVisCheckbox.checked = true;
            } else{
                asdVisCheckbox.checked = false;
            }
            asdVisCheckbox.onchange = function() {
                if (asdVisCheckbox.checked) {
                    $.niftyAside('show');
                } else {
                    $.niftyAside('hide');
                }
            };



            // Fixed Position
            // =================================================================
            if(niftyContainer.hasClass('aside-fixed')){
                asdFixedCheckbox.checked = true;
            } else{
                asdFixedCheckbox.checked = false;
            }
            asdFixedCheckbox.onchange = function() {
                if (asdFixedCheckbox.checked) {
                    $.niftyAside('fixedPosition');
                } else {
                    $.niftyAside('staticPosition');
                };
            };


            // Floating Aside
            // =================================================================
            if(niftyContainer.hasClass('aside-float')){
                asdFloatCheckbox.checked = true;
            } else{
                asdFloatCheckbox.checked = false;
            }
            asdFloatCheckbox.onchange = function() {
                if (asdFloatCheckbox.checked) {
                    niftyContainer.addClass('aside-float');
                } else {
                    niftyContainer.removeClass('aside-float');
                };
                $(window).trigger('resize');
            };


            // Align
            // =================================================================
            if(niftyContainer.hasClass('aside-left')){
                asdPosCheckbox.checked = true;
            } else{
                asdPosCheckbox.checked = false;
            }
            asdPosCheckbox.onchange = function() {
                if (asdPosCheckbox.checked) {
                    $.niftyAside('alignLeft');
                } else {
                    $.niftyAside('alignRight');
                };
            };


            // Themes
            // =================================================================
            if(niftyContainer.hasClass('aside-bright')){
                asdThemeCheckbox.checked = false;
            } else{
                asdThemeCheckbox.checked = true;
            }
            asdThemeCheckbox.onchange = function() {
                if (asdThemeCheckbox.checked) {
                    $.niftyAside('darkTheme');
                } else {
                    $.niftyAside('brightTheme');
                };
            };



            // COLOR SCHEMES
            // =================================================================
            var themeBtn = $('.demo-theme'),
                changeTheme = function (themeName, type) {
                    var themeCSS = $('#theme'),
                        fileext = '.min.css',
                        filename = 'css/themes/type-' + type + '/' + themeName + fileext;

                    if (themeCSS.length) {
                        themeCSS.prop('href', filename);
                    } else {
                        themeCSS = '<link id="theme" href="' + filename + '" rel="stylesheet">';
                        $('head').append(themeCSS);
                    }
                };

            $('#demo-theme').on('click', '.demo-theme', function (e) {
                e.preventDefault();
                var el = $(this);
                if (el.hasClass('disabled') || el.hasClass('active')) {
                    return false;
                }
                changeTheme(el.attr('data-theme'), el.attr('data-type'));
                themeBtn.removeClass('active');
                el.addClass('active').tooltip('hide');
                return false;
            });


            demoSet.on('click', function(e){
                if (demoSet.hasClass('in')){
                    if ($(e.target).is(demoSet)) demoSet.removeClass('in');
                }
            });

            demoSetBtn.on('click', function(){
                demoSet.toggleClass('in');
                return false;
            });
            $('#demo-btn-close-settings').on('click', function () {
                demoSetBtn.trigger('click')
            });
        };
    });
</script>

<!--Flot Chart [ OPTIONAL ]-->
<script src="{{ asset('plugins/flot-charts/jquery.flot.min.js') }}"></script>
<script src="{{ asset('plugins/flot-charts/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>


<!--Sparkline [ OPTIONAL ]-->
<script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>

@yield('text-editor')

@yield('datatable')

@yield('calendar')

@yield('validation')


<!--Switchery [ OPTIONAL ]-->
<script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>




<!--Bootstrap Select [ OPTIONAL ]-->
<script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>


<!--Bootstrap Tags Input [ OPTIONAL ]-->
<script src="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>


<!--Chosen [ OPTIONAL ]-->
<script src="{{ asset('plugins/chosen/chosen.jquery.min.js') }}"></script>


<!--noUiSlider [ OPTIONAL ]-->
<script src="{{ asset('plugins/noUiSlider/nouislider.min.js') }}"></script>


<!--Select2 [ OPTIONAL ]-->
<script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>


<!--Bootstrap Timepicker [ OPTIONAL ]-->
<script src="{{ asset('plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>


<!--Bootstrap Datepicker [ OPTIONAL ]-->
<script src="{{ asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>


<!--Form Component [ SAMPLE ]-->
<script src="{{ asset('js/demo/form-component.js') }}"></script>


<!--Specify page [ SAMPLE ]-->
<script src="{{ asset('js/demo/dashboard.js') }}"></script>

<!--Gauge js [ OPTIONAL ]-->
<script src="{{ asset('plugins/gauge-js/gauge.min.js') }}"></script>


<!--Skycons [ OPTIONAL ]-->
<script src="{{ asset('plugins/skycons/skycons.min.js') }}"></script>


<!--Easy Pie Chart [ OPTIONAL ]-->
<script src="{{ asset('plugins/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>


<!--Widget [ SAMPLE ]-->
<script src="{{ asset('js/demo/widgets.js') }}"></script>

<!--Alerts [ SAMPLE ]-->
<script src="{{ asset('js/demo/ui-alerts.js') }}"></script>


@yield('script')
<script>

    @if (session('status'))
    $.niftyNoty({
        type: 'warning',
        icon: "demo-psi-gear icon-2x",
        container : '#content-container',
        title : '{{ session('status') }}',
        message : '',
        closeBtn : true,
    });
    @endif
    @if($message = \Illuminate\Support\Facades\Session::get('success'))
    $.niftyNoty({
        type: "success",
        icon: "ti-check icon-2x",
        focus: true,
        container : "floating",
        title : 'Great!',
        message : "{{$message}}",
        closeBtn : true,
        timer : 3000,
    });
    @endif
    @if($errors->any())
    $.niftyNoty({
        type: "danger",
        icon: "ti-close icon-2x",
        focus: true,
        container : "floating",
        title : 'Opps!',
        message : '@foreach($errors->all() as $error)\n' +
            '        <span> {{$error}} </span> \n' +
            '        @endforeach',
        closeBtn : true,
        timer : 3000,
    });
    @endif

</script>
<script src="">

    $('.checked-ajax').on('change',function () {
        var id = $(this).data('id');
        if ($(this).is(':checked')) {
            $.ajax({
                url:'{{ url('todos/edit/ajax') }}',
                method:'GET',
                data: {
                    id:id,
                },
                success:function () {
                    $.niftyNoty({
                        type: "success",
                        icon: "ti-check icon-2x",
                        focus: true,
                        container : "floating",
                        title : 'Great!',
                        closeBtn : true,
                        timer : 3000,
                    });
                },
                error: function() {
                    alert('something went wrong...')
                }
            });
        }else{
            $.ajax({
                url:'{{ url('todos/edited/ajax') }}',
                method:'GET',
                data: {
                    id:id,
                },
                success:function () {
                    $.niftyNoty({
                        type: "danger",
                        icon: "ti-close icon-2x",
                        focus: true,
                        container : "floating",
                        title : 'Opps! .. Keep Trying',
                        closeBtn : true,
                        timer : 3000,
                    });
                },
                error: function() {
                    alert('something went wrong...')
                }
            });
        }
    });

    $('.notification').on('click',function () {
        var notification = $(this).find('input').val();
        $.ajax({
            url:'{{ url('notification') }}',
            method:'GET',
            data: {
                notification:notification,
            },
            success:function (result) {

            },
            error: function(result) {

            }
        });

    });

</script>
</body>
</html>
