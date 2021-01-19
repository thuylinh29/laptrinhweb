
<!DOCTYPE html>
<html>
<head>
    <title>Thực hiện xóa nhân viên</title>
</head>
<body>
    <?php
        $ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

        $id_nhan_vien=$_GET["id"];

        $sql="DELETE FROM `tbl_nhan_vien` WHERE `tbl_nhan_vien`.`id_nhan_vien` = '".$id_nhan_vien."'";

        mysqli_query($ket_noi,$sql);

        //5.kết nối thành công đẩy về trang quản trị tin tức
        echo 
            "
                <script type='text/javascript'>
                    window.alert('Xóa nhân viên thành công');
                </script>
            ";
        echo 
            "
                <script type='text/javascript'>
                    window.location.href='nhan-vien.php'
                </script>
            ";

    ;?>

</body>
</html>