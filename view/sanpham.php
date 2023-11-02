     
<div class="row mb ">
        <div class="boxtrai mr">
            <div class="row mb ">
                <div class="boxtitle">SAN PHAM => <strong><?=$tendm?></strong> </div>
                <div class="row boxcontent">
                    <?php
                     $i=0;
                     foreach ($dssp as $sp) {
                         extract($sp);
                         $hinh= $img_path.$img;
                         $linksp="index.php?act=sanphamchitiet&idsp=".$id;
                         if(($i==2)||($i==5)||($i==8)||($i=11)){ 
                             $mr="";
                         }else{
                             $mr="mr";
                         }
                         echo ' <div class="boxsp '.$mr.'">
                         <div class="row img"><img src="'.$hinh.'" alt=""></div>
                         <p>$'.$price.'</p>
                         <a href="'.$linksp.'">'.$name.'</a>
                     </div>';
                         $i+=1;
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