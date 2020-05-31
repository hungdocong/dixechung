@extends('layouts._layout')

@section('title', 'Giá lộ trình')

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
								<li id="personal"><strong>Phương tiện & thời gian </strong></li>
								<li id="payment"><strong>Thông tin & giá</strong></li>
								<li id="confirm"  class="active" ><strong>Finish</strong></li>
							</ul> <!-- fieldsets -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="main-content-area error_pages"  style="margin-bottom: 150px ">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-12 col-12">
				<div class="error-wrapper text-center">
					<div class="error-text" style="margin-left: 300px;">
						<img src="{{asset('public/fontend/img/success.png')}}" style="height: 300px; "/>
						<h2>Thành công</h2>
						<h5>Bạn đã đăng lộ trình chia sẻ phương tiện thành công. </h5>
						<p>Chúc bạn có chuyến đi vui vẻ, an toàn và thoải mái. Trân thành cảm ơn.</p>
					</div>

              <!-- <div class="back_home_page">
                <a href="/">Back to home page</a>
            </div> -->

            <div class="col-md-4" style="margin-left: 400px;">
            	<a href="/dixechung" class="btn btn-success btn-lg" ><i style="padding-right: 5px" class="glyphicon glyphicon-home"></i>Trang chủ</a>
            </div>
        </div>
    </div>
</div>
</div>
</section>


@endsection