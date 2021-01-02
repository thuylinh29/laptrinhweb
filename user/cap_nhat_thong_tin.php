<?php 
  session_start();
  if (!isset($_SESSION['logged'])) {
    header("location:login.php");
    edit();
  }
;?>
<!DOCTYPE html>
<html>
<head>
	<title>Cập nhật thông tin</title>
</head>
<body>
	<?php
	$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

	$id=$_POST["id"];
	$sdt=$_POST["sdt"];
	$email=$_POST["email"];
	$dia_chi=$_POST["diachi"];

	$sql="UPDATE `tbl_dang_nhap` 
	SET `so_dien_thoai`='".$sdt."',
		`email`='".$email."',
		`dia_chi`='".$dia_chi."'
	 WHERE `tbl_dang_nhap`.`id_dang_nhap`='".$id."'";

	mysqli_query($ket_noi,$sql);
		echo 
			"
				<script type='text/javascript'>
					window.alert('Cập nhật thông tin thành công');
				</script>
			";
		echo 
			"
				<script type='text/javascript'>
					window.location.href='thong_tin_ca_nhan.php?id=$id'
				</script>
			";
	;?>

</body>
</html>