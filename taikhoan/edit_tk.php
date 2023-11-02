<link rel="stylesheet" href="css/style.css">
<div class="row mb ">
    <div class="boxtrai mr ">
    <div class="row mb ">
        <div class="boxtitle">CAP NHAT TK</div>
            <div class="row boxcontent formtk">
                <?php
                if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                    # code...
                }
                ?>
                <form action="index.php?act=edit_tk" method="post">
                    <div class="row mb10">
                        Email <br>
                    <input type="email" name="email" value="<?=$email ?>"></div>
                    <div class="row mb10">
                                    User<br>
                    <input type="text" name="user" value="<?=$user ?>"></div>
                    <div class="row mb10">
                                    Password<br>
                    <input type="password" name="pass" value="<?=$pass ?>"></div>
                    <div class="row mb10">
                                    Địa chỉ<br>
                    <input type="text" name="address" value="<?=$address ?>"></div>
                    <div class="row mb10">
                                    ĐIện thoại<br>
                    <input type="text" name="tel" value="<?=$tel?>"></div>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" value="CAp nhat" name="capnhat" id="">
                    <input type="reset" name="email" value="Nhap lai">
                </form>
                <h2 class="thongbao">
                <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                ?>
                </h2>
            </div>
    </div>
    </div>
     <div class="boxphai ">
        <?php
             include "view/boxright.php";
         ?>
    </div>
</div>
