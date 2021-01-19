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
    <title>Nhân viên</title>
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
                    <div class="col-lg-6" >
                        <div class="card" style="width: 1300px;">
                            <div class="card-header" >
                                <strong class="card-title">Nhân viên</strong>
                                <div class="btn-sm">
                                    <a href="nhan-vien-them.php"><button type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-star"></i>&nbsp; Thêm nhân viên</button></a>
                                </div>
                            </div>
                            <div class="table-stats order-table ov-h" >
                                <table class="table " style="text-align: center;">
                                    <thead>
                                        <tr>
                                            <th class="serial" style="width: 50px;">STT</th>
                                            <th class="avatar" style="width: 50px;">Avatar</th>
                                            <th style="width: 110px;">Id nhân viên</th>
                                            <th style="width: 150px;">Họ tên</th>
                                            <th style="width: 200px;">Công việc</th>
                                            <th style="width: 200px;">Facebook</th>
                                            <th style="width: 150px;">Instagram</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        $ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");
                                        $sql="SELECT * from tbl_nhan_vien ";
                                        $thong_tin=mysqli_query($ket_noi,$sql);
                                        $i=0;
                                        while ($row=mysqli_fetch_array($thong_tin)) { $i++;
                                    ;?>
                                        <tr>
                                            <td class="serial"><?php echo $i ;?></td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="../img/team/<?php echo $row["hinh_anh"] ;?>" alt=""></a>
                                                </div>
                                            </td>
                                            <td><?php echo $row["id_nhan_vien"] ;?>  </td>
                                            <td>  <span class="name"><?php echo $row["ho_ten"] ;?></span> </td>
                                            <td> <span class="product"><?php echo $row["cong_viec"] ;?></span> </td>
                                            <td><span><a href="<?php echo $row["facebook"] ;?>"><?php echo $row["facebook"] ;?></a></span></td>
                                            <td><span><a href="<?php echo $row["instagram"] ;?>"><?php echo $row["instagram"] ;?></a></span>
                                            </td>
                                            <td>
                                                <a href="nhan-vien-sua.php?id=<?php echo $row["id_nhan_vien"] ;?>"><img src="images/edit.jpg"></a> <a href="admin-delete.php?id=<?php echo $row["id_nhan_vien"] ;?>" onclick="return confirm('Bạn có muốn xóa nhân viên <?php echo $row["ho_ten"];?> không?')"><img src="images/delete.jpg"></a>
                                            </td>
                                        </tr>
                                        <?php } ;?>
                                    </tbody>
                                </table>
                            
                            </div> <!-- /.table-stats -->
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