@extends('admin.layout')
@section('title', 'Quản lý tài khoản')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-group"></i>
                    <h3 class="box-title">&nbsp Chỉnh sửa tài khoản</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-6">
                        @if($user == null)
                            <div class="alert alert-danger">
                                Tài khoản không tồn tại
                            </div>
                        @else
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
                            @endif
                            <div>
                                <form method="post" action="/admin/user/put/{{$user->userName}}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group">
                                        <label>Tên tài khoản : <span>{{$user->userName}}</span> </label>
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <p>* Mật khẩu sẽ được giữ như cũ nếu không điền trường này</p>
                                        <input value="" require type="text" name="password" class="form-control" placeholder="Mật khẩu">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input value="{{$user->email}}" require type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <select name="status" class="form-control">
                                            <option {{$user->status==1?'selected':''}} value="1">Hoạt động</option>
                                            <option {{$user->status==0?'selected':''}} value="0">Khóa</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        <a href="/admin/user" class="btn btn-default">Trở về danh sách tài khoản</a>
                                    </div>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
