<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use Session;
class SlideController extends Controller
{
    public function getSlideShow(){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $slideshows = Slide::orderBy('thutu','asc')->get();
        return view('admin.slideshow.getSlideShow',['slideshows'=>$slideshows]);
    }
    public function addSlideShow(){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        return view('admin.slideshow.addSlideShow');
    }

    public function editSlideShow($id){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $slideshow = Slide::find($id);
        return view('admin.slideshow.editSlideShow',['slideshow'=>$slideshow]);
    }

    public function postSlideShow(Request $request){
        $this->validate($request,
        [
            'input_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'index'=>'required'
        ],
        [
            'input_img.required'=>'Hình ảnh không được để trống',
            'index.required'=>'Thứ tự không được để trống'
        ]);
        $name = '';
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/upload/slide');
            $image->move($destinationPath, $name);
        }
        $slideshow = new Slide();
        $slideshow->hinhanh = $name;
        $slideshow->thutu = $request->index;
        $slideshow->save();
        return redirect('admin/slideshow/add')->with('thongbao','Thêm slideshow thành công');
    }
    public function putSlideShow($id,Request $request){
        $slideshow = Slide::find($id);
        $slideshow->thutu = $request->index;
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/upload/slide');
            $image->move($destinationPath, $name);
            $slideshow->hinhanh = $name;
        }
        $slideshow->save();
        return redirect('admin/slideshow/edit/'.$id)->with('thongbao','Cập nhật thành công');
    }
    public function deleteSlideShow($id){
        if(!Session::has('trangthaudangnhap'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $slideshow = Slide::find($id);
        $slideshow->delete();
        return redirect('admin/slideshow')->with('thongbao','Xóa thành công');
    }
}
