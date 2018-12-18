<?php

// admin quản trị
Route::group(['prefix'=>'admin'],function(){
    
    Route::get('login','admin\DangnhapController@Login');
    Route::post('login','admin\DangnhapController@postLogin');
    Route::get('logout','admin\DangnhapController@Logout');
    
    Route::get('', 'admin\HomeController@dashBoard');
    
    // Quản lý sinh viên
    Route::group(['prefix'=>'sinhvien'],function(){
        Route::get('','admin\SinhvienController@sinhvien');
        Route::get('them-sinh-vien','admin\SinhvienController@themsinhvien');
        Route::get('sua-sinh-vien/{id}','admin\SinhvienController@suasinhvien');
        Route::post('postsinhvien','admin\SinhvienController@postsinhvien');
        Route::post('putsinhvien/{id}','admin\SinhvienController@putsinhvien');
        Route::get('xoa-sinh-vien/{id}','admin\SinhvienController@xoasinhvien');
    });

    // Quản lý phòng
    Route::group(['prefix'=>'phong'],function(){
        Route::get('','admin\PhongController@phong');
        Route::get('them-phong','admin\PhongController@themphong');
        Route::post('postphong','admin\PhongController@postphong');
        Route::get('sua-phong/{id}','admin\PhongController@suaphong');
        Route::post('putphong/{id}','admin\PhongController@putphong');
        Route::get('xoa-phong/{id}','admin\PhongController@xoaphong');
        Route::get('xem/{id}','admin\PhongController@xemphong');
    });

    // Quản lý lớp
    Route::group(['prefix'=>'lop'],function(){
        Route::get('','admin\LopController@lop');
        Route::post('postlop','admin\LopController@postlop');
        Route::get('sua-lop/{id}','admin\LopController@sualop');
        Route::post('putlop/{id}','admin\LopController@putlop');
        Route::get('xoa-lop/{id}','admin\LopController@xoalop');
    });

    // Quản lý điện nước
    Route::group(['prefix'=>'diennuoc'],function(){
        Route::get('','admin\DiennuocController@diennuoc');
        Route::get('them-dien-nuoc','admin\DiennuocController@themdiennuoc');
        Route::get('capnhatdiennuoc','admin\DiennuocController@capnhatdiennuoc');
        Route::post('capnhatdien','admin\DiennuocController@putgiadien');
        Route::post('capnhatnuoc','admin\DiennuocController@putgianuoc');
        Route::post('postDiennuoc','admin\DiennuocController@postDiennuoc');
        Route::get('xoa-dien-nuoc/{id}','admin\DiennuocController@xoaDiennuoc');
        Route::get('sua-dien-nuoc/{id}','admin\DiennuocController@suaDiennuoc');
        Route::post('putphongdiennuoc/{id}','admin\DiennuocController@putphongdiennuoc');
    });

    // Quản lý hóa đơn
    Route::group(['prefix'=>'hoadon'],function(){
        Route::get('','admin\HoadonController@hoadon');
        Route::get('them-hoa-don','admin\HoadonController@themhoadon');
        Route::post('postHoadon','admin\HoadonController@posthoadon');
        Route::get('xoa-hoa-don/{id}','admin\HoadonController@xoahoadon');
    });

    // Quản lý slideshow
    Route::group(['prefix'=>'slideshow'],function(){
        Route::get('','admin\SlideController@getSlideShow');
        Route::get('add','admin\SlideController@addSlideShow');
        Route::post('post','admin\SlideController@postSlideShow');
        Route::get('edit/{id}','admin\SlideController@editSlideShow');
        Route::post('put/{id}','admin\SlideController@putSlideShow');
        Route::get('delete/{id}','admin\SlideController@deleteSlideShow');
    });

    // Bài viết
    Route::group(['prefix'=>'baiviet'],function(){
        Route::get('','admin\BaivietController@baiviet');
        Route::get('them','admin\BaivietController@thembaiviet');
        Route::post('them','admin\BaivietController@themmoibaiviet');
        Route::get('sua/{id}','admin\BaivietController@suabaiviet');
        Route::post('sua/{id}','admin\BaivietController@capnhatbaiviet');
        Route::get('xoa/{id}','admin\BaivietController@xoabaiviet');
    });

    // Quản trị thông tin lien he
    Route::group(['prefix'=>'lienhe'],function(){
        Route::get('','admin\LienheController@getLienhe');
        Route::get('edit/{id}','admin\LienheController@editLienhe');
        Route::get('delete/{id}','admin\LienheController@deleteLienhe');
    });

    // Quản trị tài khoản
    Route::group(['prefix'=>'user'],function(){
        Route::get('','admin\NguoidungController@getUser');
        Route::get('add','admin\NguoidungController@addUser');
        Route::post('post','admin\NguoidungController@postUser');
        Route::get('edit/{userName}','admin\NguoidungController@editUser');
        Route::post('put/{userName}','admin\NguoidungController@putUser');
        Route::get('delete/{userName}','admin\NguoidungController@deleteUser');
    });
});

// Website
Route::get('','TrangchuController@Index');
Route::get('danh-muc/{id}','TintucController@danhmuc');
Route::get('gioi-thieu','TintucController@gioithieu');
Route::get('chi-tiet-tin-tuc/{id}','TintucController@chitiettintuc');

Route::get('lien-he','LienheController@lienhe');
Route::post('postlienhe','LienheController@postlienhe');
