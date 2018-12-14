<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function kytucxa(){
        return view('admin/kytucxa');
    }

    public function capnhatkytucxa(){
        return view('admin/kytucxa');
    }
}
