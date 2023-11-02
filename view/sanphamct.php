     <div class="row mb ">
        <div class="boxtrai mr">
            <div class="row mb ">
                <?php
                extract($onesp);
                ?>
                <div class="boxtitle"><?=$name?></div>
                <div class="row boxcontent">
                    <?php
                    extract($onesp);
                    $img=$img_path.$img;
                    echo '<div class="row spct"> <img src= "'.$img.'"></div>';
                    echo $mota;
                    ?>
                        </div>
             </div> 
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
             <script>
                        $(document).ready(function(){
                        $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                    });
            </script>
                <div class="row" id="binhluan">
                </div>
             <div class="row mb ">
                <div class="boxtitle">SAN PHAM CUNG LOAI</div>
                <div class="row boxcontent">
                    <?php
                    foreach ($spcl as $spcl) {
                        extract($spcl);
                        $linksp="index.php?act=sanphamchitiet&idsp=".$id;
                        echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                        # code...
                    }

                    ?>
                </div>
             </div>      
        </div>
        <div class="boxphai ">
            <?php
                include "boxright.php";
            ?>
        </div>
</div>