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
								<li id="payment" class="active" ><strong>Thông tin & giá</strong></li>
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
				Tôi đồng ý tính chi phí chuyến đi theo: <span style="color: red">(*)</span>
			</div>
			<div class="col-sm-3">
				<input type="text" class="form-control text-center"  value="Chi phí xăng xe" disabled="disable" />
			</div>
			<div class="decription">
				<span style="font-weight: bold;">Mô tả:</span>
				<h5>Chi phí này được tính bằng mức tiêu hao nhiên liệu trên đường (bằng quãng đường dự kiến <b>60</b>(km) (được tính tự động bởi Google map) nhân với chí phí trung bình của <b>xe ô tô</b> trên một đơn vị km là <b>2.500</b> vnđ/km theo giá xăng hiện hành, thực tế có thể khác. Bạn có thể điều chỉnh cho phù hợp</h5>
			</div>

			<div class="col-sm-2">
				Dự kiến chi phí phương tiện (VNĐ): <span style="color: red">(*)</span>
			</div>
			<div class="col-sm-3">
				<input type="text" class="form-control text-center" id="priceWay"  value="150000" disabled="disable" /> 
			</div>
		</div>
		<div class="col-md-12 well well-lg">
			<div class="col-md-2">
				Số ghế đăng ký: <span style="color: red">(*)</span>
			</div>
			<div class="col-sm-3">
				<select class="form-control" id="countChair">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>
			<div class="decription">
				<span style="font-weight: bold;">Mô tả phương tiện:</span>
				<h5>Vinfast SA 2.0, BKS: <b>29H 05555</b>, 7 chỗ.</h5>
			</div>

			<div class="col-sm-2">
				Giá đề xuất/1 chỗ (VNĐ): <span style="color: red">(*)</span>
			</div>
			<div class="col-sm-3">
				<input type="text" class="form-control text-center" id="priceChair" disabled="disable" /> 
			</div>
			<div class="decription">
				<span style="font-weight: bold;">Khuyến mãi:</span>
				<h5>
					- Đăng ký <b>1</b> chỗ, giảm<b style="color: red; padding-left: 5px">5%</b><br>
					- Đăng ký <b>2</b> chỗ, giảm<b style="color: red; padding-left: 5px">10%</b><br>
					- Đăng ký <b>3</b> chỗ, giảm<b style="color: red; padding-left: 5px">15%</b><br>
					- Đăng ký <b>4</b> chỗ, giảm<b style="color: red; padding-left: 5px">20%</b><br>
				</h5>
			</div>
		</div>

		<div class="col-md-12 well well-lg">
			<div class="col-sm-2">
				Cách tính giá: <span style="color: red">(*)</span>
			</div>
			<div class="col-sm-3">
				<input type="radio"  name="howPrice" checked="checked" /> Giá cố định 
			</div>

			<div class="col-sm-3">
				<input type="radio"  name="howPrice"/> Giá cố định 
			</div>
		</div>

		<div class="col-md-4" style="margin-left: 200px;">
			<a href="/dixechung/phuong-tien-thoi-gian.html" style="padding-right: 25px"><i class="glyphicon glyphicon-triangle-left"></i>Trở lại</a>
			<button type="button" class="btn btn-success" id="nextFinish" name=""> Tiếp theo<i class="glyphicon glyphicon-triangle-right" style="padding-left: 5px"></i></button>
		</div>

	</form>
</div>

@endsection

@section('jsScript')
    <script type="text/javascript">

		$(document).ready(function(){
            $('#nextFinish').click(function(){
               window.location.href = "/dixechung/hoan-thanh.html" ;
            });
        })

		$(document).ready(function(){

			var count = $('#countChair').val();

			var priceWay = $('#priceWay').val();
			$('#priceWay').val(formatNumber(priceWay*0.95, '.', '.'));

			$('#priceChair').val(formatNumber(count*priceWay, '.', '.'));

			$('#countChair').change(function(){
				var count = $(this).val();
				var priceWay = $('#priceWay').val().replace('.', '');

				if(count == 1)
					$('#priceChair').val(formatNumber(count*priceWay*0.95, '.', '.'));
				else if(count == 2)
					$('#priceChair').val(formatNumber(count*priceWay*0.9, '.', '.'));
				else if(count == 3)
					$('#priceChair').val(formatNumber(count*priceWay*0.85, '.', '.'));
				else
					$('#priceChair').val(formatNumber(count*priceWay*0.8, '.', '.'));
			});
		});


		function formatNumber(nStr, decSeperate, groupSeperate) {
			nStr += '';
			x = nStr.split(decSeperate);
			x1 = x[0];
			x2 = x.length > 1 ? '.' + x[1] : '';
			var rgx = /(\d+)(\d{3})/;
			while (rgx.test(x1)) {
				x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
			}
			return x1 + x2;
		}
    </script>
@endsection