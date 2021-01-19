<!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo-cake.png" alt="Logo" style="height: 40px; margin-left: 50px;"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <?php 
                                            if (isset($_SESSION['logged'])) { 
                                            $ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

                                            //2.lấy dl mong muốn
                                            $sql="SELECT * from tbl_admin as tbl1 join tbl_nhan_vien as tbl2 on tbl1.id_nhan_vien=tbl2.id_nhan_vien where ten_dang_nhap='".$_SESSION["taikhoan"]."'";
                                            $thong_tin=mysqli_query($ket_noi,$sql);
                                            $row=mysqli_fetch_array($thong_tin);

                    ?>
                    <div style="font-family: Open Sans, sans-serif; margin-top: 15px;">
                        <?php echo $row["ho_ten"] ;?>
                    </div>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" style="height: 50px;" src="../img/team/<?php echo $row["hinh_anh"] ;?>" alt="User Avatar">
                        </a>
                    
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="admin-profile.php?id=<?php echo $row["id_nhan_vien"] ;?>"><i class="fa fa- user"></i>Thông tin cá nhân</a>
                            <a class="nav-link" href="admin-change-pass.php?id=<?php echo $row["id_nhan_vien"] ;?>"><i class="fa fa-power -off"></i>Đổi mật khẩu</a>
                            <a class="nav-link" href="page-logout.php"><i class="fa fa-power -off"></i>Đăng xuất</a>
                        </div>
                    </div>
                    <?php } ;?>
                </div>
            </div>
        </header>
        <!-- /#header -->