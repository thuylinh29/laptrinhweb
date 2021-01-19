
<?php
	//1. Đọc dữ liệu từ trang login
	$taikhoan=$_POST["taikhoan"];
	$matkhau=$_POST["matkhau"];
	//2.kết nối đến csdl
	$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

	//3.so sánh dữ liệu nhập vào có khớp với csdl không
	$sql="SELECT ten_dang_nhap from tbl_admin 
	where ten_dang_nhap='".$taikhoan."' AND mat_khau='".$matkhau."' ";

	//4.thực thi câu lệnh để xác định dữ liệu có khớp không
	$nguoi_dung=mysqli_query($ket_noi,$sql);
	$so_luong_nguoi_dung= mysqli_num_rows($nguoi_dung);
	$page="";
	

	//5. Điều hướng người dùng:
	if ($so_luong_nguoi_dung==0) {
       $page="page-login.php?error";
  	}
	else {
		session_start();
		$each=mysqli_fetch_array($nguoi_dung);
		$_SESSION["taikhoan"]=$each['ten_dang_nhap'];
		$_SESSION['id']=$each['id_dang_nhap'];
		$_SESSION['logged']=1;
		$page="index.php";
	}
	mysqli_close($ket_noi);
	header("location:$page");
;?>
