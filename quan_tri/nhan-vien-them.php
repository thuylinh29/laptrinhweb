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
    <title>Thêm nhân viên</title>
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
                    <div class="col-lg-6">
                        <div class="card" style="width: 950px;">
                            <div class="card-header">
                                <strong>Thêm nhân viên</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form action="nhan-vien-them-thuc-hien.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Họ tên</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="hoten" placeholder="Họ tên nhân viên" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Facebook</label></div>
                                        <div class="col-12 col-md-9"><input type="url"  name="facebook" placeholder="Link Facebook" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Instagram</label></div>
                                        <div class="col-12 col-md-9"><input type="url"  name="instagram" placeholder="Link Instagram" class="form-control"></div>
                                    </div>                                   
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Công việc</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="congviec"  class="form-control">
                                                <option value="0">--Chọn--</option>
                                                <option value="Nhân viên bồi bàn">Nhân viên bồi bàn</option>
                                                <option value="Nhân viên thu ngân">Nhân viên thu ngân</option>
                                                <option value="Nhân viên trực page">Nhân viên trực page</option>
                                            </select>
                                        </div>
                                    </div>                                                   
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh</label></div>
                                        <div class="col-12 col-md-9"><input type="file"  name="hinhanh" class="form-control-file"></div>
                                    </div>
                                    <div style="margin-left: 450px; margin-bottom: 30px;">
                                        <button type="submit" class="btn btn-outline-success btn-sm" style="width: 100px; font-size: 18px;"><i class="fa fa-star"></i>&nbsp; Lưu</button>
                                    </div>
                                </form>
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