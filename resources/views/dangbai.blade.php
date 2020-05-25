<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> WEB CỦA UYN NÈ =)))</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script>
    <!-- <link rel="stylesheet" href="into.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="{{asset('public/backend/css/style1.css')}}" rel='stylesheet' type='text/css' />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300&family=Cinzel&family=Cinzel+Decorative&family=Rajdhani&family=Rancho&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
    </style>
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
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{URL::to('/trang-chu')}}">THÔNG TIN</a></li>
                        <li><a href="#">DỊCH VỤ</a></li>
                        <li><a href="#dangbai">ĐĂNG BÀI</a></li>
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
        </div>
        <!-- NHẬP THÔNG TIN ĐĂNG BÀI-->
        <div id="dangbai">
            <h3 align="center"> NHẬP THÔNG TIN ĐĂNG BÀI </h3>
        </div>

        <!-- LIÊN HỆ -->
        <div id="lienhe" class="container-fluid bg-grey">
            <h3 class="text-center">LIÊN HỆ</h3>
            <div class="row">
                <div class="col-sm-5" id="plh">
                    <img id="amn" src="{{('public/fontend/images/logomini.png')}}" />
                    <img id="cshare" src="{{('public/fontend/images/carshare.png')}}" />
                    <p>Liên hệ với chúng tôi, chúng tôi sẽ trả lời bạn sao 24h.</p></br>
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
            </div>
        </div>
        <!-- Image of location/map -->


        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Nhấn để lên trên</p>
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