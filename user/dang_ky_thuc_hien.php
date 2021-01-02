<?php
		//1.kết nối đến csdl
	$ket_noi=mysqli_connect("localhost","id15682767_macrina","Thuylinh2902.","id15682767_macrinabakery");

	if (isset($_POST['taikhoan']) && isset($_POST['matkhau']) && isset($_POST['email']) && isset($_POST['sodienthoai'])&& isset($_POST['diachi'])) 
	   {
		   $username=$_POST['taikhoan'];
		   $password=$_POST['matkhau'];
		   $email=$_POST['email'];
		   $phonenumber=$_POST['sodienthoai'];
	      $diachi=$_POST['diachi'];
		   if ($username == "" || $password == "" || $email == "" || $phonenumber == "" || $diachi == "" ) {
	              echo '<span>Bạn phải nhập đầy đủ thông tin </span>';
	               header("Location:dang_ky.php");
	         }else{
	               $insert="INSERT into tbl_dang_nhap(ten_dang_nhap,mat_khau,so_dien_thoai,email,dia_chi) values('$username','$password','$phonenumber','$email','$diachi')";
	                mysqli_query($ket_noi,$insert);
	                echo 
	                "
						<script type='text/javascript'>
							window.alert('Đăng ký thành công! Vui lòng đăng nhập');
						</script>
					";
					echo 
					"
						<script type='text/javascript'>
							window.location.href='login.php'
						</script>
					";
	         }
	   }
	   else{
	   	mysqli_close($ket_noi);
	   	header("location:dang_ky.php");
	   }
	?>
	<?php 
			//Dong ket noi
			mysqli_close($ket_noi);
	?>
		
		
?>
		

		