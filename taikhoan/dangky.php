<link rel="stylesheet" href="css/style.css">
<div class="row mb ">
    <div class="boxtrai mr ">
    <div class="row mb ">
        <div class="boxtitle">DANG KY</div>
            <div class="row boxcontent formtk">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        Email<br>
                    <input type="email" name="email" id=""></div>
                    <div class="row mb10">
                                    User<br>
                    <input type="text" name="user" id=""></div>
                    <div class="row mb10">
                                    Password<br>
                    <input type="password" name="pass" id=""></div>
                    <input type="submit" value="Dang ky" name="dangky" id="">
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
