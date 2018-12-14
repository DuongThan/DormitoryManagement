<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hệ thống quản lý ký túc xá</title>
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
    <link href="css/layout.css" rel="stylesheet" type="text/css" />

    <style>

    </style>
</head>

<body class="cover">

    <div class="wrapper">
        <!-- HEAD NAV -->
        <div class="navbar navbar-default navbar-static-top navbar-main" role="navigation">
            <div class="navbar-header">
                <a class="navbar-name">Hệ thống quả lý ký túc xá</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="visible-xs">
                    <a href="#" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-top">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="pull-right">
                    <i class="fa fa-power-off"></i>
                        <span class="hidden-small">Đăng xuất</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- END: HEAD NAV -->

        <div class="navbar navbar-default navbar-static-top navbar-top" role="navigation">
            <ul class="nav navbar-nav">
                <li><a href=""><i class="fa fa-building"></i>Ký túc xá</a></li>
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-file-text"></i> Bài viết <i class="caret"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i><span>Thêm bài viết</span></a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i><span>Danh sách bài viết</span></a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i><span>Danh mục bài viết</span></a></li>
                    </ul>
                </li>
                <li><a href=""><i class="fa fa-object-group"></i>Slide</a></li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-gg"></i> Phòng <i class="caret"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i><span>Thêm phòng</span></a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i><span>Danh sách phòng</span></a></li>
                    </ul>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i> Sinh viên <i class="caret"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i><span>Thêm sinh viên</span></a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i><span>Danh sách sinh viên</span></a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i><span>Danh sách lớp</span></a></li>
                    </ul>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-contao"></i> Điện nước <i class="caret"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i><span>Ghi điện nước</span></a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i><span>Danh sách ghi điện nước</span></a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i><span>Cập nhật đơn giá điện nước</span></a></li>
                    </ul>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-calendar-minus-o"></i> Hóa đơn <i class="caret"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i><span>Lập hóa đơn</span></a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i><span>Danh sách hóa đơn</span></a></li>
                    </ul>
                </li>
                <li><a href=""><i class="fa fa-users"></i>Người dùng</a></li>
            </ul>
        </div>

        <!-- BODY -->
        <div class="body">
            <section class="content">
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
    <script src="http://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/js/jquery.dataTables.min.js"></script>
    <script src="scripts/js/ark.min.js"></script>
</body>

</html>
