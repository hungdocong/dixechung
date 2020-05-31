<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yi</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script>
  <!-- <link rel="stylesheet" href="into.css"> -->
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
  <link href="{{asset('public/backend/css/style1.css')}}" rel='stylesheet' type='text/css' />
  <link href="{{asset('resources/css/style.css')}}" rel='stylesheet' type='text/css' />
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300&family=Cinzel&family=Cinzel+Decorative&family=Rajdhani&family=Rancho&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <!-- Styles -->
</head>
<section>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
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
    <div class="jumbotron text-center">
      <div>
        <img src="{{('public/fontend/images/logo.png')}}" />
        <img id="csh" src="{{('public/fontend/images/carshare.png')}}" />

      </div>

      <!-- <form> -->
      <!-- <div class="input-group">
                      <input type="text" class="form-control" size="50" placeholder="tìm kiếm" required>
                      <div class="input-group-btn"> -->
      <div id="search_travel">
        <div class="bg" style="color: #ffffff;" id="contentSearch">
          <form action="/ride/search.html" class="search_form">
            <label>
              <img class="anhsr" src="{{('public/fontend/images/end_pointer.png')}}" />
              <input type="text" id="start" name="filters[start]" class="diemdi" placeholder="Điểm đi..." />
            </label>
            <label>
              <img class="anhsr" src="{{('public/fontend/images/start_point.png')}}" />
              <input type="text" id="end" class="diemden" placeholder="Điểm đến..." name="filters[end]" />
            </label>
            <label>
              <img class="anhsr" src="{{('public/fontend/images/search-time.png')}}" />
              <input type="date" class="thoigian datepicker" placeholder="Thời gian..." id="depart-date" name="filters[date]" />
            </label>
            <button id="mbtn" class="searchBtnSplash"><a href="{{URL::to('/tim-kiem')}}">Tìm kiếm</a></button>
            <input type="hidden" id="start_pos" name="filters[start_pos]" />
            <input type="hidden" id="end_pos" name="filters[end_pos]" />
            <input type="hidden" id="start_radius" name="filters[start_radius]" value="0" />
            <input type="hidden" id="end_radius" name="filters[end_radius]" value="0" />
            <input type="hidden" id="radius" name="filters[radius]" value="0" />
            <input type="hidden" id="chunk_id" name="chunk_id" value="0" />
          </form>


        </div>

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
    <!-- Container (Contact Section) -->
    <div id="lienhe" class="container-fluid bg-grey">
      <h2 class="text-center">LIÊN HỆ</h2>
      <div class="row">
        <div class="col-sm-5" id="plh">
          <img id="amn" src="{{('public/backend/images/logomini.png')}}" />
          <img id="cshare" src="{{('public/backend/images/carshare.png')}}" />
          <p>Liên hệ với chúng tôi, chúng tôi sẽ trả lời bạn sao 24h.</p> </br>
          <p><span class="glyphicon glyphicon-map-marker"></span> : Ninh Kiều, Cần Thơ</p>
          <p><span class="glyphicon glyphicon-phone"></span> : +84 00000000</p>
          <p><span class="glyphicon glyphicon-envelope"></span> : ntthuuyen@gmail.com</p>
        </div>
        <form action="mailto:ntthuuyen@gmail.com" method="post" id="email_form" enctype="text/plain">
        <div class="col-sm-7 slideanim">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Tên" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" value="send" type="submit">Gửi</button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>

    <footer class="container-fluid text-center">
      <a href="#myPage" title="LÊN =)))">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
      <p>NHẤN LÊN TRÊN</p>
    </footer>

    <script>
      $(document).ready(function() {
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function() {

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });

        $(window).scroll(function() {
          $(".slideanim").each(function() {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
          });
        });
      })
    </script>

  </body>

</html>
