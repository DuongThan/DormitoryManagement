<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lop;
use Session;
class LopController extends Controller
{
    public function lop(){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $lops = Lop::all();
        return view("admin/lop/QL-Lop",['lops'=>$lops]);
    }
    public function sualop($id){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $lop = Lop::find($id);
        return view("admin/lop/Sua-Lop",['lop'=>$lop]);
    }
    public function postlop(Request $request){
        $this->validate($request,
        [
            'tenlop'=>'required'
        ],
        [
            'tenlop.required'=>'Tên lớp không được để trống'
        ]);
        $lop = Lop::where('tenlop',$request->tenlop)->first();
        if($lop != null){
            return redirect('/admin/lop')->with("thongbao","Tên lớp đã tồn tại");
        }
        else{
            $lop = new Lop();
            $lop->tenlop = $request->tenlop;
            $lop->save();
            return redirect('/admin/lop')->with("thongbao","Thêm thành công");
        }
    }
    public function putlop($id,Request $request){
        $this->validate($request,
        [
            'tenlop'=>'required'
        ],
        [
            'tenlop.required'=>'Tên lớp không được để trống'
        ]);
        $lop = Lop::where('tenlop',$request->tenlop)->where('id','!=',$id)->first();
        if($lop != null){
            return redirect('/admin/lop/sua-lop/'.$id)->with("thongbao","Tên lớp đã tồn tại");
        }
        else{
            $lop = Lop::find($id);
            $lop->tenlop = $request->tenlop;
            $lop->save();
            return redirect('/admin/lop')->with("thongbao","Cập nhật thành công");
        }
    }
    public function xoalop($id){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $lop = Lop::find($id);
        $lop->delete();
        return redirect("admin/lop")->with("thongbao","Xóa thành công");
    }
}
