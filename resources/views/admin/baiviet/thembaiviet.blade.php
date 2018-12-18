@extends('admin.layout')
@section('title', 'Thêm bài viết')

@section("content")
<script type="text/javascript" src="/backend/ckeditor5-build-classic/ckeditor.js"></script>
<div id="content-header">
    <div id="breadcrumb"> <a href="/admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="?page=Them-Sv" class="current">&nbsp Thêm bài viết</a> </div>
    <h1>&nbsp Thêm bài viết</h1>
</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Thêm bài viết</h5>
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
                <div class="widget-content">
                    <form method="post" enctype="multipart/form-data" action="/admin/baiviet/them">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" name="tenbaiviet" value="" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <select name="iddanhmuc">
                                @foreach($danhmucs as $danhmuc)
                                <option value="{{$danhmuc->id}}">{{$danhmuc->tendanhmuc}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea name="mota" id="mota" row="8"></textarea>
                            <script type="text/javascript">
                                ClassicEditor.create(document.querySelector('#mota'));

                            </script>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea name="noidung" id="noidung" row="10"></textarea>
                            <script type="text/javascript">
                                ClassicEditor.create(document.querySelector('#noidung'));

                            </script>
                        </div>
                        <div class="form-group">
                            <label>Tin nổi bật</label>
                            <input type="checkbox" name="tinoibat" value="1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Ảnh</label>
                            <input type="file" name="hinhanh" required class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Process" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
