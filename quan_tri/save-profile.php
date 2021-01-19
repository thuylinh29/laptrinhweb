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
	<title>Cập nhật thông tin</title>
</head>
<body>
	<?php
	$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

	$id=$_POST["id"];
	$ten=$_POST["hoten"];
	$cv=$_POST["congviec"];
	$fb=$_POST["fb"];
	$ig=$_POST["ig"];

	$anh_minh_hoa="../img/team/".basename($_FILES["txtAnh"]["name"]);
	$file_anh_tam=$_FILES["txtAnh"]["tmp_name"];
	$result=move_uploaded_file($file_anh_tam, $anh_minh_hoa);
	if (!$result){
		$anh_minh_hoa=null;
	}

	if ($anh_minh_hoa==null){
		$sql="UPDATE `tbl_nhan_vien` 
		SET `ho_ten`='".$ten."',
			`cong_viec`='".$cv."',
			`facebook`='".$fb."',
			`instagram`='".$ig."'
		 WHERE `tbl_nhan_vien`.`id_nhan_vien`='".$id."'";
	} else {
		$sql="UPDATE `tbl_nhan_vien` 
		SET `ho_ten`='".$ten."',
			`cong_viec`='".$cv."',
			`facebook`='".$fb."',
			`instagram`='".$ig."',
			`hinh_anh`='".basename($_FILES["txtAnh"]["name"])."'
		 WHERE `tbl_nhan_vien`.`id_nhan_vien`='".$id."'";
	}

	//echo $sql; exit();

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
					window.location.href='admin-profile.php?id=$id';
				</script>
			";
	;?>

</body>
</html>