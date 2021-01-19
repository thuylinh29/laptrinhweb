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
    <title>Khách hàng</title>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Khách hàng</strong>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6" style="margin-top: 20px; margin-left: 20px">
                                    <div id="bootstrap-data-table_filter" class="dataTables_filter">
                                        <form action="#" >
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Tìm kiếm"  name="search" type="text" >
                                                <input type="submit" value="search" name="ok" class="input-group-addon">
                                                <div class="input-group-addon" style="margin-left:890px;margin-top: -40px"><a href="khach-hang.php"><i class="fa fa-arrow-left"></i></a></div>
                                            </div>  
                                        </form>  
                                    </div>
                                </div>
                            </div>
                            <?php
                            $ket_noi=mysqli_connect("localhost", "root", "", "cua_hang_banh");
                            if (isset($_REQUEST['ok'])) 
                            {
                                $search="";

                                 if (isset($_GET['search'])) 
                                {
                                    $search = $_GET['search'];    
                                    $strSelect = "SELECT * from tbl_dang_nhap  
                                        where id_dang_nhap = '$search'
                                              or so_dien_thoai='$search'
                                              or ten_dang_nhap like '%$search%'";
                                    //$resultSP = mysqli_query($ket_noi,$strSelect);
                             
                                            // Thực thi câu truy vấn
                                    $sql = mysqli_query($ket_noi,$strSelect);
                             
                                            // Đếm số đong trả về trong sql.
                                    $num = mysqli_num_rows($sql);
                                    

                                ;?>
                                <div class="row">
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered" >
                                        <thead>
                                            <tr>
                                                <th style="width: 30px;">STT</th>
                                                <th style="width: 30px;">Id </th>
                                                <th style="width: 150px">Tên đăng nhập</th>
                                                <th style="width: 150px">Số điện thoại</th>
                                                <th style="width: 100px">Email</th>
                                                <th style="width: 200px;">Địa chỉ</th>
                                                <th style="width: 30px;">Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            if ($num > 0 && $search != "") 
                                            {   $i=0;
                                                while ($row=mysqli_fetch_array($sql))
                                            {
                                                $i++;
                                            ;?>
                                               <tr>
                                                <td><?php echo $i ;?></td>
                                                <td><?php echo $row["id_dang_nhap"] ;?></td>
                                                <td><?php echo $row["ten_dang_nhap"] ;?></td>
                                                <td><?php echo $row["so_dien_thoai"] ;?></td>
                                                <td><?php echo $row["email"] ;?></td>
                                                <td><?php echo $row["dia_chi"] ;?></td>
                                                <td>
                                                    <a href="khach-delete.php?id=<?php echo $row["id_dang_nhap"] ;?>" onclick="return confirm('Bạn có muốn xóa khách hàng <?php echo $row["ten_dang_nhap"];?> không?')"><img src="images/delete.jpg" style="width: 50px; height: 50px;"></a>
                                                </td>
                                            </tr>
                                            <?php  }
                                    } 
                                    else 
                                    {
                                        echo "Không tìm thấy kết quả!";
                                    }
                                } 
                            } else { ;?>
                            <div class="row">
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered" >
                                        <thead>
                                            <tr>
                                                <th style="width: 30px;">STT</th>
                                                <th style="width: 30px;">Id </th>
                                                <th style="width: 150px">Tên đăng nhập</th>
                                                <th style="width: 150px">Số điện thoại</th>
                                                <th style="width: 100px">Email</th>
                                                <th style="width: 200px;">Địa chỉ</th>
                                                <th style="width: 30px;">Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql="SELECT * from tbl_dang_nhap ";
                                            $thong_tin=mysqli_query($ket_noi,$sql);
                                            $i=0;
                                            while ($row=mysqli_fetch_array($thong_tin)) { $i++;
                                        ;?>
                                            <tr>
                                                <td><?php echo $i ;?></td>
                                                <td><?php echo $row["id_dang_nhap"] ;?></td>
                                                <td><?php echo $row["ten_dang_nhap"] ;?></td>
                                                <td><?php echo $row["so_dien_thoai"] ;?></td>
                                                <td><?php echo $row["email"] ;?></td>
                                                <td><?php echo $row["dia_chi"] ;?></td>
                                                <td>
                                                    <a href="khach-delete.php?id=<?php echo $row["id_dang_nhap"] ;?>" onclick="return confirm('Bạn có muốn xóa khách hàng <?php echo $row["ten_dang_nhap"];?> không?')"><img src="images/delete.jpg" style="width: 50px; height: 50px;"></a>
                                                </td>
                                            </tr>
                                        <?php } 
                                    };?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>