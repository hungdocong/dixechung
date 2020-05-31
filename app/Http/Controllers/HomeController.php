<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
   
    public function dang_bai(){
        return view('where');
    }

    public function phuong_tien(){
        return view('vehicle');
    }
    public function gia(){
        return view('price');
    }

    public function finish(){
        return view('finish');
    }
}
