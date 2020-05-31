@extends('layouts._layout')

@section('title', 'Phương tiện di chuyển')

@section('content')
	
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#myPage"> <img src="./img/car.PNG" /></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#thongtin">THÔNG TIN</a></li>
				<li><a href="#dichvu">DỊCH VỤ</a></li>
				<li><a href="{{URL::to('/dang-bai')}}">ĐĂNG BÀI</a></li>
				<li><a href="#lienhe">LIÊN HỆ</a></li>
				<li><a onclick="document.getElementById('id02').style.display='block'" href="#">ĐĂNG KÝ </a></li>
				<div id="id02" class="modal">
					<form class="modal-content animate" action="/action_page.php" method="post">
						<div class="imgcontainer">
							<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
							<img alt="Avatar" class="avatar" src="{{('public/fontend/images/dn.jpg')}}"/>
						</div>

						<div class="container1">
							<label for="uname"><b>họ tên</b></label>
							<input type="text" placeholder="họ tên" name="name" required>
							<label for="uname"><b>tài khoản</b></label>
							<input type="text" placeholder="tài khoản" name="uname" required>
							<label for="psw"><b>mật khẩu</b></label>
							<input type="password" placeholder="mật khẩu" name="psw" required>
							<label for="uname"><b>địa chỉ</b></label>
							<input type="text" placeholder="địa chỉ" name="address" required>
							<label for="uname"><b>số điện thoại</b></label>
							<input type="text" placeholder="số điện thoại" name="phone" required>      
							<button type="submit">đăng ký</button>
						</div>
					</div>

				</form>

				<script>
            // Get the modal
            var modal = document.getElementById('id02');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            	if (event.target == modal) {
            		modal.style.display = "none";
            	}
            }
        </script>
        <li><a onclick="document.getElementById('id01').style.display='block'" href="#">ĐĂNG NHẬP</a></li>
        <div id="id01" class="modal">
        	<form class="modal-content animate" action="/action_page.php" method="post">
        		<div class="imgcontainer">
        			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        			<img alt="Avatar" class="avatar" src="{{('public/fontend/images/dn.jpg')}}"/>
        		</div>

        		<div class="container1">
        			<label for="uname"><b>tài khoản</b></label>
        			<input type="text" placeholder="tài khoản" name="uname" required>

        			<label for="psw"><b>mật khẩu</b></label>
        			<input type="password" placeholder="mật khẩu" name="psw" required>
        			<label>
        				<input type="checkbox" checked="checked" name="remember"> nhớ mật khẩu
        			</label>                  
        			<button type="submit">đăng nhập</button>
        			<a class="psw" style=" color:black; " href="#">quên mật khẩu?</a>
        		</div>
        	</div>

        </form>
    </div>

    <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            	if (event.target == modal) {
            		modal.style.display = "none";
            	}
            }
        </script>
    </div>
</ul>
</div>
</div>
</nav>

<div class="container-fluid" id="grad1">
	<div class="row justify-content-center mt-0">
		<div class="content">
			<div class="card px-0 pt-4 pb-0 mt-3 mb-3">

				<div class="row">
					<div class="col-md-12 mx-0">
						<form id="msform">
							<!-- progressbar -->
							<ul id="progressbar">
								<li id="account"><strong>Đi đến đâu?</strong></li>
								<li id="personal" class="active" ><strong>Phương tiện & thời gian </strong></li>
								<li id="payment"><strong>Thông tin & giá</strong></li>
								<li id="confirm"><strong>Finish</strong></li>
							</ul> <!-- fieldsets -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container" style="padding: 50px">
	<form>
		<div class="col-md-12 well well-lg">
			<div class="col-sm-2">
				Tôi là <span style="color: red">(*)</span>
			</div>
			<div class="driver">
				<img src="{{asset('public/fontend/img/volang.png')}}" style="height: 100px; float: left;"> 
				<input type="radio" name="Iam" /><span> Chủ xe</span> 
			</div>
			<div class="driver">
				<img src="{{asset('public/fontend/img/passenger.png')}}" style="height: 100px; float: left;"> 
				<input type="radio" name="Iam" /> <span>Hành khách</span>
			</div>
		</div>
		<div class="col-md-12 well well-lg">
			<div class="col-md-2">
				Phương tiện <span style="color: red">(*)</span>
			</div>
			<div class="driver">
				<img src="{{asset('public/fontend/img/car.png')}}" style="height: 100px; float: left;"> 
				<input type="radio" name="vehicle" /> <span>Ô tô</span> 
			</div>
			<div class="driver">
				<img src="{{asset('public/fontend/img/motobike.png')}}" style="height: 100px; float: left;"> 
				<input type="radio" name="vehicle" /> <span>Xe máy</span>
			</div>
		</div>

		<div class="col-md-12 well well-lg">
			<div class="col-md-2">
				Thời gian <span style="color: red">(*)</span>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<div class='input-group date' id='pickDateTime'>
						<input type='text' class="form-control" placeholder="Ngày giờ khởi hành..." />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar">
							</span>
						</span>
					</div>
				</div>
			</div>

		</div>

		<div class="col-md-4" style="margin-left: 200px;">
			<a href="/dixechung/dang-lo-trinh.html" style="padding-right: 25px"><i class="glyphicon glyphicon-triangle-left"></i>Trở lại</a>
			<button type="button" class="btn btn-success" id="nextInfo" name=""> Tiếp theo<i class="glyphicon glyphicon-triangle-right" style="padding-left: 5px"></i></button>
		</div>

	</form>
</div> 

@endsection


@section('jsScript')
    <script type="text/javascript">

		$(document).ready(function(){
            $('#nextInfo').click(function(){
               window.location.href = "/dixechung/gia.html" ;
            });
        })

    	$(function () {
    		var maxDate = new Date($.now());
    		$.fn.datetimepicker.defaults = {
          maskInput: true,           // disables the text input mask
          pickDate: true,            // disables the date picker
          pickTime: true,            // disables de time picker
          pick12HourFormat: false,   // enables the 12-hour format time picker
          pickSeconds: true,         // disables seconds in the time picker
          startDate: maxDate        // set a maximum date
      };
      $('#pickDateTime').datetimepicker({
      	minDate: new Date(),
      	format: 'dd/mm/yyyy hh:ii',
      	autoclose:true,
      	language: 'vi'
      });
  });
    </script>
@endsection