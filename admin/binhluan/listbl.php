<div class="row">
    <div class="row frmtitle">
<h1>DANH SACH BINH LUAN</h1></div>
<!-- <div class="row content">
    <div class="row mb10 frmdsloai"> -->
    <div class="row content">
    <div class="row mb10 frmdsloai">
        <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>NOI DUNG</th>
                <th>IDUSER</th>
                <th>IDPRO</th>
                <th>DATE_TIME</th>
                <th></th>
            </tr>
            <?php
    foreach ($listbl as $bl){
        extract($bl);
        $xoabl="index.php?act=xoabl&id=".$id;
        echo '<tr>
        <td> <input type="checkbox" name="" id=""> </td>
        <td>'.$id.'</td>
        <td>'.$noidung.'</td>
        <td>'.$iduser.'</td>
        <td>'.$idpro.'</td>
        <td>'.$ngaybinhluan.'</td>
        <td><a href="'.$xoabl.'"><input type="button" value="Xoa"></a></td>
    </tr>';
     }
            ?>
        </table>
    </div>
    <div class="row mb10">
        <input type="button" value="Chon tat ca">
        <input type="button" value="Bo chon tat ca">
        <input type="button" value="Xoa muc da chon">
    </div>
</div>
</div>