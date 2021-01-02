<?php 
  session_start();
  if (!isset($_SESSION['logged'])) {
    header("location:admin_login.php");
    edit();
  }
;?>
<!DOCTYPE html>
<html>
<head>
    <title>Thực hiện xóa sản phẩm</title>
</head>
<body>
    <?php
        $ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

        $id_sp=$_GET["id"];

        $sql="DELETE FROM `tbl_san_pham` WHERE `tbl_san_pham`.`id_san_pham` = '".$id_sp."'";

        mysqli_query($ket_noi,$sql);

        //5.kết nối thành công đẩy về trang quản trị tin tức
        echo 
            "
                <script type='text/javascript'>
                    window.alert('Xóa sản phẩm thành công');
                </script>
            ";
        echo 
            "
                <script type='text/javascript'>
                    window.location.href='san_pham.php'
                </script>
            ";

    ;?>

</body>
</html>