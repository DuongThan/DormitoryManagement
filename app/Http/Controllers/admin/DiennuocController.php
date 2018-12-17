<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dien;
use App\Nuoc;
use Carbon\Carbon;


class DiennuocController extends Controller
{
    public function diennuoc(){
        return view('admin/diennuoc/QL-DN');
    }
    public function themdiennuoc(){
        return view('admin/diennuoc/Them-DN');
    }
    public function capnhatdiennuoc(){
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
}
