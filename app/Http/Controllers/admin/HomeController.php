<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Sinhvien;
use App\Phong;
use App\Lop;
use App\Hoadon;
use Carbon\Carbon;


class HomeController extends Controller
{

    public function dashBoard(){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $tongsosinhvien = count(Sinhvien::all());
        $tongsolop = count(Lop::all());
        $phongs = Phong::all();
        $countPhongday = 0;
        foreach($phongs as $phong){
            $sosinhvien = count(Sinhvien::where('idphong',$phong->id)->get());
            if($sosinhvien >= 4)
                $countPhongday++;
        }
        $tongsophong = count($phongs);
        $tongsophongday = $countPhongday;
        $sohoadon = Hoadon::all();
        $tongsohoadon = count($sohoadon);
        $now = Carbon::now();
        $monthNow = $now->month;
        $countBillNow = 0;
        $month = 0;
        foreach($sohoadon as $hoadon){
            $month = explode("-",$hoadon->thangghi)[1];
           if($month==$monthNow)
                $countBillNow++;
        }
        $tongsohoadonthangnay = $countBillNow;
        $sophongtrong = $tongsophong - $countPhongday;
        $tylephongtrong = round($sophongtrong *100 / $tongsophong,2);
        return view('admin/DashBoard',['tongsosinhvien'=>$tongsosinhvien,'tongsolop'=>$tongsolop,'tongsophong'=>$tongsophong,
                    'tongsophongday'=>$tongsophongday,'tongsohoadon'=>$tongsohoadon,'tongsohoadonthangnay'=>$tongsohoadonthangnay,
                    'sophongtrong'=>$sophongtrong,'tylephongtrong'=>$tylephongtrong]);
    }
}
