<!DOCTYPE html>
<html lang="en">

<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/css/matrix-login.css" />
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <div id="loginbox">
    @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
        <form id="loginform" class="form-vertical" action="/admin/login" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="control-group normal_text">
                <h3><img src="img/logo.png" alt="Logo" /></h3>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" required name="username"
                            placeholder="Username" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" required name="password"
                            placeholder="Password" />
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                <span class="pull-right"><button class="btn btn-success" name="btn_dangnhap" /> Login</span></span>
            </div>
        </form>
        <form id="recoverform" action="/resetpassword" class="form-vertical" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <p class="normal_text">Nhập Mật Khẩu Cấp 2 để tìm lại Mật Khẩu 1.</p>

            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lo"><i class="icon-lock"></i></span><input type="password" required name="password2"
                        placeholder="Mật Khẩu 2" />
                </div>
            </div>
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" required id="password"
                        name="pass1" placeholder="Mậu Khẩu Mới " />
                </div>
            </div>
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input id="password2" required type="password"
                        name="pass2" placeholder="Nhập Lại Mậu Khẩu " />
                </div>
            </div>
            <div class="controls">
                <div class="main_input_box">
                    <span id="mess" class="label label-important"></span>
                </div>
            </div>

            <div class="form-actions">
                <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to
                        login</a></span>
                <span class="pull-right"><button class="btn btn-info" name="DoiMauKhau">Đổi mật khẩu 1</button></span>
            </div>
        </form>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/matrix.login.js"></script>
</body>

</html>
