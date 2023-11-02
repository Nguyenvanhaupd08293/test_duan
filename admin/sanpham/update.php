<?php

if (!empty(loadOne_sanpham($_GET['id']))) {
    $product = loadOne_sanpham($_GET['id']);
} else {
    header("Location: index.php");
}

if (isset($_POST['ok'])){

    if(isset($_POST['ok'])&&($_POST['ok'])){
        $id=$_GET['id'];
        $iddm=$_POST['iddm'];
        $tensp=$_POST['tensp'];
        $giasp=$_POST['giasp'];
        $mota=$_POST['mota'];
        $hinh=$_FILES['hinh']['name'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
            // echo "Sorry, there was an error uploading your file.";
            }
            update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
        
        }
    
    header("Location: index.php?act=suasp&id=" . $_GET['id']);

}



if(is_array($sp)){
    extract($sp);
}
$hinhpath = "../upload/".$img ;
if(is_file($hinhpath)) {
    $hinh="<img src='".$hinhpath."' height='80'>";
  }else{
    $hinh="no photo";
  }
?>
 <div class="row">
                <div class="row frmtitle">
                    <h1>CAP NHAT HANG HOA</h1>
                </div>
        <div class="row frmcontent">
        <form action="" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option> <?php
                    foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    if($iddm==$id) $s="selected"; 
                    else $s="";
        echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
    }

        ?>
                </select>
                </div>
                <div class="row mb10">
                    Tên sản phẩm <br>
                    <input type="text" name="tensp" value="<?=$product['name']?>">
                </div>
                <div class="row mb10">
                    Giá <br>
                    <input type="text" name="giasp" value="<?=$product['price']?>">
                </div>
                <div class="row mb10 img">
                    Hình <br>
                    <input type="file" name="hinh">
                    <img src="../upload/<?=$product['img']?>" alt="">
                </div>
                <div class="row mb10">
                    Mô tả <br>
                    <textarea name="mota" id="" cols="30" rows="10"><?=$product['mota']?></textarea>
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?=$id?>" >
                    <input type="submit" name="ok" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listsp"> <input type="button" value="DANH SÁCH" id=""> </a>
                </div>
                <?php
                 if (isset($thongbao) &&($thongbao!="")) echo $thongbao;
                ?>
            </form>

        </div>
    </div>