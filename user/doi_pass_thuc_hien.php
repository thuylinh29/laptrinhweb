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
	<title>Thực hiện đổi mật khẩu</title>
</head>
<body>
	<?php
		$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

		$id=$_POST["txtId"];
		$mat_khau_cu=$_POST["txtMatKhauCu"];
		$mat_khau_moi=$_POST["txtMatKhauMoi"];
		$mat_khau_moi2=$_POST["txtMatKhauMoi2"];
		

		if ($mat_khau_moi==$mat_khau_moi2) {
			$sql="UPDATE `tbl_dang_nhap` 
			SET `mat_khau`='".$mat_khau_moi."'
			WHERE `tbl_dang_nhap`.`id_dang_nhap`='".$id."'";
			mysqli_query($ket_noi,$sql);

			echo
			"
				<script type='text/javascript'>
					window.alert('Đổi mật khẩu thành công');
				</script>
			";
			echo 
			"
				<script type='text/javascript'>
					window.location.href='thong_tin_ca_nhan.php?id=$id'
				</script>
			";
		} else {
			echo 
			"
				<script type='text/javascript'>
					window.alert('Mật khẩu không khớp!');
				</script>
			";
			echo 
			"
				<script type='text/javascript'>
					window.location.href='doi_pass.php'
				</script>
			";
		}
	;?>

</body>
</html>