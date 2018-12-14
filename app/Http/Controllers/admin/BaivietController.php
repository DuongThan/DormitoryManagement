<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Danhmuc;

class BaivietController extends Controller
{
    public function baiviet(){
        return view('admin/baiviet/danhsachbaiviet');
    }

    public function danhmucbaiviet(){
        $danhmucs = Danhmuc::orderBy('thutu')->get();
        return view('admin/baiviet/danhmucbaiviet',['danhmucs'=>$danhmucs]);
    }
}
