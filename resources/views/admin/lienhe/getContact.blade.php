@extends('admin.layout')
@section('title', 'Danh sách liên hệ')

@section("content")
<div id="content-header">
    <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="/" class="current">Danh sách liên hệ</a> </div>
    <h1>Danh sách liên hệ</h1>

</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Table liên hệ</h5>
        </div>
        <div class="widget-content nopadding">
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th class="text-center" style="width:30px">#</th>
                        <th>Tên liên hệ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Yêu cầu</th>
                        <th>Thời gian</th>
                        <th>Xem</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lienhes as $item)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td>{{$item->hoten}}</td>
                        <td>{{$item->sodienthoai}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{substr($item->yeucau,0,50)}}...</td>
                        <td>{{$item->ngaylienhe}}</td>
                        <td class="text-center"> <a href="/admin/lienhe/edit/{{$item->id}}">Xem</a></td>
                        <td class="text-center"> <a href="/admin/lienhe/delete/{{$item->id}}" onclick='return deleteAction();'>Xóa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
