<link rel="stylesheet" href="css/style.css">
<div class="row mb ">
                        <div class="boxtitle">Tài khoản</div>
                        <div class="boxcontent form_login">
                            <?php
                            if (isset($_SESSION['user'])){
                                extract($_SESSION['user'])
                            ?>
                            <div class="row mb10">
                                    Xin chao <br>
                                    <?= $user?> </div>
                                    <div class="row mb10">
                                    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                    <li><a href="index.php?act=edit_tk">Cập nhật tài khoản</a></li>
                                    <?php if($role==1){?>
                                    <li><a href="admin/index.php">Đăng nhập admin</a></li>
                                    <?php } ?>
                                    <li><a href="index.php?act=thoat">Logout</a></li>
                                    </div>
                            <?php
                            }else{
                            ?>
                        <form action="index.php?act=dangnhap" method="post">
                                <div class="row mb10">
                                    Tên đăng nhập<br>
                                    <input type="text" name="user" id=""></div>
                                <div class="row mb10"> Mật khẩu<br>
                                    <input type="password" name="pass" id=""></div>
                                <div class="row mb10">
                                    <input type="checkbox" name="" id="">Ghi nhớ tài khoản</div>
                                <div class="row mb10">
                                    <input type="submit" name="dangnhap" value="Đăng nhập"></div>
                            </form>
                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=dangky">Đăng ký</a></li>
                            <?php
                            } ?>
                        </div>
                    </div>
                    <div class="row mb">
                        <div class="boxtitle">Danh mục</div>
                        <div class="boxcontent2 menu_doc">
                            <ul>
                            <?php
                        $i=0;
                        foreach ($dsdm as $dm) {
                            extract($dm); 
                             $linkdm="index.php?act=sanpham&iddm=".$id;
                            echo '<li>
                                    <a href="'.$linkdm.'">'.$name.'</a>
                                </li>';
                            $i+=1;
                        }
                        ?>
                            </ul>
                        </div>
                        <div class="boxfooter search_box">
                            <form action="index.php?act=sanpham" method="post">
                                <input type="text" name="kyw">
                                <input type="submit" name="search" value="Search">
                            </form>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="boxtitle">Top 10 yêu thích</div>
                        <div class="row boxcontent">
                        <?php
                        foreach ($dstop10 as $sp) {
                            extract($sp); 
                            $img= $img_path.$img;
                             $linksp="index.php?act=sanphamchitiet&idsp=".$id;
                            echo ' <div class="row mb10 top10">
                            <img src="'.$img.'" alt="">
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>';
                        }
                        ?>
                        </div>
                    </div>