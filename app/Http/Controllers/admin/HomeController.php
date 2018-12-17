<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function kytucxa(){
        return view('admin/kytucxa');
    }

    public function dashBoard(){
        return view('admin/DashBoard');
    }

    public function capnhatkytucxa(){
        return view('admin/kytucxa');
    }
}
