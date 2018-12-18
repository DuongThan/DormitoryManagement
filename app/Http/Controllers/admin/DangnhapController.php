<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Nguoidung;
use Session;
class DangnhapController extends Controller
{
    public function Login(){
        return view('admin.dangnhap');
    }
    public function Logout(){
        Session::forget('trangthaudangnhap');
        return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
    }

    public function postLogin(Request $request){
        $this->validate($request,
        [
            'username'=>'required',
            'password'=>'required'
        ],
        [
            'username.required'=>'Tên tài khoản không được để trống',
            'password.required'=>'Mật khẩu không được để trống'
        ]);
        $username = $request->username;
        $password = $request->password;
        $user = Nguoidung::where("tentaikhoan",$username)
                        ->where("matkhau",$password)
                        ->first();
        if($user == null)
            return redirect('/admin/login')->with('thongbao','Tài khoản hoặc mật khẩu không đúng');
        else{
            Session::put('trangthaudangnhap', true );
            return redirect('/admin');
        }
    }
}
