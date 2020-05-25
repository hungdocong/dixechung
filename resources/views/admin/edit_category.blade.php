@extends('layout_admin')
@section('content_admin')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                CẬP NHẬT DANH MỤC ĐĂNG BÀI
            </header>
            <?php 
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
	        ?>
                <div class="panel-body">
                    @foreach ($edit_category as $key => $edit_value)  
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/update-category/'.$edit_value->category_id)}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" value="{{ $edit_value->category_name }}" class="form-control" name="category_name" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="category_desc" id="exampleInputPassword1" >{{ $edit_value->category_desc }}</textarea>
                            </div>
                           
                            <button type="submit" name="add_category" class="btn btn-info">Cập nhật mục</button>
                        </form>
                    </div>
                    @endforeach
                </div>
        </section>
    </div>
</div>
@endsection

