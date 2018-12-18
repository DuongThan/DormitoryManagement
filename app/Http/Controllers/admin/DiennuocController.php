<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dien;
use App\Nuoc;
use App\Phong;
use Carbon\Carbon;
use App\Phongdien;
use App\Phongnuoc;
use App\PhongDiennuoc;
use Session;
class DiennuocController extends Controller
{
    public function diennuoc(){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $diens = PhongDiennuoc::orderBy('thangghi','desc')
                        ->join('phong','phong.id','=','Phong_diennuoc.idphong')
                        ->join('phong_dien','phong_dien.idphongdiennuoc','=','Phong_diennuoc.id')
                        ->join('dien','dien.id','=','phong_dien.iddien')
                        ->select('Phong_diennuoc.id','Phong_diennuoc.thangghi','phong.tenphong',
                                    'phong_dien.chisodau','phong_dien.chisocuoi','phong_dien.thanhtien',
                                    'dien.dongia')
                        ->get();
        $nuocs = PhongDiennuoc::orderBy('thangghi','desc')
                        ->join('phong','phong.id','=','Phong_diennuoc.idphong')
                        ->join('phong_nuoc','phong_nuoc.idphongdiennuoc','=','Phong_diennuoc.id')
                        ->join('nuoc','nuoc.id','=','phong_nuoc.idnuoc')
                        ->select('Phong_diennuoc.id','Phong_diennuoc.thangghi','phong.tenphong',
                                    'phong_nuoc.chisodau','phong_nuoc.chisocuoi','phong_nuoc.thanhtien',
                                    'nuoc.dongia')
                        ->get();
        return view('admin/diennuoc/QL-DN',['diens'=>$diens,'nuocs'=>$nuocs]);
    }
    public function themdiennuoc(){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $phongs = Phong::all();
        return view('admin/diennuoc/Them-DN',['phongs'=>$phongs]);
    }
    public function capnhatdiennuoc(){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $dien = Dien::orderBy('ngaycapnhat','desc')->first();
        $nuoc = Nuoc::orderBy('ngaycapnhat','desc')->first();
        return view('admin/diennuoc/Update-DonGia',['dien'=>$dien,'nuoc'=>$nuoc]);
    }
    public function putgiadien(Request $request){
        $dien = new Dien();
        $dien->dongia = $request->dongiadien;
        $dien->ngaycapnhat = Carbon::now()->format('Y-m-d H:i:s');
        $dien->save();
        return redirect('/admin/diennuoc/capnhatdiennuoc')->with('thongbao','Cập nhật thành công');
    }
    public function putgianuoc(Request $request){
        $nuoc = new Nuoc();
        $nuoc->dongia = $request->dongianuoc;
        $nuoc->ngaycapnhat = Carbon::now()->format('Y-m-d H:i:s');
        $nuoc->save();
        return redirect('/admin/diennuoc/capnhatdiennuoc')->with('thongbao','Cập nhật thành công');
    }
    public function postDiennuoc(Request $request){
        $this->validate($request,
        [
            'ThangGhiSo'=>'required',
            'ChiSoDauD'=>'required',
            'ChiSoCuoiD'=>'required',
            'ChiSoDauN'=>'required',
            'ChiSoCuoiN'=>'required'
        ],
        [
            'ThangGhiSo.required'=>'Tháng ghi số không được để trống',
            'ChiSoDauD.required'=>'Chi số đầu điện không được để trống',
            'ChiSoCuoiD.required'=>'Chỉ số cuối điện không được để trống',
            'ChiSoDauN.required'=>'Chỉ số đầu nước không được để trống',
            'ChiSoCuoiN.required'=>'Chỉ số cuối nước không được để trống',
        ]);
        $phongdiennuoc = new PhongDiennuoc();
        $phongdiennuoc->idphong = $request->phong;
        $phongdiennuoc->thangghi = $request->ThangGhiSo;
        $phongdiennuoc->save();

        $dien = Dien::orderBy('ngaycapnhat','desc')->first();
        $nuoc = Nuoc::orderBy('ngaycapnhat','desc')->first();

        $phongdien = new Phongdien();
        $phongdien->idphongdiennuoc = $phongdiennuoc->id;
        $phongdien->iddien = $dien->id;
        $phongdien->chisodau = $request->ChiSoDauD;
        $phongdien->chisocuoi = $request->ChiSoCuoiD;
        $phongdien->thanhtien = $dien->dongia * ($phongdien->chisocuoi - $phongdien->chisodau);
        $phongdien->save();


        $phongnuoc = new Phongnuoc();
        $phongnuoc->idphongdiennuoc = $phongdiennuoc->id;
        $phongnuoc->idnuoc = $nuoc->id;
        $phongnuoc->chisodau = $request->ChiSoDauN;
        $phongnuoc->chisocuoi = $request->ChiSoCuoiN;
        $phongnuoc->thanhtien = $nuoc->dongia * ($phongnuoc->chisocuoi - $phongnuoc->chisodau);
        $phongnuoc->save();
        return redirect('/admin/diennuoc/them-dien-nuoc')->with("thongbao","Thêm điện nước thành công");
    }
    public function xoaDiennuoc($id){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $phongdiennuoc = Phongdiennuoc::find($id);
        $phongdiennuoc->delete();
        return redirect('/admin/diennuoc')->with('thongbao','Xóa thành công');
    }
    public function suaDiennuoc($id){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $phongdiennuoc = PhongDiennuoc::find($id);
        $phong = Phong::find($phongdiennuoc->idphong);
        $phongdien = Phongdien::where('idphongdiennuoc',$phongdiennuoc->id)->first();
        $phongnuoc = Phongnuoc::where('idphongdiennuoc',$phongdiennuoc->id)->first();
        $diens = Dien::all();
        $nuocs = Nuoc::all();
        return view('admin/diennuoc/Sua-DN',['phongdiennuoc'=>$phongdiennuoc,'phong'=>$phong,'phongdien'=>$phongdien,
                    'phongnuoc'=>$phongnuoc,'diens'=>$diens,'nuocs'=>$nuocs]);
    }
    public function putphongdiennuoc($id,Request $request){
        $phongdien = Phongdien::where('idphongdiennuoc',$id)->first();
        $phongnuoc = Phongnuoc::where('idphongdiennuoc',$id)->first();
        $dien = Dien::find($request->DonGiaDien);
        $nuoc = Nuoc::find($request->DonGiaNuoc);

        $phongdien->chisocuoi = $request->ChiSoCuoiD;
        $phongdien->iddien = $request->DonGiaDien;
        $phongdien->thanhtien = ($request->ChiSoCuoiD - $phongdien->chisodau) * $dien->dongia;
        
        $phongnuoc->chisocuoi = $request->ChiSoCuoiN;
        $phongnuoc->idnuoc = $request->DonGiaNuoc;
        $phongnuoc->thanhtien = ($request->ChiSoCuoiN - $phongnuoc->chisodau) * $nuoc->dongia;

        $phongdien->save();
        $phongnuoc->save();
        return redirect('/admin/diennuoc/sua-dien-nuoc/'.$id)->with("thongbao","Cập nhật thành công");
    }
}
