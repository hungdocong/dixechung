
@extends('layouts._layout')

@section('title', 'Đăng lộ trình')

@section('content')

	<div class="container-fluid" id="grad1">
      <div class="row justify-content-center mt-0">
        <div class="map_content">
          <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

            <div class="row">
              <div class="col-md-12 mx-0">
                <form id="msform">
                  <!-- progressbar -->
                  <ul id="progressbar">
                    <li class="active" id="account"><strong>Đi đến đâu?</strong></li>
                    <li id="personal"><strong>Phương tiện & thời gian </strong></li>
                    <li id="payment"><strong>Thông tin & giá</strong></li>
                    <li id="confirm"><strong>Hoàn thành</strong></li>
                  </ul> <!-- fieldsets -->
                  <fieldset>
                    <div id="column_left">
                      <div class="form-card">
                        <dl>
                          <dt><label for="s">Đi từ <span class="red">(*)</span></label></dt>
                          <dd id="dd_start">
                           <input placeholder="Ví dụ: 1 Tràng Thi, Tràng Tiền, Hoàn Kiếm, Hà Nội, Việt Nam" name="start"  id="start" maxlength="400" placeholder="Ví dụ: Hanoi, Vietnam" />
                           <a href="javascript:void(0)" onclick="getCurrentPosition('start')" style="color: #fff" title="Vị trí của bạn" alt="Vị trí của bạn"></a>
                           <div class="row-fluid"> 
                            <div class="form-group col-md-12" style="padding-left: 0px; padding-right: 0px">
                            	<div class="col-md-4 chooseAd">
                            		<select class="form-control" name="depart_city" id="depart_city" renderTo="depart_district">
                            			<option value="0">Tỉnh/TP</option>
                            			<option  value="15">Đà Nẵng</option>
                            			<option  value="24">Hà Nội</option>
                            			<option  value="59">TP.Hồ Chí Minh</option>
                            			<option  value="42">Ninh Bình</option>
                            			<option  value="48">Quảng Ngãi</option>
                            			<option  value="47">Quảng Nam</option>
                            			<option  value="46">Quảng Bình</option>
                            			<option  value="45">Phú Yên</option>
                            			<option  value="44">Phú Thọ</option>
                            			<option  value="43">Ninh Thuận</option>
                            			<option  value="50">Quảng Trị</option>
                            			<option  value="41">Nghệ An</option>
                            			<option  value="40">Nam Định</option>
                            			<option  value="39">Long An</option>
                            			<option  value="38">Lâm Đồng</option>
                            			<option  value="37">Lào Cai</option>
                            			<option  value="36">Lạng Sơn</option>
                            			<option  value="35">Lai Châu</option>
                            			<option  value="49">Quảng Ninh</option>
                            			<option  value="33">Kiên Giang</option>
                            			<option  value="51">Sóc Trăng</option>
                            			<option  value="52">Sơn La</option>
                            			<option  value="53">Tây Ninh</option>
                            			<option  value="54">Thái Bình</option>
                            			<option  value="55">Thái Nguyên</option>
                            			<option  value="56">Thanh Hóa</option>
                            			<option  value="57">Thừa Thiên Huế</option>
                            			<option  value="58">Tiền Giang</option>
                            			<option  value="60">Trà Vinh</option>
                            			<option  value="61">Tuyên Quang</option>
                            			<option  value="62">Vĩnh Long</option>
                            			<option  value="63">Vĩnh Phúc</option>
                            			<option  value="64">Yên Bái</option>
                            			<option  value="17">Đắk Nông</option>
                            			<option  value="1">An Giang</option>
                            			<option  value="2">Bà Rịa Vũng Tàu</option>
                            			<option  value="3">Bình Dương</option>
                            			<option  value="4">Bình Phước</option>
                            			<option  value="5">Bình Thuận</option>
                            			<option  value="6">Bình Ðịnh</option>
                            			<option  value="7">Bạc Liêu</option>
                            			<option  value="8">Bắc Giang</option>
                            			<option  value="9">Bắc Kạn</option>
                            			<option  value="10">Bắc Ninh</option>
                            			<option  value="11">Bến Tre</option>
                            			<option  value="12">Cao Bằng</option>
                            			<option  value="13">Cà Mau</option>
                            			<option  value="14">Cần Thơ</option>
                            			<option  value="16">Đắc Lắc</option>
                            			<option  value="34">Kon Tum</option>
                            			<option  value="18">Điện Biên</option>
                            			<option  value="19">Đồng Nai</option>
                            			<option  value="20">Đồng Tháp</option>
                            			<option  value="21">Gia Lai</option>
                            			<option  value="22">Hà Giang</option>
                            			<option  value="23">Hà Nam</option>
                            			<option  value="26">Hà Tĩnh</option>
                            			<option  value="27">Hải Dương</option>
                            			<option  value="28">Hải Phòng</option>
                            			<option  value="29">Hậu Giang</option>
                            			<option  value="30">Hòa Bình</option>
                            			<option  value="31">Hưng Yên</option>
                            			<option  value="32">Khánh Hòa</option>
                            			<option  value="0">Chọn địa phương</option>
                            		</select>
                            	</div>
                            	<div class="col-md-4 chooseAd">
                            		<select class="form-control"  name="depart_district" id="depart_district"  renderTo="depart_village">
                            			<option value="0"> Quận/Huyện  </option> 
                            		</select>
                            	</div>
                            	<div class="col-md-4 chooseAd">
                            		<select class="form-control" name="depart_village" id="depart_village">
                            			<option value="0"> Phường/Xã  </option> 
                            		</select>
                            	</div>
                            </div>
                            <!--<p> Hoặc nhập địa chỉ : </p>-->
                          </div>

                          <div id="suggest_list_start" class="suggest_list"></div>
                        </dd>
                        <dt><label for="e">Đến <span class="red">(*)</span></label></dt>
                        <dd id="dd_end">
                         <input onchange="if(this.value !='') ga('send', 'event', { eventCategory: 'Chon diem den trong đang chuyen di', eventAction: 'Chon diem den trong đang chuyen di', eventLabel: 'Chon diem den trong đang chuyen di', eventValue: 1}); ga('send', 'pageview', '/virtualpage-nhap-dia-chi-diem-den-trong-dang-chuyen-di');" class="clickaway" value="" type="text" name="end" id="end" placeholder="Ví dụ: Ho Chi Minh, Vietnam" maxlength="400">
                          <a href="javascript:void(0)" onclick="getCurrentPosition('end')" style="color: #fff" title="Vị trí của bạn" alt="Vị trí của bạn"></a>
                          <div  class="row_frame">
                           <div class="form-group col-md-12" style="padding-left: 0px; padding-right: 0px">
                            	<div class="col-md-4 chooseAd">
                            		<select class="form-control" name="depart_city" id="depart_city" renderTo="depart_district">
                            			<option value="0">Tỉnh/TP</option>
                            			<option  value="15">Đà Nẵng</option>
                            			<option  value="24">Hà Nội</option>
                            			<option  value="59">TP.Hồ Chí Minh</option>
                            			<option  value="42">Ninh Bình</option>
                            			<option  value="48">Quảng Ngãi</option>
                            			<option  value="47">Quảng Nam</option>
                            			<option  value="46">Quảng Bình</option>
                            			<option  value="45">Phú Yên</option>
                            			<option  value="44">Phú Thọ</option>
                            			<option  value="43">Ninh Thuận</option>
                            			<option  value="50">Quảng Trị</option>
                            			<option  value="41">Nghệ An</option>
                            			<option  value="40">Nam Định</option>
                            			<option  value="39">Long An</option>
                            			<option  value="38">Lâm Đồng</option>
                            			<option  value="37">Lào Cai</option>
                            			<option  value="36">Lạng Sơn</option>
                            			<option  value="35">Lai Châu</option>
                            			<option  value="49">Quảng Ninh</option>
                            			<option  value="33">Kiên Giang</option>
                            			<option  value="51">Sóc Trăng</option>
                            			<option  value="52">Sơn La</option>
                            			<option  value="53">Tây Ninh</option>
                            			<option  value="54">Thái Bình</option>
                            			<option  value="55">Thái Nguyên</option>
                            			<option  value="56">Thanh Hóa</option>
                            			<option  value="57">Thừa Thiên Huế</option>
                            			<option  value="58">Tiền Giang</option>
                            			<option  value="60">Trà Vinh</option>
                            			<option  value="61">Tuyên Quang</option>
                            			<option  value="62">Vĩnh Long</option>
                            			<option  value="63">Vĩnh Phúc</option>
                            			<option  value="64">Yên Bái</option>
                            			<option  value="17">Đắk Nông</option>
                            			<option  value="1">An Giang</option>
                            			<option  value="2">Bà Rịa Vũng Tàu</option>
                            			<option  value="3">Bình Dương</option>
                            			<option  value="4">Bình Phước</option>
                            			<option  value="5">Bình Thuận</option>
                            			<option  value="6">Bình Ðịnh</option>
                            			<option  value="7">Bạc Liêu</option>
                            			<option  value="8">Bắc Giang</option>
                            			<option  value="9">Bắc Kạn</option>
                            			<option  value="10">Bắc Ninh</option>
                            			<option  value="11">Bến Tre</option>
                            			<option  value="12">Cao Bằng</option>
                            			<option  value="13">Cà Mau</option>
                            			<option  value="14">Cần Thơ</option>
                            			<option  value="16">Đắc Lắc</option>
                            			<option  value="34">Kon Tum</option>
                            			<option  value="18">Điện Biên</option>
                            			<option  value="19">Đồng Nai</option>
                            			<option  value="20">Đồng Tháp</option>
                            			<option  value="21">Gia Lai</option>
                            			<option  value="22">Hà Giang</option>
                            			<option  value="23">Hà Nam</option>
                            			<option  value="26">Hà Tĩnh</option>
                            			<option  value="27">Hải Dương</option>
                            			<option  value="28">Hải Phòng</option>
                            			<option  value="29">Hậu Giang</option>
                            			<option  value="30">Hòa Bình</option>
                            			<option  value="31">Hưng Yên</option>
                            			<option  value="32">Khánh Hòa</option>
                            			<option  value="0">Chọn địa phương</option>
                            		</select>
                            	</div>
                            	<div class="col-md-4 chooseAd">
                            		<select class="form-control"  name="depart_district" id="depart_district"  renderTo="depart_village">
                            			<option value="0"> Quận/Huyện  </option> 
                            		</select>
                            	</div>
                            	<div class="col-md-4 chooseAd">
                            		<select class="form-control" name="depart_village" id="depart_village">
                            			<option value="0"> Phường/Xã  </option> 
                            		</select>
                            	</div>
                            </div>
                            </dd>
                            <dt>
                              <label>Lịch trình chi tiết</label>
                            </dt>
                            <dd>
                              <textarea rows="5" name="schedule" placeholder="Lịch trình chuyến đi của bạn nếu có .." style="width:300px"></textarea>
                            </dd>
                          </dl>
                          
                          <a href="/dixechung" style="padding-right: 25px"><i class="glyphicon glyphicon-triangle-left"></i>Trở lại</a>
                          <button type="button" class="btn btn-success" id="nextVehicle" name=""> Tiếp theo<i class="glyphicon glyphicon-triangle-right" style="padding-left: 5px"></i></button>
                        </div>
                      </div>
                      <div id="column_right">
                        <div class="font-card">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7838.684254869503!2d106.70676642475235!3d10.785086936675276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1547181657956"
                          width="300" height="572px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>

                  </fieldset>


                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection


@section('jsScript')
    <script type="text/javascript">
    	$(document).ready(function(){
            $('#nextVehicle').click(function(){
               window.location.href = "/dixechung/phuong-tien-thoi-gian.html" ;
            });
        })
    </script>
@endsection
