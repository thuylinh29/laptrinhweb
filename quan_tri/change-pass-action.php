<?php 
  session_start();
  if (!isset($_SESSION['logged'])) {
    header("location:page-login.php");
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

		$id=$_POST["id"];
		$mat_khau_cu=$_POST["passcu"];
		$mat_khau_moi=$_POST["passmoi"];
		$mat_khau_moi2=$_POST["passmoi2"];
		

		if ($mat_khau_moi==$mat_khau_moi2 && $mat_khau_cu!=$mat_khau_moi) {
			$sql="UPDATE `tbl_admin` 
			SET `mat_khau`='".$mat_khau_moi."'
			WHERE `tbl_admin`.`id_admin`='".$id."'";
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
					window.location.href='index.php'
				</script>
			";
		} else {
			echo 
			"
				<script type='text/javascript'>
					window.alert('Mật khẩu không đúng hoặc bị trùng!');
				</script>
			";

			echo 
			"
				<script type='text/javascript'>
					window.location.href='admin-change-pass.php'
				</script>
			";
		}
	;?>

</body>
</html>