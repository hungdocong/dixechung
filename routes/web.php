<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//ForntEnd
Route::get('/', 'HomeController@index');
Route::get('/dang-lo-trinh.html','HomeController@dang_bai');
Route::get('/phuong-tien-thoi-gian.html','HomeController@phuong_tien');
Route::get('/gia.html','HomeController@gia');
Route::get('/hoan-thanh.html','HomeController@finish');


// Route::get('/trang-chu','HomeController@index');
//backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/dashboard-admin','AdminController@dashboard');

//SEARCH 
// Route::get('/','HomeController@index');
Route::get('/tim-kiem','HomeController@show_timkiem');
// ĐĂNG BÀI
// Route::get('/','HomeController@index');


Route::get('/','HomeController@index');
// Route::get('/dky-dnhap','HomeController@dky_dnhap');
// category DK 
Route::get('/add-category','Category@add_category');
Route::get('/all-category','Category@all_category');
Route::get('/edit-category/{category_pro_id}','Category@edit_category');
Route::get('/delete-category/{category_pro_id}','Category@delete_category');
// ẩn hiện
Route::get('/unactive-category/{category_pro_id}','Category@unactive_category');
Route::get('/active-category/{category_pro_id}','Category@active_category');
// lưu
Route::post('/save-category','Category@save_category');
Route::post('/update-category/{category_pro_id}','Category@update_category');


//Product

Route::get('/add-product','ProductController@add_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');
// ẩn hiện
Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_category');
// lưu
Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');

//SEARCH
// Route::get('demo-search', function () {
//     return view('seach');
// });
// Route::get('search', 'CakeController@searchByName');

