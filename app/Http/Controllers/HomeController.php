<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function show_timkiem(){
        return view('search');
    }
    public function dang_bai(){
        return view('dangbai');
    }
    public function dky_dnhap(){
        return view('dk_dn');
    }
}
