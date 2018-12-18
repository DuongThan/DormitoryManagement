<!DOCTYPE html>
<html>

<head>
    <title>Blog theme</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/style.css">
    <script language="javascript" src="/frontend/js/jquery-3.3.1.min.js"></script>
    <script language="javascript" src="/frontend/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/frontend/js/jquery.sticky-kit.js"></script>
</head>

<body>
    <div style="background-color: #dddddd">
        <div class="line-top"></div>
        <div style="background-color:white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 style="color:#009acd; line-height: 70px;">Blog theme</h2>
                            </div>
                            <div class="col-md-4">
                                <h5 style="line-height: 70px;">Call Now: 0123 456 78</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="line-menu"></div>-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-sm bg-dark">
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a class="nav-link text-white" href="/">Trang chủ</a> </li>
                        <li class="nav-item"> <a class="nav-link text-white" href="/gioi-thieu">Giới thiệu</a> </li>
                        <li class="nav-item"> <a class="nav-link text-white" href="/danh-muc/4">Tin tức</a> </li>
                        <li class="nav-item"> <a class="nav-link text-white" href="/danh-muc/5">Sự kiện</a> </li>
                        <li class="nav-item"> <a class="nav-link text-white" href="#">Phòng ở</a> </li>
                        <li class="nav-item"> <a class="nav-link text-white" href="/lien-he">Liên hệ</a> </li>
                    </ul>
                </nav>
                <div class="line-top"></div>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container" style="margin-top: 0px;">
        @yield('content')
    </div>
    <!-- end content -->
    <!-- footer -->
    <div class="footer">
        <div class="line-top"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-white">
                    <p class="text-center" style="padding-top: 10px;">News theme</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->
    <script type="text/javascript">
        $(document).ready(function () {
            //alert("ok");
            $(".sticky").stick_in_parent({
                offset_top: 1
            });
        });

    </script>
</body>

</html>
