@extends('home')
@section("content")
@if(count($errors) > 0)
<div class="alert alert-danger">
    @foreach($errors->all() as $err)
    {{$err}} <br>
    @endforeach
</div>
@endif
@if(session('notification'))
<div class="alert alert-success">
    {{session('notification')}}
</div>
<div class="col-md-12 text-center">
    <a href="/" class="btn btn-primary" type="submit">Trở về</a>
</div>
@else
<div class="row">
    <div class="col-md-12">
        <h2 class="text-center">Liên hệ</span></h2>
    </div>
</div>
@if(session('thongbao'))
<div class="alert alert-success">
    {{session('thongbao')}}
</div>
@endif
<form method="post" action="/postlienhe" style="width: 100%;">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-12">
        <div class="form-group">
            <span class="hotel-search-label">Họ và tên:</span>
            <input required value="" type="text" name="hoten" class="form-control">
        </div>
        <div class="form-group">
            <span class="hotel-search-label">Email:</span>
            <input required value="" type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <span class="hotel-search-label">Số điện thoại:</span>
            <input required value="" type="text" name="sodienthoai" class="form-control">
        </div>
        <div class="form-group">
            <span class="hotel-search-label">Yêu cầu thêm:</span>
            <textarea name="yeucau" value=" " rows="5" class="form-control"></textarea>
        </div>
    </div>
    <div class="col-md-12 text-center">
        <button class="btn btn-primary" type="submit">Gửi</button>
    </div>
</form>
@endif
@endsection
