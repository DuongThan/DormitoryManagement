<?php

// admin quản trị
Route::group(['prefix'=>'admin'],function(){
    
    Route::get('login','admin\HomeController@Login');
    Route::post('login','admin\HomeController@postLogin');
    Route::get('logout','admin\HomeController@Logout');
    
    Route::get('', 'admin\HomeController@kytucxa');
    Route::get('dashBoard', 'admin\HomeController@dashBoard');
    
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




    // Thông tin ký túc xá
    Route::group(['prefix'=>'kytucxa'],function(){
        Route::get('','admin\HomeController@kytucxa');
        Route::post('capnhat','admin\HomeController@capnhatkytucxa');
    });

    // Bài viết
    Route::group(['prefix'=>'baiviet'],function(){
        Route::get('','admin\BaivietController@baiviet');
        Route::get('them','admin\BaivietController@thembaiviet');
        Route::post('them','admin\BaivietController@themmoibaiviet');
        Route::get('sua','admin\BaivietController@suabaiviet');
        Route::post('sua','admin\BaivietController@capnhatbaiviet');
        Route::post('xoa','admin\BaivietController@xoabaiviet');
        Route::get('danhmucbaiviet','admin\BaivietController@danhmucbaiviet');
    });

    // Quản trị loại phòng
    Route::group(['prefix'=>'roomtype'],function(){
        Route::get('','admin\RoomTypeController@getRoomType');
        Route::get('add','admin\RoomTypeController@addRoomType');
        Route::post('post','admin\RoomTypeController@postRoomType');
        Route::get('edit/{roomTypeId}','admin\RoomTypeController@editRoomType');
        Route::post('put/{roomTypeId}','admin\RoomTypeController@putRoomType');
        Route::get('delete/{roomTypeId}','admin\RoomTypeController@deleteRoomType');

        Route::get('roomtype-price','admin\RoomTypeController@getRoomTypePrice');
        Route::get('set-price/{roomTypeId}','admin\RoomTypeController@editRoomTypePrice');
        Route::post('putPrice/{roomTypeId}','admin\RoomTypeController@putRoomTypePrice');
    });


    // Quản trị booking
    Route::group(['prefix'=>'booking'],function(){
        Route::get('','admin\BookingController@getBooking');
        Route::get('edit/{bookingId}','admin\BookingController@editBooking');
        Route::post('put/{bookingId}','admin\BookingController@putBooking');
        Route::get('diagram','admin\BookingController@getDiagramBooking');
        Route::post('quick-book','admin\BookingController@postQuickBooking');
        Route::post('quick-checkout','admin\BookingController@postCheckoutBooking');
        Route::post('quick-checkin','admin\BookingController@postCheckinBooking');
    });

    // Quản trị thông tin lien he
    Route::group(['prefix'=>'contact'],function(){
        Route::get('','admin\ContactController@getContact');
        Route::get('edit/{contactId}','admin\ContactController@editContact');
        Route::get('delete/{contactId}','admin\ContactController@deleteContact');
    });

    
    // Quản trị phòng
    Route::group(['prefix'=>'room'],function(){
        Route::get('','admin\RoomController@getRoom');
        Route::get('add','admin\RoomController@addRoom');
        Route::post('post','admin\RoomController@postRoom');
        Route::get('edit/{roomId}','admin\RoomController@editRoom');
        Route::post('put/{roomId}','admin\RoomController@putRoom');
        Route::get('delete/{roomId}','admin\RoomController@deleteRoom');
    });

    // Quản trị Slideshow
    Route::group(['prefix'=>'slideshow'],function(){
        Route::get('','admin\SlideShowController@getSlideShow');
        Route::get('add','admin\SlideShowController@addSlideShow');
        Route::post('post','admin\SlideShowController@postSlideShow');
        Route::get('edit/{slideShowId}','admin\SlideShowController@editSlideShow');
        Route::post('put/{slideShowId}','admin\SlideShowController@putSlideShow');
        Route::get('delete/{slideShowId}','admin\SlideShowController@deleteSlideShow');
    });

    // Quản trị tài khoản
    Route::group(['prefix'=>'user'],function(){
        Route::get('','admin\UserController@getUser');
        Route::get('add','admin\UserController@addUser');
        Route::post('post','admin\UserController@postUser');
        Route::get('edit/{userName}','admin\UserController@editUser');
        Route::post('put/{userName}','admin\UserController@putUser');
        Route::get('delete/{userName}','admin\UserController@deleteUser');
    });
});

// Website
Route::get('','BookingController@Index');
Route::get('gioi-thieu','HomeController@Index');

Route::get('dat-phong','BookingController@Index');
Route::post('search','BookingController@Search');

Route::post('saveSessionBooking','BookingController@SaveSessionBooking');
Route::get('confirm','BookingController@ConfirmBooking');
Route::post('postBooking','BookingController@PostBooking');
Route::get('lien-he','ContactController@Index');
Route::post('postContact','ContactController@PostContact');

Route::get('/', function () {
    return view('admin/template');
});
