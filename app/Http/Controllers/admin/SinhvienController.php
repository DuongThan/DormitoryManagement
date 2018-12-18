<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sinhvien;
use App\Tinhthanh;
use App\Lop;
use App\Phong;
use Session;
class SinhvienController extends Controller
{
    public function sinhvien(){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $sinhviens = Sinhvien::join('lop','lop.id','=','sinhvien.idlop')
                    ->join('phong','phong.id','=','sinhvien.idphong')
                    ->join('tinhthanh','tinhthanh.id','=','sinhvien.noisinh')
                    ->select('sinhvien.*','phong.tenphong','lop.tenlop','tinhthanh.tentinhthanh')
                    ->get();
        return view("admin/sinhvien/ql-sv",['sinhviens'=>$sinhviens]);
    }
    public function themsinhvien(){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $tinhthanhs = Tinhthanh::all();
        $lops = Lop::all();
        $phongs = Phong::all();
        return view("admin/sinhvien/Them-Sv",['phongs'=>$phongs,'lops'=>$lops,'tinhthanhs'=>$tinhthanhs]);
    }
    public function postsinhvien(Request $request){
        $this->validate($request,
        [
            'id'=>'required',
            'hoten'=>'required',
            'ngaysinh'=>'required',
            'sodienthoai'=>'required'
        ],
        [
            'id.required'=>'Mã sinh viên không được để trống',
            'hoten.required'=>'Họ tên không được để trống',
            'ngaysinh.required'=>'Ngày sinh không được để trống',
            'sodienthoai.required'=>'Số điện thoại không được để trống',
        ]);
        $checkphongday =count(Sinhvien::where('idphong',$request->idphong)->get());
        if($checkphongday >= 4)
            return redirect("admin/sinhvien/them-sinh-vien")->with("thongbao","Phòng đã đầy");
        $sinhvien = Sinhvien::find($request->id);
        if($sinhvien != null){
            return redirect("admin/sinhvien/them-sinh-vien")->with("thongbao","Mã sinh viên đã tồn tại");
        }else{
            $sinhvien = new Sinhvien();
            $sinhvien->id = $request->id;
            $sinhvien->idlop = $request->idlop;
            $sinhvien->idphong = $request->idphong;
            $sinhvien->hoten = $request->hoten;
            $sinhvien->noisinh = $request->noisinh;
            $sinhvien->gioitinh = $request->gioitinh;
            $sinhvien->ngaysinh = $request->ngaysinh;
            $sinhvien->sodienthoai = $request->sodienthoai;
            $sinhvien->save();
            return redirect("admin/sinhvien")->with("thongbao","Thêm sinh viên thành công");
        }
    }
    public function suasinhvien($id){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $sinhvien = Sinhvien::where('id',$id)->first();
        $tinhthanhs = Tinhthanh::all();
        $lops = Lop::all();
        $phongs = Phong::all();
        return view('admin/sinhvien/Sua-Sv',['sinhvien'=>$sinhvien,'phongs'=>$phongs,'lops'=>$lops,'tinhthanhs'=>$tinhthanhs]);
    }
    public function xoasinhvien($id,Request $request){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $sinhvien = Sinhvien::find($id);
        if($sinhvien != null)
            $sinhvien->delete();
        return redirect("/admin/sinhvien")->with('thongbao','Xóa thành công');
    }
    public function putsinhvien($id,Request $request){
        $this->validate($request,
        [
            'hoten'=>'required',
            'ngaysinh'=>'required',
            'sodienthoai'=>'required'
        ],
        [
            'hoten.required'=>'Họ tên không được để trống',
            'ngaysinh.required'=>'Ngày sinh không được để trống',
            'sodienthoai.required'=>'Số điện thoại không được để trống',
        ]);
        
        $checkphongday =count(Sinhvien::where('idphong',$request->idphong)->where('id','!=',$id)->get());
        if($checkphongday >= 4)
            return redirect("admin/sinhvien/sua-sinh-vien/".$id)->with("thongbao","Phòng đã đầy");
            
        $sinhvien = Sinhvien::find($id);
        if($sinhvien == null){
            return redirect("admin/sinhvien/sua-sinh-vien/".$id)->with("thongbao","Mã sinh viên không tồn tại");
        }else{
            $sinhvien->idlop = $request->idlop;
            $sinhvien->idphong = $request->idphong;
            $sinhvien->hoten = $request->hoten;
            $sinhvien->noisinh = $request->noisinh;
            $sinhvien->gioitinh = $request->gioitinh;
            $sinhvien->ngaysinh = $request->ngaysinh;
            $sinhvien->sodienthoai = $request->sodienthoai;
            $sinhvien->save();
            return redirect("admin/sinhvien")->with("thongbao","Thêm sinh viên thành công");
        }
    }
}
