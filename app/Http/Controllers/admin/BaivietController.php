<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Danhmuc;
use App\Baiviet;
use Session;
class BaivietController extends Controller
{
    public function baiviet(){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $baiviets = Baiviet::join('danhmuc','danhmuc.id','=','baiviet.iddanhmuc')
                    ->select('baiviet.*','danhmuc.tendanhmuc')
                    ->get();
        return view('admin/baiviet/danhsachbaiviet',['baiviets'=>$baiviets]);
    }

    public function thembaiviet(){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $danhmucs = Danhmuc::all();
        return view('admin/baiviet/thembaiviet',['danhmucs'=>$danhmucs]);
    }

    public function themmoibaiviet(Request $request){
        $this->validate($request,
        [
            'hinhanh'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tenbaiviet'=>'required',
            'mota'=>'required',
            'noidung'=>'required'
        ],
        [
            'hinhanh.required'=>'Hình ảnh không được để trống',
            'tenbaiviet.required'=>'Tên bài viết không được để trống',
            'mota.required'=>'Tên bài viết không được để trống',
            'noidung.required'=>'Tên bài viết không được để trống'
        ]);
        $hinhanh = '';
        if ($request->hasFile('hinhanh')) {
            $image = $request->file('hinhanh');
            $hinhanh = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/upload/baiviet');
            $image->move($destinationPath, $hinhanh);
        }
        $baiviet = new Baiviet();
        $baiviet->hinhanh = $hinhanh;
        $baiviet->tenbaiviet = $request->tenbaiviet;
        $baiviet->mota = $request->mota;
        $baiviet->noidung = $request->noidung;
        $baiviet->tinoibat = $request->tinoibat==null?0:1;
        $baiviet->iddanhmuc = $request->iddanhmuc;
        $baiviet->save();
        return redirect('admin/baiviet/them')->with('thongbao','Thêm bài viết thành công');
    }

    public function xoabaiviet($id){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $baiviet = Baiviet::find($id);
        $baiviet->delete();
        return redirect('/admin/baiviet')->with("thongbao","Xóa thành công");
    }
    public function suabaiviet($id){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $baiviet = Baiviet::find($id);
        $danhmucs = Danhmuc::all();
        return view('admin/baiviet/suabaiviet',['baiviet'=>$baiviet,'danhmucs'=>$danhmucs]);
    }
    public function capnhatbaiviet($id,Request $request){
        $this->validate($request,
        [
            'tenbaiviet'=>'required',
            'mota'=>'required',
            'noidung'=>'required'
        ],
        [
            'tenbaiviet.required'=>'Tên bài viết không được để trống',
            'mota.required'=>'Tên bài viết không được để trống',
            'noidung.required'=>'Tên bài viết không được để trống'
        ]);
        $baiviet = Baiviet::find($id);
        $hinhanh = '';
        if ($request->hasFile('hinhanh')) {
            $image = $request->file('hinhanh');
            $hinhanh = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/upload/baiviet');
            $image->move($destinationPath, $hinhanh);
            $baiviet->hinhanh = $hinhanh;
        }
        $baiviet->tenbaiviet = $request->tenbaiviet;
        $baiviet->mota = $request->mota;
        $baiviet->noidung = $request->noidung;
        $baiviet->tinoibat = $request->tinoibat==null?0:1;
        $baiviet->iddanhmuc = $request->iddanhmuc;
        $baiviet->save();
        return redirect('admin/baiviet')->with('thongbao','Cập nhật thành công');
    }
}
