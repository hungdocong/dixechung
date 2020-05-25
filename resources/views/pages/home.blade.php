@extends('welcome')
    @section('content')
<!-- Container (About Section) -->
<div id="thongtin" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>THÔNG TIN VỀ CHÚNG TÔI <img src="./img/heart.PNG" > </h2>
      <h4>ĐI CHUNG XE, TIẾT KIỆM CHI PHÍ LÊN ĐẾN 50%</h4>
      <p>Có bao giờ di chuyển trên đường và bạn nghĩ:  Phải chi có thêm bạn đồng hành thì sẽ vui hơn?</br>
        Nếu chi phí tiết kiệm hơn một chút thì bạn sẽ đi xe oto của mình nhiều hơn là phải đi Grab,</br>
        GoViet hoặc cái loại xe công nghệ khác. Vậy thì chúng tôi ở đây có gì vui cho bạn đây! Chúng tôi đã </br>
        tạo ra một website giúp bạn tiết kiệm được chi phí lên đến 50%. OtoShare cho phép bạn chia sẻ chuyến đi với </br>
        hành khách khác có cùng hướng đi. Bên cạnh đó còn giúp những người không có phương tiện đi lại tìm được bạn</br>
        đồng hành chung với mình trên mõi chuyến đi. Bằng cách này, bạn vừa giảm được chi phí đi lại hàng tháng, vừa </br>
        có những hành trình thú vị. Mõi chuyến xe có 2 điểm đến. Do đó, bạn cũng không phải quá lo lắng về thời gian di chuyển phát sinh ngoài ý muốn.
        Nó cũng giúp cho những hành khách nào không muốn đi trên xe có quá nhiều người như xe khách</p>
      <br><button class="btn btn-default btn-lg">LIÊN LẠC</button>
    </div>
    <div class="col-sm-4">
      <!-- <span class="glyphicon glyphicon-signal logo"></span> -->
      <img class="about" src="./img/about.PNG">
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>GIÁ TRỊ CỦA CHÚNG TÔI <img class="gtri" src="./img/gtri.PNG" ></h2><br>
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

<!-- Container (Pricing Section) -->
<!-- <div id="dangkydangnhap" class="container-fluid">
  <div class="text-center">
    <h2>GIÁ CẢ</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div> -->

<!-- Container (Contact Section) -->
<div id="lienhe" class="container-fluid bg-grey">
  <h2 class="text-center">LIÊN HỆ</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Liên hệ với chúng tôi, chúng tôi sẽ trả lời bạn sao 24h.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> : Ninh Kiều, Cần Thơ</p>
      <p><span class="glyphicon glyphicon-phone"></span> : +84 38890 0808</p>
      <p><span class="glyphicon glyphicon-envelope"></span> : ntthuuyen@gmail.com</p>
    </div>
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
          <button class="btn btn-default pull-right" type="submit">Gửi</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Nhấn để lên trên</p>
</footer>

<script>
$(document).ready(function(){
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
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
@endsection