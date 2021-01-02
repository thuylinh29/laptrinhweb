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
	<title>Thực hiện thêm sản phẩm</title>
</head>
<body>
	<?php
		$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

		$tenSP=$_POST["txtTenSP"];
		$id_loai=$_POST["txtLoaiSP"];
		$mo_ta=$_POST["txtMoTa"];
		$gia_ban=$_POST["txtGiaBan"];
		$so_luong_ton_kho=$_POST["txtSLTonKho"];

		$anh_minh_hoa="./".basename($_FILES["txtAnhMinhHoa"]["name"]);
		$file_anh_tam=$_FILES["txtAnhMinhHoa"]["tmp_name"];
		$result=move_uploaded_file($file_anh_tam, $anh_minh_hoa);
		if (!$result){
			$anh_minh_hoa=null;
		}

		$sql="INSERT INTO `tbl_san_pham`(`id_san_pham`, `id_loai_san_pham`, `ten_san_pham`, `mo_ta`, `hinh_anh`, `gia_ban`, `so_luong_ton_kho`) VALUES (null,'".$id_loai."','".$tenSP."','".$mo_ta."','".$anh_minh_hoa."','".$gia_ban."','".$so_luong_ton_kho."')";

		mysqli_query($ket_noi,$sql);
		echo 
			"
				<script type='text/javascript'>
					window.alert('Thêm sản phẩm thành công');
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