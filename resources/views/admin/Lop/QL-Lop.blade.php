@extends('admin.layout')
@section("content")

<div id="content-header">
    <div id="breadcrumb"> <a href="?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="?page=QL-Lop" class="current">Quản Lí Lớp</a> </div>
    <h1>Quản lí Lớp</h1>

</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Quản lí lớp</h5>
        </div>
        <div class="widget-content nopadding">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{$err}} <br>
                @endforeach
            </div>
            @endif
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>Mã Lớp</th>
                        <th>Tên Lớp</th>
                        <th>Sửa </th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lops as $lop)
                    <tr>
                        <td class="text-center">{{$lop->id}}</td>
                        <td>{{$lop->tenlop}}</td>
                        <td class="text-center"> <a href="/admin/lop/sua-lop/{{$lop->id}}">Sửa</a></td>
                        <td class="text-center"> <a href="/admin/lop/xoa-lop/{{$lop->id}}" onclick='return deleteAction();'>Xóa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Thêm Phòng</h5>
                </div>
                <div class="widget-content nopadding">
                    <form action="/admin/lop/postlop" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="control-group">
                            <label class="control-label">Tên Lớp</label>
                            <div class="controls">
                                <input type="text" name="tenlop" class="span8" required />
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" name="btnThemLop" class="btn btn-success">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
