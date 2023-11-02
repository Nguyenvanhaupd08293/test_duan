<?php
if(is_array($dm)){
    extract($dm);
}
?>
<div class="row">
        <div class="row frmctitle">
            <H1>CAP NHAT LOẠI HÀNG HÓA</H1>
        </div>
        <div class="row frmcontent">
            <form action="index.php?act=updatedm" method="post">
                <div class="row mb10">
                    Mã loại <br>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="row mb10">
                    Tên loại <br>
                    <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name ; ?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ; ?>">
                    <input type="submit" name="capnhat" value="Cap nhat">
                    <input type="reset" name="nhaplai" value="Nhap lai">
                    <a href="index.php?act=listdm"> <input type="button" value="DANH SÁCH" id=""> </a>
                </div>
                <?php
                 if (isset($thongbao) &&($thongbao!="")) echo $thongbao;
                ?>
            </form>

        </div>
    </div>