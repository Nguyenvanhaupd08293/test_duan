<style>
    .form_login input[type="text"], .form_login input[type="password"], .frmcontent input[type="text"] {
    width: 17%;
    border: 1px #CCC solid;
    padding: 5px 10px;
    border-radius: 5px;
}
.frmctitle h1 {
    margin-left: -1400px;
}
.bkr {
    border: 5px blue solid;
    height: 554px;
    width: 100%;
}
.addsp{
        padding-left: 60px;
        padding-top: 50px;
    }
</style>
<div class="row bkr addsp">
        <div class="row frmctitle ">
            <H1>THÊM MỚI SẢN PHẨM</H1>
        </div>
        <div class="row frmcontent">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    Danh mục <br>
                    <select name="iddm" id="">
                            <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>
                    </select>
                </div>
                <div class="row mb10">
                    Tên sản phẩm <br>
                    <input type="text" name="tensp">
                </div>
                <div class="row mb10">
                    Giá <br>
                    <input type="text" name="giasp">
                </div>
                <div class="row mb10">
                    Hình <br>
                    <input type="file" name="hinh">
                </div>
                <div class="row mb10">
                    Mô tả <br>
                    <textarea name="mota" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="row mb10">
                    <input type="submit" name="themmoi" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listsp"> <input type="button" value="DANH SÁCH" id=""> </a>
                </div>
                <?php
                 if (isset($thongbao) &&($thongbao!="")) echo $thongbao;
                ?>
            </form>

        </div>
    </div>