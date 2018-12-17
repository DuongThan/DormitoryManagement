<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Phong;
use App\Sinhvien;

class PhongController extends Controller
{
    public function phong(){
        $phongs = Phong::all();
        foreach($phongs as $phong){
            $sosinhvien = count(Sinhvien::where('idphong',$phong->id)->get());
            $phong->songuoi = $sosinhvien;
            if($sosinhvien >= 4)
                $phong->tinhtrangphong = 1;
            else
                $phong->tinhtrangphong = 0;
        }
        return view("admin/phong/QL-Phong",['phongs'=>$phongs]);
    }
    public function themphong(){
        return view("admin/phong/Them-Phong");
    }
    
    public function suaphong($id){
        $phong = Phong::find($id);
        return view("admin/phong/Sua-Phong",['phong'=>$phong]);
    }
    public function postphong(Request $request){
        $this->validate($request,
        [
            'tenphong'=>'required'
        ],
        [
            'tenphong.required'=>'Tên phòng không được để trống'
        ]);
        $phong = Phong::where('tenphong',$request->tenphong)->first();
        if($phong != null){
            return redirect('/admin/phong/them-phong')->with("thongbao","Tên phòng đã tồn tại");
        }
        else{
            $phong = new Phong();
            $phong->tenphong = $request->tenphong;
            $phong->save();
            return redirect('/admin/phong/them-phong')->with("thongbao","Thêm thành công");
        }
    }
    public function putphong($id,Request $request){
        $this->validate($request,
        [
            'tenphong'=>'required'
        ],
        [
            'tenphong.required'=>'Tên phòng không được để trống'
        ]);
        $phong = Phong::where('tenphong',$request->tenphong)->where('id','!=',$id)->first();
        if($phong != null){
            return redirect('/admin/phong/sua-phong/'.$id)->with("thongbao","Tên phòng đã tồn tại");
        }
        else{
            $phong = Phong::find($id);
            $phong->tenphong = $request->tenphong;
            $phong->save();
            return redirect('/admin/phong')->with("thongbao","Cập nhật thành công");
        }
    }
    public function xoaphong($id){
        $phong = Phong::find($id);
        $phong->delete();
        return redirect("admin/phong")->with("thongbao","Xóa thành công");
    }
    public function xemphong($id){
        $sinhviens = Sinhvien::join('lop','lop.id','=','sinhvien.idlop')
                    ->join('tinhthanh','tinhthanh.id','=','sinhvien.noisinh')
                    ->where("Sinhvien.idPhong",$id)
                    ->select('sinhvien.*','lop.tenlop','tinhthanh.tentinhthanh')
                    ->get();
        return view('admin/phong/ChiTiet-Phong',['sinhviens'=>$sinhviens]);
    }
}
