<?php 
    session_start();
;?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Macrina Bakery</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <script>
      var div = document.createElement('div');
      div.className = 'fb-customerchat';
      div.setAttribute('page_id', '108061004490048');
      div.setAttribute('ref', '');
      document.body.appendChild(div);
      window.fbMessengerPlugins = window.fbMessengerPlugins || {
        init: function () {
          FB.init({
            appId            : '1678638095724206',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v8.0'
          });
        }, callable: []
      };
      window.fbAsyncInit = window.fbAsyncInit || function () {
        window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
        window.fbMessengerPlugins.init();
      };
      setTimeout(function () {
        (function (d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) { return; }
          js = d.createElement(s);
          js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      }, 0);
    </script>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                <a href="#"><img src="img/icon/heart.png" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="cart__price">Giá: <span>0 VNĐ</span></div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/logo.png" alt=""></a>
            <div class="shop_name">
                <a href="./index.php">Macrina Bakery</a>
            </div> 
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li>VND</li>  
                <li>VIE</li> 
                <li><a href="user/login.php" >Đăng nhập</a> <span class="arrow_carrot-down"></span>
                    <ul class="down">
                        <li><a href="user/dang_ky.php">Đăng kí</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                <ul>
                                    <li>VND</li>   
                                    <li>VIE</li>     
                                    <li>
                                        
                                        <?php 
                                            if (isset($_SESSION['logged'])) { 
                                            $ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

                                            //2.lấy dl mong muốn
                                            $sql="SELECT * from tbl_dang_nhap where ten_dang_nhap='".$_SESSION["taikhoan"]."'  ";
                                            $thong_tin=mysqli_query($ket_noi,$sql);
                                            $row=mysqli_fetch_array($thong_tin);

                                            ?>
                                            <a href="user/thong_tin_ca_nhan.php?id=<?php echo $row["id_dang_nhap"] ?>"><?php echo $_SESSION["taikhoan"] ?> </a>
                                            <li> <a href="user/logout.php">Đăng xuất</a></li>
                                        <?php } else { ?>
                                              <a href="user/login.php" >Đăng nhập</a>
                                            <li>
                                                <a href="user/dang_ky.php">Đăng kí</a>
                                            </li>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="./index.php"><img src="img/logo.png" alt=""></a>
                                <div class="shop_name">
                                     <a href="./index.php">Macrina Bakery</a>
                                </div>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                    <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                                    <a href="#"><img src="img/icon/heart.png" alt=""></a>
                                </div>
                                <div class="header__top__right__cart">
                                    <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                                    <div class="cart__price">Giá: <span>0 VNĐ</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./about.php">About</a></li>
                            <li><a href="./shop.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./wisslist.php">Wisslist</a></li>
                                    <li><a href="./Class.php">Class</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Welcome to <br> Macrina Bakery!</h2>
                                <a href="shop.php" class="primary-btn">Our shop</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/img_hero.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Making your life sweater one bite at a time!</h2>
                                <a href="./about.php" class="primary-btn">Our cakes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
   <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>Giới thiệu</span>
                            <h2>Macrina Bakery-<br>sự đơn giản và sẻ chia!</h2>
                        </div>
                        <p>Ý tưởng về Macrina Bakery được gieo mầm khi Leslie Mackie đang theo học tại trường nấu ăn
                        và tiếp tục bén rễ trong suốt sự nghiệp đầu bếp đầu tiên và trong những chuyến du lịch của cô.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        <div class="about__bar__item">
                            <p>Trang trí</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Hương vị</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Categories Section Begin -->
    <div class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="categories__item"> <a href="shop.php">
                        <div class="categories__item__icon">
                            <span class="flaticon-029-cupcake-3"></span>
                            <h5>Cupcake</h5></a>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-005-pancake"></span>
                            <h5>Crepe</h5>
                        </div>
                    </div>
                     <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-004-piece-of-cake"></span>
                            <h5>Cheesecake</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-023-doughnut"></span>
                            <h5>Donut</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-033-cake-10"></span>
                            <h5>Others</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/caramel_cupcake.jpg">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Caramel Cupcake</a></h6>
                            <div class="product__item__price">32.000</div>
                            <div class="cart_add">
                                <a href="#">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/redvelvet.gif">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Redvelvet Cupcake</a></h6>
                            <div class="product__item__price">25.000</div>
                            <div class="cart_add">
                                <a href="#">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/chocolate_cheese_cake.jpg">
                            <div class="product__label">
                                <span>Cheese Cake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Chocolate Cheese Cake</a></h6>
                            <div class="product__item__price">35.000</div>
                            <div class="cart_add">
                                <a href="#">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/strawberry_crepe.jpg">
                            <div class="product__label">
                                <span>Crepe</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Strawberry Crepe</a></h6>
                            <div class="product__item__price">38.000</div>
                            <div class="cart_add">
                                <a href="#">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span>Theo dõi trên instagram</span>
                            <h2>Những khoảnh khắc ngọt ngào<br> được lưu giữ thành kỉ niệm!</h2>
                        </div>
                        <h5><i class="fa fa-instagram"></i> @macrinabakery</h5>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/ig_cake_4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/instagram/ig_cake_2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/ig_cake_5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/ig_cake_6.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/instagram/ig_cake_3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/ig_cake_7.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Map Begin -->
    <div class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7">
                    <div class="map__inner">
                        <h6>Location</h6>
                        <ul>
                            <li>27 Hồ Đắc Di, Nam Đồng, Đống Đa, Hà Nội</li>
                            <li>contactus@macrinabakery.com</li>
                            <li>+84 981 311 642</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="map__iframe">
           <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3724.5260592881!2d105.8282093!3d21.011627!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1602676091413!5m2!1svi!2s" width="400" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    <!-- Map End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>GIỜ MỞ CỬA</h6>
                        <ul>
                            <li>Thứ 2- Thứ 6: 08:00  – 20:30 </li>
                            <li>Thứ 7-Chủ Nhật: 10:00  – 16:30 </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Bánh là niềm đam mê bất tận của chúng tôi-đem lại cho bạn những dư vị
                        đậm chất Macrina Bakery</p>
                        <div class="footer__social">
                            <a href="https://www.facebook.com/macrinabakery"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/macrinabakery/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Theo dõi</h6>
                        <p>Cập nhật những thông tin mới nhất</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
                  <div class="col-lg-5">
                    <div class="copyright__widget">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" action="shop.php" method="GET">
            <input type="text" id="search-input" placeholder="Search here....." name="search">
            <input type="submit"  value="Search" name="ok">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>