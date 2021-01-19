
<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện thêm nhân viên</title>
</head>
<body>
	<?php
		$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

		$ho_ten=$_POST["hoten"];
		$cong_viec=$_POST["congviec"];
		$facebook=$_POST["facebook"];
		$instagram=$_POST["instagram"];

		$anh_minh_hoa="../img/team/".basename($_FILES["hinhanh"]["name"]);
		$file_anh_tam=$_FILES["hinhanh"]["tmp_name"];
		$result=move_uploaded_file($file_anh_tam, $anh_minh_hoa);
		if (!$result){
			$anh_minh_hoa=null;
		}

		$sql="INSERT INTO `tbl_nhan_vien`(`id_nhan_vien`, `ho_ten`, `hinh_anh`, `cong_viec`, `facebook`, `instagram`) VALUES (null,'".$ho_ten."','".basename($_FILES["hinhanh"]["name"])."','".$cong_viec."','".$facebook."','".$instagram."')";
		//echo $sql; exit();

		mysqli_query($ket_noi,$sql);
		echo 
			"
				<script type='text/javascript'>
					window.alert('Thêm nhân viên thành công');
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