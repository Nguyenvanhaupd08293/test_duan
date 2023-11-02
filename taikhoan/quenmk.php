<link rel="stylesheet" href="css/style.css">
<div class="row mb ">
    <div class="boxtrai mr ">
    <div class="row mb ">
        <div class="boxtitle">QUEN MAT KHAU</div>
            <div class="row boxcontent formtk">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row mb10">
                        Email<br>
                    <input type="email" name="email" id=""></div>
                    <input type="submit" name="guiemail" value="Gửi">
                    <input type="reset" value="Nhap lai">
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
