<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    .adddm{
        padding-left: 100px;
        padding-top: 50px;
    }
    .form_login input[type="text"], .form_login input[type="password"], .frmcontent input[type="text"] {
    width: 17%;
    border: 1px #CCC solid;
    padding: 5px 10px;
    border-radius: 5px;
}
.frmctitle h1 {
    margin-left: -1300px;
}.bkr {
    border: 5px blue solid;
    height: 554px;
    width: 100%;
}
</style>
<div class="row adddm bkr">
        <div class="row frmctitle">
            <H1>THÊM MỚI LOẠI DANH MỤC</H1>
        </div>
        <div class="row frmcontent">
            <form action="index.php?act=adddm" method="post">
                <div class="row mb10">
                    Mã loại <br>
                    <input type="text" name="maloai">
                </div>
                <div class="row mb10">
                    Tên loại <br>
                    <input type="text" name="tenloai">
                </div>
                <div class="row mb10">
                    <input type="submit" name="themmoi" value="Thêm mới">
                    <input type="reset" name="hhI">
                    <a href="index.php?act=listdm"> <input type="button" value="DANH SÁCH" id=""> </a>
                </div>
                <?php
                 if (isset($thongbao) &&($thongbao!="")) echo $thongbao;
                ?>
            </form>

        </div>
    </div>  
</body>
</html>
