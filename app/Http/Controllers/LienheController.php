<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lienhe;
use Carbon\Carbon;

class LienheController extends Controller
{
    public function lienhe(){
        return view('lienhe');
    }
    public function postlienhe(Request $request){
        $lienhe = new Lienhe();
        $lienhe->hoten = $request->hoten;
        $lienhe->sodienthoai = $request->sodienthoai;
        $lienhe->email = $request->email;
        $lienhe->yeucau = $request->yeucau;
        $lienhe->ngaylienhe =  Carbon::now()->format('Y-m-d H:i:s');
        $lienhe->save();
        return redirect('/lien-he')->with('thongbao','Thành công. Chúng tôi sẽ liên hệ với bạn ngay khi nhận được yêu cầu.');
    }
}
