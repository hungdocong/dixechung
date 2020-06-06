@extends('layouts._layout')

@section('title', 'Đi xe chung')

@section('content')

    <div class="jumbotron text-center">
      <div>
        <img src="{{('public/fontend/images/logo.png')}}" />
        <img id="csh" src="{{('public/fontend/images/carshare.png')}}" />

      </div>

      <!-- <form> -->
      <!-- <div class="input-group">
                      <input type="text" class="form-control" size="50" placeholder="tìm kiếm" required>
                      <div class="input-group-btn"> -->
      <div class="col-md-12" style="margin-left: 240px;">
        <div class="bg" style="color: #ffffff;" id="contentSearch">
          <form action="/ride/search.html" class="search_form">
            <div class="form-group">
              <div class="col-md-2">
                {{-- <img class="anhsr" src="{{('public/fontend/images/end_pointer.png')}}" /> --}}
                <input type="text" id="start" name="filters[start]" class="form-control" placeholder="Điểm đi..." />
              </div>
            </div>
            

            <div class="col-md-2">
               {{-- <img class="anhsr" src="{{('public/fontend/images/start_point.png')}}" /> --}}
              <input type="text" id="end" class="form-control" placeholder="Điểm đến..." name="filters[end]" />
            </div>

            <div class="col-md-2">
              {{-- <img class="anhsr" src="{{('public/fontend/images/search-time.png')}}" /> --}}
              <div class="form-group">
                  <div class="input-group date" id="depart-date">
                    <input type="text" class="form-control" placeholder="Thời gian">
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar">
                      </span>
                    </span>
                  </div>
                </div>
            </div>
            <div class="col-md-2">
              <button id="mbtn" class="btn btn-default"><a href="{{URL::to('/tim-kiem')}}">Tìm kiếm</a></button>
            </div>
            <input type="hidden" id="start_pos" name="filters[start_pos]" />
            <input type="hidden" id="end_pos" name="filters[end_pos]" />
            <input type="hidden" id="start_radius" name="filters[start_radius]" value="0" />
            <input type="hidden" id="end_radius" name="filters[end_radius]" value="0" />
            <input type="hidden" id="radius" name="filters[radius]" value="0" />
            <input type="hidden" id="chunk_id" name="chunk_id" value="0" />
          </form>
            

        </div>

      </div>

      <div class="col-md-12">
        <button type="button" id="postWay" class="btn btn-success btn-lg">Đăng lộ trình</button>
      </div>
      <!-- </form> -->

    </div>

    </div>
    </div>

    <!-- Container (About Section) -->
    <div id="thongtin" class="container">
      <h2>LỘ TRÌNH ĐI CHUNG ĐÃ ĐĂNG</h2>
      <div class="col-12" style="padding-bottom: 100px">
        <a href="#" class="item_content-left">
          <div class="item">
            <div class="popular-chunk__list">
              <div class="popular-chunk__item">
                <div class="chunk">
                  <span>Phu Quoc Airport </span>
                  <span class="glyphicon glyphicon-arrow-right" style="text-align: center;"></span>
                  <span> Duong Dong</span>
                </div>
              </div>
              <div class="time_price">
                  <span>Ngày khởi hành: </span><span style="color: blue; margin-right: 5px">25/5/2020 7:00 AM</span>
                  <button class="btn-dc btn-price" style="text-align: center; float: right; border: none; outline: none;">
                    <span>từ&nbsp;</span> 100.000&nbsp;₫
                  </button>
              </div>
            </div>
          </div>
        </a>
        <a href="#" class="item_content-right">
          <div class="item">
            <div class="popular-chunk__list">
              <div class="popular-chunk__item">
                <div class="chunk">
                  <span>Phu Quoc Airport </span>
                  <span class="glyphicon glyphicon-arrow-right" style="text-align: center;"></span>
                  <span> Duong Dong</span>
                </div>
              </div>
           </div>

           <div class="time_price">
              <span>Ngày khởi hành: </span><span style="color: blue; margin-right: 5px">25/5/2020 7:00 AM</span>
              <button class="btn-dc btn-price" style="text-align: center; float: right; border: none; outline: none;">
                <span>từ&nbsp;</span> 100.000&nbsp;₫
              </button>
          </div>
         </div>
        </a>

      </div>

       <div class="col-12" style="padding-bottom: 100px">
        <a href="#" class="item_content-left">
          <div class="item">
            <div class="popular-chunk__list">
              <div class="popular-chunk__item">
                <div class="chunk">
                  <span>Phu Quoc Airport </span>
                  <span class="glyphicon glyphicon-arrow-right" style="text-align: center;"></span>
                  <span> Duong Dong</span>
                </div>
              </div>
              <div class="time_price">
                  <span>Ngày khởi hành: </span><span style="color: blue; margin-right: 5px">25/5/2020 7:00 AM</span>
                  <button class="btn-dc btn-price" style="text-align: center; float: right; border: none; outline: none;">
                    <span>từ&nbsp;</span> 100.000&nbsp;₫
                  </button>
              </div>
            </div>
          </div>
        </a>
        <a href="#" class="item_content-right">
          <div class="item">
            <div class="popular-chunk__list">
              <div class="popular-chunk__item">
                <div class="chunk">
                  <span>Phu Quoc Airport </span>
                  <span class="glyphicon glyphicon-arrow-right" style="text-align: center;"></span>
                  <span> Duong Dong</span>
                </div>
              </div>
           </div>

           <div class="time_price">
              <span>Ngày khởi hành: </span><span style="color: blue; margin-right: 5px">25/5/2020 7:00 AM</span>
              <button class="btn-dc btn-price" style="text-align: center; float: right; border: none; outline: none;">
                <span>từ&nbsp;</span> 100.000&nbsp;₫
              </button>
          </div>
         </div>
        </a>
      </div>
    </div>


    <div class="container-fluid bg-grey">
      <div class="row">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-globe logo slideanim"></span>
        </div>
        <div class="col-sm-8">
          <h2>GIÁ TRỊ CỦA CHÚNG TÔI </h2><br>
          <h4><strong> NHIỆM VỤ :</strong> Chúng tôi giúp bạn chi phí đi đường giúp bạn không cảm thấy cô đơn trên chuyên đi của mình, bên cạnh đó còn tìm kiếm cho bạn người bạn đồng hành
            theo yêu cầu của bạn đặt ra. Hơn thế nữa đi xe chung đã có rất lâu và được nhiều nước trên Thế Giới phát triển nó.
            Đi chung xe mang lại nhiều lợi ích cho mọi cá nhân sử dụng nó. Còn có bảo vệ môi trường. Đi xe chung thể hiện phong cách sống văn minh, góp phần giảm tắc đường và bảo vệ môi trường.
            Tốt cho bạn và cho cả mọi người.</h4><br>
        </div>
      </div>
    </div>

    <!-- Container (Services Section) -->
    <div id="dichvu" class="container-fluid text-center">
      <h2>DỊCH VỤ</h2>
      <div class="row slideanim">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-calendar logo-small"></span>
          <h4>ĐĂNG XE ĐI CHUNG</h4>
          <p>Tìm bạn đi trên cùng tuyến đường</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-phone-alt logo-small"></span>
          <h4>ĐẶT XE CÓ LÁI</h4>
          <p>Đặt trước xe đi hằng ngày, đi đường dài</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-user logo-small"></span>
          <h4>THUÊ LÁI XE</h4>
          <p>Thuê tài xé riêng. An toàn, siêu tiện lợi</p>
        </div>
      </div>
      <br><br>
      <div class="row slideanim">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-leaf logo-small"></span>
          <h4>ĐẶT XE TỰ LÁI</h4>
          <p>Mạng lưới cho thuê xe tự lái trên toàn quốc</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-shopping-cart logo-small"></span>
          <h4>VẬN CHUYỂN HÀNG HÓA</h4>
          <p>Chuyển hàng siêu nhanh, lấy tận nơi giao tận cửa</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-earphone logo-small"></span>
          <h4>TUYỂN DỤNG</h4>
          <p>Cùng nhau tốt hơn</p>
        </div>
      </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div id="dichvu" class="container-fluid text-center bg-grey">
      <h2>SẢN PHẨM ĐẠT ĐƯỢC</h2><br>
      <!-- <h4>NHỮNG GÌ CHÚNG TÔI ĐÃ TẠO RA</h4> -->
      <div class="row text-center slideanim">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="./img/pig.PNG" alt="Pig" width="400" height="300">
            <p><strong>23.890.282.675 VNĐ</strong></p>
            <p>Tiết kiệm cho khách hàng</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="./img/carc.PNG" alt="chuyến" width="400" height="300">
            <p><strong>24.975 chuyến</strong></p>
            <p>Chuyến đi được thành công, vui vẻ đi cùng</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="./img/Eth.PNG" alt="CO2" width="400" height="300">
            <p><strong>2.151.921 KG</strong></p>
            <p>CO2 được giảm thải ra môi trường</p>
          </div>
        </div>
      </div><br>

      <h2>KHÁCH HÀNG CỦA CHÚNG TÔI ĐÃ NÓI GÌ ?</h2>
      <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <h4>"Nó giúp cho tôi tiết kiệm chi phí đi lại."<br><span>Tôi cảm thấy được an toàn, không cảm thấy cô đơn.</span></h4>
          </div>
          <div class="item">
            <h4>"Một từ thôi... WOW!!"<br><span>Cảm thấy tuyệt vời khi có dịch vụ này.</span></h4>
          </div>
          <div class="item">
            <h4>"Tôi có thể... hạnh phúc hơn với dịch vụ này không?"<br><span>Hãy tiếp tục phát triển nó nhé!</span></h4>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

@endsection

@section('jsScript')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#postWay').click(function(){
               window.location.href = "/dixechung/dang-lo-trinh.html" ;
            });
        })

        $(function () {
          $('#depart-date').datetimepicker({
            minDate: new Date(),
            format: 'dd/mm/yyyy hh:ii',
            autoclose:true,
            language: 'vi'
          });

        });
    </script>
@endsection

