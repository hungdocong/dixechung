@extends('layout_admin')
@section('content_admin')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                THÊM THÔNG TIN ĐĂNG BÀI
            </header>
            <?php 
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
	        ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-category')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa điểm</label>
                                <input type="text" class="form-control" name="category_name" id="exampleInputEmail1" placeholder="Đi">
                                <input type="text" class="form-control" name="category_name" id="exampleInputEmail1" placeholder="Đến">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tôi là?</label>
                                <select name="product_who" class="form-control input-sm m-bot15">
                                    <option value="0">Chủ xe</option>
                                    <option value="1">Khách hàng</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phương tiện?</label>
                                <select name="product_type" class="form-control input-sm m-bot15">
                                    <option value="0">Ô tô</option>
                                    <option value="1">Xe máy</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngày Đi </label>
                                <input type="date" class="form-control" name="product_date" id="exampleInputEmail1" placeholder="Tên danh mục"> 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Lịch trình chi tiết & Điều khoản</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="product_desc" id="exampleInputPassword1" placeholde="Mô tả danh mục"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="product_status" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div> 
                            <button type="submit" name="add_product" class="btn btn-info">Thêm danh mục</button>
                        </form>
                    </div>
                </div>
        </section>
    </div>
</div>
@endsection

