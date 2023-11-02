<div class="row">
    <div class="row frmtitle">
<h1>DANH SACH TAI KHOAN</h1></div>
<div class="row content">
    <div class="row mb10 frmdsloai">
        <table>
            <tr>
                <th></th>
                <th>MA TK</th>
                <th>TEN DANG NHAP</th>
                <th>MAT KHAU</th>
                <th>EMAIL</th>
                <th>DIA CHI</th>
                <th>SDT</th>
                <th></th>
            </tr>
            <?php
    foreach ($listtaikhoan as $taikhoan){
        extract($taikhoan);
        $xoatk="index.php?act=xoatk&id=".$id;
        echo '<tr>
        <td> <input type="checkbox" name="" id=""> </td>
        <td>'.$id.'</td>
        <td>'.$user.'</td>
        <td>'.$pass.'</td>
        <td>'.$email.'</td>
        <td>'.$address.'</td>
        <td>'.$tel.'</td>
        <td><a href="'.$xoatk.'"><input type="button" value="Xoa"></a></td>
    </tr>';
     }
            ?>
        </table>
    </div>
    <div class="row mb10">
        <input type="button" value="Chon tat ca">
        <input type="button" value="Bo chon tat ca">
        <input type="button" value="Xoa muc da chon">
        <a href="index.php?act=dangky"><input type="button" value="Nhap them" id=""></a>
    </div>
</div>
    </div>
</div>