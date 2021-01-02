<?php 
  session_start();
  if (!isset($_SESSION['logged'])) {
    header("location:login.php");
    edit();
  }
;?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin cá nhân</title>

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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        
        function kt() {
            var dem_kt = 0;
        //validate ho ten
        var regex_phonenumber = /0[0-9]{9}/;
        var phonenumber = document.getElementById("phonenumber");
        var err_phonenumber = document.getElementById("err_phonenumber");
        var value_so_dien_thoai = phonenumber.value;
        if(value_phonenumber.length == 0){
            err_phonenumber.innerHTML = " *Khong duoc de trong";
            dem_kt++;
        }
        else if(regex_sdt.test(value_phonenumber) == false){
            err_phonenumber.innerHTML = " *Phai nhap 10 so";
            dem_kt++;
        }
        else{
            err_phonenumber.innerHTML = "";
        }
        if(dem_kt == 0){
            return true;
        }
        else{
            return false;
        }
        }
    </script>
</head>

<body>
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
            <a href="../index.php"><img src="img/logo.png" alt=""></a>
            <div class="shop_name">
                <a href="../index.php">Macrina Bakery</a>
            </div> 
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li>VND</li>  
                <li>VIE</li> 
                <li><a href="./login.php">Đăng nhập</a> <span class="arrow_carrot-down"></span>
                    <ul class="down">
                        <li><a href="./dang_ky.php">Đăng kí</a></li>
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
                                            echo $_SESSION["taikhoan"] ?> 
                                                <li> <a href="logout.php">Đăng xuất</a></li>
                                            
                                        <?php } ;?>
                                    </li>
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="../index.php"><img src="img/logo.png" alt=""></a>
                                <div class="shop_name">
                                     <a href="../index.php">Macrina Bakery</a>
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
                            <li class="active"><a href="../index.php">Home</a></li>
                            <li><a href="../about.php">About</a></li>
                            <li><a href="../shop.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="../shop-details.php">Shop Details</a></li>
                                    <li><a href="../shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="../checkout.php">Check Out</a></li>
                                    <li><a href="../wisslist.php">Wisslist</a></li>
                                    <li><a href="../Class.php">Class</a></li>
                                    <li><a href="../blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="../blog.php">Blog</a></li>
                            <li><a href="../contact.php">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!--Login Section begin-->
    <section class="login spad">
         <div class="container">
            <div class="row">
            	<div class="contact__text">
                	<h3 >Thông tin cá nhân </h3>
                    <a href="doi_pass.php"><button style="margin-left: 50px; background: #111111;color: #ffffff;border: none; padding: 10px 15px;">Đổi mật khẩu</button></a>
                </div>
                <!--<div style="background-color: #F08632; margin-left: 30px; width: 50%;"> -->
                <div class="thongtin__form">
	                <form method="POST" action="cap_nhat_thong_tin.php" enctype="multipart/form-data" style="margin-left: 150px; width: 100%; background: #F08632">
	                	<?php
								//1.kết nối đến csdl
								$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");
								$id=$_GET["id"];
								$sql="SELECT * from tbl_dang_nhap where id_dang_nhap='".$id."'";
								$thong_tin=mysqli_query($ket_noi,$sql);
	                            $row=mysqli_fetch_array($thong_tin);
						;?>
						<table style="width=500; height=200;  " cellpadding="10">
									<tr>
										<th style="font-style: italic; font-weight: lighter;">Tên đăng nhập</th>
										<th><input type="text" name="taikhoan" style="width: 150%;" value="<?php echo $row["ten_dang_nhap"] ;?>" disabled></th>
									</tr>
								
									<tr>
										<th style="font-style: italic; font-weight: lighter;">Số điện thoại</th>
										<th><input type="text" name="sdt" style="width: 150%;" value="<?php echo $row["so_dien_thoai"] ;?>" id="phonenumber"><span id="err_phonenumber"></th>
									</tr>
									<tr>
										<th style="font-style: italic; font-weight: lighter;">Email</th>
										<th><input type="text" name="email" style="width: 150%;" value="<?php echo $row["email"] ;?>"></th>
									</tr>
									<tr>
										<th style="font-style: italic; font-weight: lighter;">Địa chỉ</th>
										<th><input type="text" name="diachi" style="width: 150%;" value="<?php echo $row["dia_chi"] ;?>">
										</th>
									</tr>
									<tr>
										<th colspan="3" align="center">
										<input type="submit" name="sua" style="width: 30%;position: center;background: #111111;color: #ffffff;padding: 14px 12px; margin-left: 150px;" value="Cập nhật">
                                        <input type="hidden" name="id" value="<?php echo $row["id_dang_nhap"] ;?>">
										</th>
                                        
									</tr>
						</table>
	                </form>
	            </div>
            </div>
        </div>
    </section>
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
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
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

