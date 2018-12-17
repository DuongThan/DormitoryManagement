@extends('admin.layout')
@section("content")

<div id="content-header">
    <div id="breadcrumb"> <a href="/admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="#" class="current">Sửa Lớp</a> </div>
    <h1>Sửa Lớp</h1>
</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Sửa Phòng</h5>
                </div>
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
                <div class="widget-content nopadding">
                    <form action="/admin/lop/putlop/{{$lop->id}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="control-group">
                            <label class="control-label">Mã Lớp :</label>
                            <div class="controls">
                                <input class="span1 text-center" value="{{$lop->id}}" disabled name="MaLop">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tên lớp</label>
                            <div class="controls">
                                <input class="span2 text-center phong" value="{{$lop->tenlop}}" required name="tenlop">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" name="btnSuaLop" class="btn btn-success">Sửa</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
