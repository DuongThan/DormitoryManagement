<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hoadon;
use App\Phong;
use Carbon\Carbon;
use App\Phongdien;
use App\Phongnuoc;
use App\PhongDiennuoc;


class HoadonController extends Controller
{
    public function hoadon(){
        $hoadons = Hoadon::orderBy('ngaylap','desc')
                    ->join('phong','phong.id','=','hoadon.idphong')
                    ->select('hoadon.*','phong.tenphong')
                    ->get();
        return view("admin/hoadon/QL-HD",['hoadons'=>$hoadons]);
    }
    public function themhoadon(){
        $phongs = Phong::all();
        return view("admin/hoadon/Them-HD",['phongs'=>$phongs]);
    }
    public function posthoadon(Request $request){
        $this->validate($request,
        [
            'thangghi'=>'required'
        ],
        [
            'thangghi.required'=>'Tháng ghi không được để trống'
        ]);
        $phongdiennuoc = Phongdiennuoc::where('thangghi',$request->thangghi)
                                    ->where('idphong',$request->idphong)
                                    ->first();
        if($phongdiennuoc == null){
            return redirect('/admin/hoadon/them-hoa-don')->with("thongbao","Chưa thêm điện nước cho phòng trong tháng này");
        }
        else{
            $thangnam = explode("-",$request->thangghi);
            $mahoadon = 'HD'.$request->idphong.$thangnam[1].$thangnam[0][2].$thangnam[0][3];
            $kiemtrahoadondaduoclap = Hoadon::where('sohoadon',$mahoadon)->first();
            if($kiemtrahoadondaduoclap != null){
                return redirect('/admin/hoadon/them-hoa-don')->with("thongbao","Hóa đơn đã được lập cho tháng này");
            }
            $phongdien = Phongdien::where('idphongdiennuoc',$phongdiennuoc->id)->first();
            $phongnuoc = Phongnuoc::where('idphongdiennuoc',$phongdiennuoc->id)->first();
            $hoadon = new Hoadon();
            $hoadon->sohoadon = $mahoadon;
            $hoadon->thangghi = $request->thangghi;
            $hoadon->idphong = $request->idphong;
            $hoadon->ngaylap =  Carbon::now()->format('Y-m-d H:i:s');
            $hoadon->tiendien = $phongdien->thanhtien;
            $hoadon->tiennuoc = $phongnuoc->thanhtien;
            $hoadon->save();
            return redirect('/admin/hoadon/them-hoa-don')->with("thongbao","Thêm thành công");
        }
    }
    public function xoahoadon($id){
        $hoadon = Hoadon::where('sohoadon',$id);
        $hoadon->delete();
        return redirect("admin/hoadon")->with("thongbao","Xóa thành công");
    }
}
