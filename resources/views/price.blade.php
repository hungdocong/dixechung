@extends('layouts._layout')

@section('title', 'Giá lộ trình')

@section('content')


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
	<form action="{{url('/hoan-thanh.html')}}" method="POST" role="form">
         {{ csrf_field() }}
		<div class="col-md-12 well well-lg">
			<div class="col-sm-2">
				Tôi đồng ý tính chi phí chuyến đi theo: <span style="color: red">(*)</span>
			</div>
			<div class="col-sm-3">
				<input type="text" class="form-control text-center"  value="Chi phí xăng xe" disabled="disable" />
			</div>
			<div class="decription">
				<span style="font-weight: bold;">Mô tả:</span>
				<h5>Chi phí này được tính bằng mức tiêu hao nhiên liệu trên đường (bằng quãng đường dự kiến <b>

                {{ $distance }}
                </b>(km) (được tính tự động bởi Google map) nhân với chí phí trung bình của <b>xe ô tô</b> trên một đơn vị km là <b>2.500</b> vnđ/km theo giá xăng hiện hành, thực tế có thể khác. Bạn có thể điều chỉnh cho phù hợp</h5>
			</div>


			<div class="col-sm-2">
				Dự kiến chi phí phương tiện (VNĐ): <span style="color: red">(*)</span>
			</div>
			<div class="col-sm-3">
				<input type="text" class="form-control text-center" name="price" id="priceWay"  value="{{ 2500* (int) $distance }}" disabled="disable" />
			</div>
		</div>

        <div class="col-sm-12 well well-lg">

            <div class="col-sm-2">
                Quảng đường dự kiến (km): <span style="color: red">(*)</span>
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control text-center" id="distanceWay"  value="{{ $distance }}" disabled="disable" />
            </div>
            <div class="decription">
                <span style="font-weight: bold;">Mô tả phương tiện:</span>
                <h5>Vinfast SA 2.0, BKS: <b>29H 05555</b>, 7 chỗ.</h5>
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


			{{-- <div class="col-sm-2">
				Giá đề xuất/1 chỗ (VNĐ): <span style="color: red">(*)</span>
			</div>
			<div class="col-sm-3">
				<input type="text" class="form-control text-center" id="priceChair" disabled="disable" />
			</div> --}}
			{{-- <div class="decription">
				<span style="font-weight: bold;">Khuyến mãi:</span>
				<h5>
					- Đăng ký <b>1</b> chỗ, giảm<b style="color: red; padding-left: 5px">5%</b><br>
					- Đăng ký <b>2</b> chỗ, giảm<b style="color: red; padding-left: 5px">10%</b><br>
					- Đăng ký <b>3</b> chỗ, giảm<b style="color: red; padding-left: 5px">15%</b><br>
					- Đăng ký <b>4</b> chỗ, giảm<b style="color: red; padding-left: 5px">20%</b><br>
				</h5>
			</div> --}}
		</div>

		{{-- <div class="col-md-12 well well-lg">
			<div class="col-sm-2">
				Cách tính giá: <span style="color: red">(*)</span>
			</div>
			<div class="col-sm-3">
				<input type="radio"  name="howPrice" checked="checked" /> Giá cố định
			</div>

			<div class="col-sm-3">
				<input type="radio"  name="howPrice"/> Giá chia đều
			</div>
		</div>
 --}}
		<div class="col-md-4" style="margin-left: 200px;">
			<a href="/dixechung/gia.html" style="padding-right: 25px"><i class="glyphicon glyphicon-triangle-left"></i>Trở lại</a>
			<button type="submit" class="btn btn-success" id="nextFinish" name=""> Tiếp theo<i class="glyphicon glyphicon-triangle-right" style="padding-left: 5px"></i></button>
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
			$('#priceWay').val(formatNumber(priceWay, '.', '.'));

			//$('#priceChair').val(formatNumber(count*priceWay, '.', '.'));

			// $('#countChair').change(function(){
			// 	var count = $(this).val();
			// 	var priceWay = $('#priceWay').val().replace('.', '');

				// if(count == 1)
					//$('#priceChair').val(formatNumber(count*priceWay, '.', '.'));
				// else if(count == 2)
				// 	$('#priceChair').val(formatNumber(count*priceWay*0.9, '.', '.'));
				// else if(count == 3)
				// 	$('#priceChair').val(formatNumber(count*priceWay*0.85, '.', '.'));
				// else
				// 	$('#priceChair').val(formatNumber(count*priceWay*0.8, '.', '.'));
			// });
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
