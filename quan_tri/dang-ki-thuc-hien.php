
<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện thêm nhân viên</title>
</head>
<body>
	<?php
		$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

		$nv=$_POST["nhanvien"];
		$taikhoan=$_POST["taikhoan"];
		$pass=$_POST["pass"];

		$run="SELECT id_nhan_vien from tbl_nhan_vien where ho_ten='".$nv."'";
		$ten=mysqli_query($ket_noi,$run);
		$each=mysqli_fetch_array($ten);
		$id1=$each['id_nhan_vien'];

		$ss="SELECT id_nhan_vien from tbl_admin";
		$conn=mysqli_query($ket_noi,$ss);
		$each1=mysqli_fetch_array($conn);
		$id2=$each1['id_nhan_vien'];

		if ($id1==$id2){
			echo 
			"
				<script type='text/javascript'>
					window.alert('Nhân viên này đã có tài khoản admin');
				</script>
			";
		echo 
			"
				<script type='text/javascript'>
					window.location.href='page-login.php'
				</script>
			";
		} else {
		$sql="INSERT INTO `tbl_admin`(`id_admin`, `ten_dang_nhap`, `mat_khau`, `id_nhan_vien`) VALUES (null,'".$taikhoan."','".$pass."','".$id1."')";
		mysqli_query($ket_noi,$sql);
		echo 
			"
				<script type='text/javascript'>
					window.alert('Thêm admin thành công');
				</script>
			";
		echo 
			"
				<script type='text/javascript'>
					window.location.href='page-login.php'
				</script>
			";
		}
	;?>

</body>
</html>