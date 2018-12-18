<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baiviet;
use App\Danhmuc;
use App\Slide;

class TintucController extends Controller
{
    public function danhmuc($id){
        $baiviets = Baiviet::where('iddanhmuc',$id)->get();
        $danhmucs = Danhmuc::orderBy('thutu')->where('id','!=',6)->get();
        $slides = Slide::orderBy('thutu')->get();
        $tinnoibats = Baiviet::where('tinoibat',1)->get();
        return view('danh-muc',['danhmucs'=>$danhmucs,'slides'=>$slides,'tinnoibats'=>$tinnoibats,'baiviets'=>$baiviets]);
    }
    public function gioithieu(){
        $baiviet = Baiviet::where('iddanhmuc',6)->first();
        return view('chitietbaiviet',['baiviet'=>$baiviet]);
    }
    public function chitiettintuc($id){
        $baiviet = Baiviet::find($id);
        return view('chitietbaiviet',['baiviet'=>$baiviet]);
    }
}
