@extends('admin.layout')
@section("content")

<div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="quick-actions_homepage">
        <ul class="quick-actions">
            <li class="bg_lb"> <a href="/admin"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
            <li class="bg_lo"> <a href="/admin/sinhvien"> <i class="icon-user"></i> Sinh Viên</a> </li>
            <li class="bg_ly"> <a href="/admin/phong"> <i class="icon-inbox"></i> Phòng </a> </li>
            <li class="bg_ls"> <a href="/admin/diennuoc"> <i class="icon-tint"></i>Điện Nước</a> </li>
            <li class="bg_lo"> <a href="/admin/hoadon"> <i class="icon-fullscreen"></i>Hóa Đơn</a> </li>
            <li class="bg_lg"> <a href="/admin/lop"> <i class="icon-signal"></i> Lớp</a> </li>
        </ul>
    </div>
    <!--End-Action boxes-->

    <!--Chart-box-->
    <div class="row-fluid">
        <div class="widget-box">
            <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
                <h5>Site Analytics</h5>
            </div>
            <div class="widget-content">
                <div class="row-fluid">
                    <!-- pie chart -->
                    <!-- <div class="span5">
						<div id="pie_chart_div" class="templatemo-chart"></div>
                    </div>    	   
                <!-- end pie chart--->
                    <div class="span5">
                        <!-- span5--->
                        <ul class="site-stats">
                            <li class="bg_lh"><i class="icon-user"></i> <strong>{{$tongsosinhvien}}</strong> <small>Tổng số Sinh Viên</small></li>
                            <li class="bg_lh"><i class="icon-plus"></i> <strong>{{$tongsolop}}</strong> <small>Lớp </small></li>
                            <li class="bg_lh"><i class="icon-inbox"></i> <strong>{{$tongsophong}}</strong> <small>Tổng Số Phòng</small></li>
                            <li class="bg_lh"><i class="icon-inbox"></i> <strong>{{$tongsophongday}}</strong> <small>Tổng Số Phòng Đầy</small></li>
                            <li class="bg_lh"><i class="icon-fullscreen"></i> <strong>{{$tongsohoadon}}</strong> <small>Tổng Số Hóa Đơn</small></li>
                            <li class="bg_lh"><i class="icon-fullscreen"></i> <strong>{{$tongsohoadonthangnay}}</strong> <small>Tổng Đã Hóa Đơn Tháng 12</small></li>
                        </ul>
                    </div><!-- span5--->
                    <!-- Tyle phan tram --->
                    <div class="widget-content span7">
                        <ul class="unstyled">
                            <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> {{$tylephongtrong}}% Phòng Trống <span
                                    class="pull-right strong">
                                    {{$sophongtrong}} </span>
                                <div class="progress progress-striped ">
                                    <div style="width: {{$tylephongtrong}}%;" class="bar"></div>
                                </div>
                            </li>

                            <li> <span class="icon24 icomoon-icon-arrow-down-2 red"></span>
                                % Hóa đơn chưa thanh toán tháng 12 <span class="pull-right strong">0</span>
                                <div class="progress progress-warning progress-striped ">
                                    <div class="bar"></div>
                                </div>
                            </li>

                        </ul>
                    </div><!-- ty le phan tram ---->
                </div>
            </div>
        </div>
    </div>

    @endsection
