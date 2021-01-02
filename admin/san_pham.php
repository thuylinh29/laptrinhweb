<?php 
  session_start();
  if (!isset($_SESSION['logged'])) {
    header("location:admin_login.php");
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
    <title>Admin | Sản phẩm</title>

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

    <style type="text/css">
        table, tr, td {
            border: 1px solid;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
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
                                            $ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

                                            //2.lấy dl mong muốn
                                            $sql="SELECT * from tbl_admin where ten_dang_nhap='".$_SESSION["taikhoan"]."'  ";
                                            $thong_tin=mysqli_query($ket_noi,$sql);
                                            $row=mysqli_fetch_array($thong_tin);
                                            echo $_SESSION["taikhoan"] ?>
                                            <li> <a href="admin_logout.php">Đăng xuất</a></li>
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
                            <li><a href="quan_tri.php">Quản trị</a></li>
                            <li><a href="nguoi_dung.php">Khách hàng</a></li>
                            <li><a href="nhan_vien.php">Nhân viên</a></li>
                            <li><a href="danh_gia.php">Đánh giá</a></li>
                            <li class="active"><a href="san_pham.php">Sản phẩm</a></li>
                            <li><a href="thong_ke.php">Thống kê</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

     <section class="login spad">
        <div class="row">
                <div >
                    <p style="font-style: italic; font-weight: bold; font-family: Playfair Display; font-size: 20px; margin-top:-50px; margin-left: 50px;">Thông tin sản phẩm: </p>
                        <?php 
                            $ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");
                            $count="SELECT * from tbl_san_pham";
                            $query=mysqli_query($ket_noi,$count);
                            $dem=mysqli_num_rows($query);
                        ;?>
                    <p style="margin-left: 50px;">Tổng số sản phẩm: <?php echo $dem ;?> </p>
                    <a href="san_pham_them.php"><button style="margin-left: 50px; color: #ffffff; background: #F08632;border: none; padding: 10px 15px;">Thêm sản phẩm</button></a>
                </div>
                <div>
                    <table style="margin-left: 10px;margin-top: 90px;">
                        <tr>
                            <td style="font-weight: bold; text-align: center;">STT</td>
                            <td style="font-weight: bold; text-align: center;">Tên sản phẩm</td>
                            <td style="font-weight: bold; text-align: center;">Tên loại sản phẩm</td>
                            <td style="font-weight: bold; text-align: center;">Hình ảnh</td>
                            <td style="font-weight: bold; text-align: center;">Mô tả</td>
                            <td style="font-weight: bold; text-align: center;">Giá bán</td>
                            <td style="font-weight: bold; text-align: center;">Số lượng tồn kho</td>
                            <td style="font-weight: bold; text-align: center;">Sửa</td>
                            <td style="font-weight: bold; text-align: center;">Xóa</td>
                        </tr>

                        <?php
                            $sql="SELECT * from tbl_san_pham as tbl1 join tbl_loai_san_pham as tbl2
                            on tbl1.id_loai_san_pham=tbl2.id_loai_san_pham ";
                            $noi_dung_san_pham=mysqli_query($ket_noi,$sql);
                            $i=0;
                            while ($row=mysqli_fetch_array($noi_dung_san_pham)) { $i++;
                        ;?>
                            <tr>
                                <td><?php echo $i ;?></td>
                                <td><?php echo $row["ten_san_pham"] ;?></td>
                                <td><?php echo $row["ten_loai_san_pham"] ;?></td>
                                <td><img src="img/shop/<?php echo $row["hinh_anh"] ;?>" style="width: 100px; height: auto;"></td>
                                <td style="width: 200px"><?php echo $row["mo_ta"] ;?></td>
                                <td><?php echo number_format($row["gia_ban"],0,",",".") ;?></td>
                                <td><?php echo $row["so_luong_ton_kho"] ;?></td>
                                <td><a href="san_pham_sua.php?id=<?php echo $row["id_san_pham"] ;?>"><img src="img/edit.jpg" style="width: 32px; height: auto;"></a> </td>
                                <td><a href="san_pham_xoa.php?id=<?php echo $row["id_san_pham"] ;?>"><img src="img/delete.jpg" style="width: 32px; height: auto;"></a></td>
                            </tr>
                            <?php 
                            }
                            ;?>
                    </table>
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