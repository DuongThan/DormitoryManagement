<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lienhe;
use Session;
class LienheController extends Controller
{
    public function getLienhe(){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $lienhes = Lienhe::orderBy('ngaylienhe','desc')->get();
        return view('admin/lienhe/getContact',['lienhes'=>$lienhes]);
    }
    public function editLienhe($id){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $lienhe = Lienhe::find($id);
        return view('admin.lienhe.editContact',['lienhe'=>$lienhe]);
    }
    public function deleteLienhe($id){
        $lienhe = Lienhe::find($id);
        $lienhe->delete();
        return redirect('admin/lienhe')->with('notification','Xóa thành công');
    }
}
