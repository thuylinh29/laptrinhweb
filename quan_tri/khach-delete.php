<!DOCTYPE html>
<html>
<head>
    <title>Thực hiện xóa nhân viên</title>
</head>
<body>
    <?php
        $ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

        $id_KH=$_GET["id"];

        $sql="DELETE FROM `tbl_dang_nhap` WHERE `tbl_dang_nhap`.`id_dang_nhap` = '".$id_KH."'";

        mysqli_query($ket_noi,$sql);

        //5.kết nối thành công đẩy về trang quản trị tin tức
        echo 
            "
                <script type='text/javascript'>
                    window.alert('Xóa khách hàng thành công');
                </script>
            ";
        echo 
            "
                <script type='text/javascript'>
                    window.location.href='khach-hang.php'
                </script>
            ";

    ;?>

</body>
</html>