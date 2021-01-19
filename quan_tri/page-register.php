<?php 
  session_start();
  if (!isset($_SESSION['logged'])) {
    header("location:page-login.php");
    edit();
  }
;?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng kí Admin</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/footer-logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="dang-ki-thuc-hien.php" method="POST">
                        <?php
                            $ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");
                            $sql="SELECT id_nhan_vien, ho_ten from tbl_nhan_vien ";
                            $thong_tin=mysqli_query($ket_noi,$sql);
                        ;?>
                        <div class="form-group">
                            <label>Nhân viên</label>
                            <div class="col-12 col-md-9">
                                <select name="nhanvien"  class="form-control">
                                    <option value="0">--Nhân viên--</option>
                                       <?php 
                                            $i=0;
                                            while ($row=mysqli_fetch_array($thong_tin)) {$i++;
                                        ;?>
                                    <option value="<?php echo $row["ho_ten"] ;?> "><?php echo $row["ho_ten"] ;?></option>
                                    <?php } ;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input type="text" class="form-control" name="taikhoan" placeholder="Tên đăng nhập" required="">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pass" placeholder="Password" required="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Đăng kí</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
