<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class ProductController extends Controller
{
    public function add_product(){
        return view('admin.add_product');
    } 
    public function all_product(){
        $all_product = DB::table('tbl_product')->get();
        $manager_product = view('admin.all_product')->with('all_product',$all_product);
        return view('layout_admin')->with('admin.all_product',$manager_product);
    }
    public function save_product(Request $request)
    {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_desc'] = $request->product_desc;
        $data['product_status'] = $request->product_status;
        
        DB::table('tbl_product')->insert($data);
        Session::put('message','THÊM THÀNH CÔNG RỒI ĐÓ');
        return Redirect::to('/add-product');
    }
    public function unactive_product($product_id){
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message','ĐÃ HIỂN THỊ THÀNH CÔNG');
        return Redirect::to('/all-product');
    }
    public function active_product($product_id){
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message','ĐÃ ẨN THÀNH CÔNG');
        return Redirect::to('/all-product');
    }
    public function edit_product($product_id){
        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        $manager_product = view('admin.edit_product')->with('edit_product',$edit_product);
        return view('layout_admin')->with('admin.edit_product',$manager_product);
    }
    public function update_product(Request $request,$product_id){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_desc'] = $request->product_desc;
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        Session::put('message','CẬP NHẬT THÀNH CÔNG');
        return Redirect::to('/all-product');
     
    }
    public function delete_product($product_id){
        DB::table('tbl_category')->where('category_id',$product_id)->delete();
        Session::put('message','XÓA THÀNH CÔNG');
        return Redirect::to('/all-product');
    }
}
