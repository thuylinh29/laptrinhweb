<?php 
  session_start();
  if (!isset($_SESSION['logged'])) {
    header("location:page-login.php");
    edit();
  }
;?>
<?php
    require_once 'left.php'
;?>
<head>
    <title>Đổi mật khẩu</title>
</head>
<!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <?php 
            require_once 'header.php'
        ;?>
		<div class="content">
            <div class="animated fadeIn">
            	<div class="row">
			        <div class="col-lg-6">
			            <div class="card">
			                <div class="card-header">Đổi mật khẩu</div>
			                    <div class="card-body card-block">
			                        <form action="change-pass-action.php" method="post" class="">
			                        	<?php
										$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");
										$id=$_GET["id"];
										$sql="SELECT * from tbl_nhan_vien where id_nhan_vien='".$id."'";
										$thong_tin=mysqli_query($ket_noi,$sql);
				           	            $row=mysqli_fetch_array($thong_tin);
									;?>
			                            <div class="form-group">
			                                <div class="input-group">
			                                    <div class="input-group-addon"><i class="fa fa-star"></i></div>
			                                        <input type="password" id="old-pass" name="passcu" placeholder="Mật khẩu cũ" class="form-control">
			                                    </div>
			                                </div>
			                                <div class="form-group">
			                                    <div class="input-group">
			                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
			                                        <input type="password" id="new-pass" name="passmoi" placeholder="Mật khẩu mới" class="form-control" >
			                                    </div>
			                                </div>
			                                <div class="form-group">
			                                    <div class="input-group">
			                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
			                                        <input type="password" id="password" name="passmoi2" placeholder="Nhắc lại mật khẩu" class="form-control">
			                                    </div>
			                                </div>
			                                <div class="form-actions form-group">
			                                	<button type="submit" class="btn btn-success btn-sm">Lưu</button>
			                                	<input type="hidden" name="id" value="<?php echo $row["id_nhan_vien"] ;?>"></div>
			                            </form>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>