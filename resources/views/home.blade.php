<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="shortcut icon" href="/img/ico/favicon.png" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css" />
    <link href="scripts/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="scripts/vendor/bootstrap-jasny/dist/extend/css/jasny-bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="scripts/vendor/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <link href="scripts/vendor/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="scripts/vendor/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="scripts/vendor/select2/select2-bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="scripts/vendor/jquery.uniform/themes/default/css/uniform.default.min.css" rel="stylesheet" type="text/css" />
    <link href="scripts/css/prettify.css" rel="stylesheet" type="text/css" />
    <link href="scripts/vendor/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <link href="scripts/vendor/fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/css/jquery.dataTables.min.css" rel="stylesheet"
        type="text/css" />
    <link href="scripts/css/ark.css" rel="stylesheet" type="text/css" />
    <link href="scripts/css/examples.css" rel="stylesheet" type="text/css" />

    <style>
        
    </style>
</head>

<body class="cover">

    <div class="wrapper">
        <!-- HEAD NAV -->
        <div class="navbar navbar-default navbar-static-top navbar-main" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand">Hệ thống quả lý ký túc xá</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="visible-xs">
                    <a href="#" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-top">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <li class="dropdown notification">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="label label-danger arrowed arrow-left-in pull-right">12</span>
                        <i class="fa fa-bell"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="#">
                                <i class="fa fa-inbox pull-left"></i>
                                <span class="time">now</span>
                                <p>Stet clita kasd gubergren, no sea takimata Lorem ipsum dolor sit amet.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bell pull-left"></i>
                                <span class="time">13 min. ago</span>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy et dolore.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bell pull-left"></i>
                                <span class="time">17 min. ago</span>
                                <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-inbox pull-left"></i>
                                <span class="time">23 min. ago</span>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco ut aliquid ex ea commodi
                                    consequat.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-inbox pull-left"></i>
                                <span class="time">26 min. ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor et dolore
                                    magna aliqua.</p>
                            </a>
                        </li>
                        <li class="open-section">
                            <a href="#">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown notification">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="label label-primary arrowed arrow-left-in pull-right">6</span>
                        <i class="fa fa-inbox"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="#">
                                <img src="img/users/alex.jpg" alt="alex" class="img-avatar pull-left" />
                                <span class="time">now</span>
                                <p>Stet clita kasd gubergren, no sea takimata Lorem ipsum dolor sit amet.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/users/fabbian.jpg" alt="fabbian" class="img-avatar pull-left" />
                                <span class="time">13 min. ago</span>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy et dolore.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/users/lex.jpg" alt="lex" class="img-avatar pull-left" />
                                <span class="time">17 min. ago</span>
                                <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/users/lex.jpg" alt="lex" class="img-avatar pull-left" />
                                <span class="time">23 min. ago</span>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco ut aliquid ex ea commodi
                                    consequat.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/users/molly.jpg" alt="molly" class="img-avatar pull-left" />
                                <span class="time">26 min. ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor et dolore
                                    magna aliqua.</p>
                            </a>
                        </li>
                        <li class="open-section">
                            <a href="#">View All Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle avatar pull-right" data-toggle="dropdown">
                        <img src="img/users/mike.jpg" alt="mike" class="img-avatar" />
                        <span class="hidden-small">Mike Smith<b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="fa fa-gear"></i>Account Settings</a></li>
                        <li><a href="profile.html"><i class="fa fa-user"></i>View Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- END: HEAD NAV -->

        <div class="navbar navbar-default navbar-static-top navbar-top" role="navigation">
            <ul class="nav navbar-nav">
                <li><a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a></li>
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sort-alpha-asc fa-fw"></i>Look
                        &amp; Feel<i class="caret"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="typography.html"><i class="fa fa-sort-alpha-asc fa-fw"></i><span>Typography</span></a></li>
                        <li><a href="grid.html"><i class="fa fa-th-large fa-fw"></i><span>Grid</span></a></li>
                        <li class="active"><a href="topnav.html"><i class="fa fa-dashboard fa-fw"></i>Top Navigation</a></li>
                        <li><a href="search_results.html"><i class="fa fa-search fa-fw"></i><span>Search Results</span></a></li>
                    </ul>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs fa-fw"></i>UI
                        Elements<i class="caret"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="ui_components.html"><i class="fa fa-wrench fa-fw"></i><span>Components</span></a></li>
                        <li><a href="ui_buttons.html"><i class="fa fa-hand-o-up fa-fw"></i><span>Buttons &amp; Labels</span></a></li>
                        <li><a href="ui_nested_lists.html"><i class="fa fa-list-ul fa-fw"></i><span>Nested Lists</span></a></li>
                        <li><a href="ui_images.html"><i class="fa fa-picture-o fa-fw"></i><span>Images &amp; Icons</span></a></li>
                        <li><a href="wysiwyg_editor.html"><i class="fa fa-edit fa-fw"></i>Wysiwyg Editor</a></li>
                        <li><a href="google_maps.html"><i class="fa fa-map-marker fa-fw"></i>Google Maps</a></li>
                    </ul>
                </li>
                <li><a href="forms.html"><i class="fa fa-credit-card fa-fw"></i>Forms</a></li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table fa-fw"></i><span>Tables
                            <i class="caret"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="tables.html"><i class="fa fa-table fa-fw"></i>Default Tables</a></li>
                        <li><a href="datatables.html"><i class="fa fa-table fa-fw"></i>Data Tables</a></li>
                    </ul>
                </li>
                <li><a href="calendar.html"><i class="fa fa-calendar fa-fw"></i>Calendar <span class="badge badge-danger">4</span></a></li>
                <li><a href="charts.html"><i class="fa fa-bar-chart-o fa-fw"></i>Charts</a></li>
                <li><a href="gallery.html"><i class="fa fa-picture-o fa-fw"></i>Gallery</a></li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell fa-fw"></i><span>Error
                            Pages <i class="caret"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="error_404.html"><i class="fa fa-laptop fa-fw"></i><span>Error 404</span></a></li>
                        <li><a href="error_500.html"><i class="fa fa-laptop fa-fw"></i><span>Error 500</span></a></li>
                    </ul>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sitemap fa-fw"></i><span>Other
                            <i class="caret"></i></span></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="profile.html"><i class="fa fa-user fa-fw"></i><span>User Profile</span></a></li>
                        <li><a href="login.html"><i class="fa fa-sign-in fa-fw"></i><span>Login</span></a></li>
                        <li><a href="register.html"><i class="fa fa-check-square-o fa-fw"></i><span>Register</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- BODY -->
        <div class="body">
            <section class="content">
                <ol class="breadcrumb">
                    <li class="active"><i class="fa fa-home fa-fw"></i> Home</li>
                </ol>
                <div class="header">
                    <div class="col-md-12">
                        <h3 class="header-title">Dashboard with top navigation</h3>
                        <p class="header-info">Overview and latest statistics</p>
                    </div>
                </div>
                <div class="main-content">
                    sdf
                </div>
            </section>
        </div>
    </div>

    <!-- JS -->
    <script src="scripts/vendor/jquery/dist/jquery.min.js"></script>
    <script src="scripts/vendor/jquery-ui/js/jquery-ui.min.js"></script>
    <script src="scripts/vendor/jquery.uniform/jquery.uniform.min.js"></script>
    <script src="scripts/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="scripts/vendor/bootstrap-jasny/dist/extend/js/jasny-bootstrap.min.js"></script>
    <script src="scripts/vendor/jquery-autosize/jquery.autosize.min.js"></script>
    <script src="scripts/vendor/moment/min/moment.min.js"></script>
    <script src="scripts/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="scripts/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="scripts/vendor/dropzone/downloads/dropzone.min.js"></script>
    <script src="scripts/vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="scripts/vendor/jquery-flot/jquery.flot.js"></script>
    <script src="scripts/vendor/jquery-flot/jquery.flot.pie.js"></script>
    <script src="scripts/vendor/jquery-flot/jquery.flot.stack.js"></script>
    <script src="scripts/vendor/jquery-flot/jquery.flot.resize.js"></script>
    <script src="scripts/vendor/select2/select2.min.js"></script>
    <script src="scripts/vendor/fullcalendar/fullcalendar.min.js"></script>
    <script src="scripts/vendor/nestable/jquery.nestable.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/prettify.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/js/jquery.dataTables.min.js"></script>
    <script src="scripts/js/ark.min.js"></script>
</body>

</html>
