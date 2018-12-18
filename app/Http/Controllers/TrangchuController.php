<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Danhmuc;
use App\Slide;
use App\Baiviet;

class TrangchuController extends Controller
{
    public function Index(){
        $danhmucs = Danhmuc::orderBy('thutu')->where('id','!=',6)->get();
        $slides = Slide::orderBy('thutu')->get();
        $tinnoibats = Baiviet::where('tinoibat',1)->get();
        $tinxahois = Baiviet::where('id',4)->get();
        $tinsukiens = Baiviet::where('id',5)->get();
        return view('trangchu',['danhmucs'=>$danhmucs,'slides'=>$slides,'tinnoibats'=>$tinnoibats,
                                    'tinxahois'=>$tinxahois,'tinsukiens'=>$tinsukiens]);
    }
}
