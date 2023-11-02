<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HẬU SPORT</title>
    <script src="../app.js"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
       
<div class="row mb ">
                <div class="boxtrai mr">
                    <div class="row">
                        <div class="banner mb">
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="https://iweb.tatthanh.com.vn/pic/12/banner/gi%C3%A0y%20%C4%91%C3%A1%20b%C3%B3ng%20VH5.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="https://iweb.tatthanh.com.vn/pic/12/banner/Qu%E1%BA%A7n%20%C3%A1o%20tr%E1%BA%BB%20em%20th%C6%B0%C6%A1ng%20hi%E1%BB%87u.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="https://iweb.tatthanh.com.vn/pic/12/banner/z4555247203437_1ba8a034e11ae405effe883f87129ab3.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
                        </div>
                    </div>
                    <div class="row ll">
                        <?php
                        $i=0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $hinh= $img_path.$img;
                            $linksp="index.php?act=sanphamchitiet&idsp=".$id;
                            if(($i==2)||($i==5)||($i==8)){ 
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
                <div class="boxphai ">
            <?php
                include "boxright.php";
            ?>
        </div>
            </div>
