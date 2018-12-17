<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hệ thống quản lý ký túc xá</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/css/fullcalendar.css" />
    <link rel="stylesheet" href="/css/matrix-style.css" />
    <link rel="stylesheet" href="/css/matrix-media.css" />
    <link rel="stylesheet" href="/css/layout.css" />

    <link rel="stylesheet" href="/css/jquery.gritter.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.css" />
    <script src="/js/jquery.min.js"></script>
    <script>
        function deleteAction(){
		return confirm("Bạn có muốn xóa mục này");
		}
	function Sua(){
		return confirm("Bạn có sửa mục này");
		}	
</script>
</head>

<body>
    <!--Header-part-->
    <div id="header">
        <h1><a href="dashboard.html">Matrix Admin</a></h1>
    </div>
    <!--close-Header-part-->
    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages"
                    class="dropdown-toggle"><i class="icon icon-user"></i> <span class="text">Welcome User</span><b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                    <li class="divider"></li>
                    <li class="divider"></li>
                    <li><a href="?page=Doi-MK"><i class="icon-key"></i> Đổi mật khẩu</a></li>
                    <li><a href="logout.php"><i class="icon icon-share-alt"></i> Logout</a></li>
                </ul>
            </li>
            <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
        </ul>
    </div>
    <!--close-top-Header-menu-->
    <!--start-top-serch-->
    <div id="search">
        <input type="text" placeholder="Search here..." />
        <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
    </div>
    <!--close-top-serch-->
    <!--sidebar-menu-->
    <div id="sidebar"><a href="" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
        <ul>

            <li class="active"><a href="?page=dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
            <li class="submenu open"> <a href="#"><i class="icon icon-th-list"></i> <span>Sinh Viên</span> </a>
                <ul>
                    <li><a href="/admin/sinhvien/them-sinh-vien">Thêm Sinh Viên</a></li>
                    <li><a href="/admin/sinhvien">Quản lí Sinh Viên </a></li>
                    <li><a href="/admin/lop">Quản lí Lớp </a></li>
                </ul>
            </li>
            <li class="submenu open"> <a href="?page=QL-Phong"><i class="icon icon-inbox"></i> <span>Phòng</span></a>
                <ul>
                    <li><a href="/admin/phong/them-phong">Thêm Phòng</a></li>
                    <li><a href="/admin/phong">Quản lí Phòng </a></li>

                </ul>
            </li>
            <li class="submenu open"> <a href="#"><i class="icon icon-th-list"></i> <span>Điện Nước</span> </a>
                <ul>
                    <li><a href="/admin/diennuoc/them-dien-nuoc">Thêm Điện Nước</a></li>
                    <li><a href="/admin/diennuoc">Quản lí Điện Nước </a></li>
                    <li><a href="/admin/diennuoc/capnhatdiennuoc">Cập Nhật Đơn Giá Điện Nước</a></li>

                </ul>
            </li>
            <li class="submenu open"><a href="#"><i class="icon icon-th"></i> <span>Hóa Đơn</span></a>
                <ul>
                    <li><a href="/admin/hoadon/them-hoa-don">Thêm Hóa Đơn</a></li>
                    <li><a href="/admin/hoadon">Quản lí Hóa Đơn </a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!--sidebar-menu-->
    <!--main-container-part-->
    <div id="content">
        @yield('content')
    </div>
    </div>
    <div class="row-fluid">
        <div id="footer" class="span12"> 2013-{{date('Y')}} &copy; Matrix Admin.</a> </div>
    </div>
    <script src="/js/jquery.ui.custom.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.ui.custom.js"></script>
    <script src="/js/matrix.calendar.js"></script>
    <script src="/js/fullcalendar.min.js"></script>
    <script src="/js/matrix.calendar.js"></script>
    <script src="/js/matrix.js"></script>
    <script src="/js/matrix.chat.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/matrix.tables.js"></script>
</body>

</html>
