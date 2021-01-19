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
    <title>Thông tin cá nhân</title>
</head>
<!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <?php 
            require_once 'header.php'
        ;?>
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
			        <div class="card-body">
			        	<div id="pay-invoice">
	                        <div class="card-body">
	                            <div class="card-title">
	                            	<h2>Thông tin cá nhân</h2>
	                            </div>
						        <form action="save-profile.php" method="POST" novalidate="novalidate">
						        	<?php
										$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");
										$id=$_GET["id"];
										$sql="SELECT * from tbl_nhan_vien where id_nhan_vien='".$id."'";
										$thong_tin=mysqli_query($ket_noi,$sql);
				           	            $row=mysqli_fetch_array($thong_tin);
									;?>
									<div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình ảnh</label></div>
                                        <div class="col-12 col-md-9"><input type="file" name="txtAnh" class="form-control-file"></div>
                                    </div>
						        	<div class="form-group">
	                                    <label for="cc-payment" class="control-label mb-1">Họ tên</label>
	                                    <input id="cc-payment" name="hoten" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo$row["ho_ten"] ;?>">
	                                </div>
	                                <div class="form-group has-success">
	                                    <label for="cc-name" class="control-label mb-1">Công việc</label>
	                                    <input id="cc-name" name="congviec" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name" value="<?php echo $row["cong_viec"] ;?>">
	                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
	                                </div>
                                    <div class="form-group">
                                    	<label class=" form-control-label">Facebook</label>
                                    	<div class="input-group">
                                        	<div class="input-group-addon"><a href="<?php echo $row["facebook"] ;?>"><i class="fa fa-facebook"></i></a></div>
                                        	<input class="form-control" name="fb" value="<?php echo $row["facebook"] ;?>">
                                    	</div>                                    		
	                                </div>
	                                <div class="form-group">
	                                	<label class=" form-control-label">Instagram</label>
                                    	<div class="input-group">
                                        	<div class="input-group-addon"><a href="<?php echo $row["instagram"] ;?>"><i class="fa fa-instagram"></i></a></div>
                                        	<input class="form-control" name="ig" value="<?php echo $row["instagram"] ;?>">
                                    	</div>
	                                </div>
	                                
	                                <div>
	                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
		                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
		                                    <span id="payment-button-amount">Lưu thông tin</span>
		                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
	                                    </button>
	                                    <input type="hidden" name="id" value="<?php echo $row["id_nhan_vien"] ;?>">
	                                </div>
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