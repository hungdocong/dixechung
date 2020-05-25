<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;


class Category extends Controller
{
    public function add_category(){

        return view('admin.add_category');

    }
    public function all_category(){

        $all_category = DB::table('tbl_category')->get();
        $manager_category = view('admin.all_category')->with('all_category',$all_category);
        return view('layout_admin')->with('admin.all_category',$manager_category);
    
    }

    public function save_category(Request $request){

        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_desc'] = $request->category_desc;
        $data['category_status'] = $request->category_status;
        
        DB::table('tbl_category')->insert($data);
        Session::put('message','THÊM THÀNH CÔNG RỒI ĐÓ');
        return Redirect::to('/add-category');

    }
    public function unactive_category($category_pro_id){
        DB::table('tbl_category')->where('category_id',$category_pro_id)->update(['category_status'=>1]);
        Session::put('message','ĐÃ HIỂN THỊ THÀNH CÔNG');
        return Redirect::to('/all-category');
    }
    public function active_category($category_pro_id){
        DB::table('tbl_category')->where('category_id',$category_pro_id)->update(['category_status'=>0]);
        Session::put('message','ĐÃ ẨN THÀNH CÔNG');
        return Redirect::to('/all-category');
    }

    public function edit_category($category_pro_id){
        $edit_category = DB::table('tbl_category')->where('category_id',$category_pro_id)->get();
        $manager_category = view('admin.edit_category')->with('edit_category',$edit_category);
        return view('layout_admin')->with('admin.edit_category',$manager_category);
    }
    public function update_category(Request $request,$category_pro_id){
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_desc'] = $request->category_desc;
        DB::table('tbl_category')->where('category_id',$category_pro_id)->update($data);
        Session::put('message','CẬP NHẬT THÀNH CÔNG');
        return Redirect::to('/all-category');
     
    }
    public function delete_category($category_pro_id){
        DB::table('tbl_category')->where('category_id',$category_pro_id)->delete();
        Session::put('message','XÓA THÀNH CÔNG');
        return Redirect::to('/all-category');
    }
}
