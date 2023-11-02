<div class="row">
                <div class="row frmtitle">
                    <h1>Danh sach hang hoa</h1>
                </div>
                <div class="row frmcontent">
                        <div class="row mb10 frmdsloai">
                            <table>
                                <tr>
                                    <th>MA DANH MUC</th>
                                    <th>TEN DANH MUC</th>
                                    <th>SO LUONG</th>
                                    <th>GIA CAO NHAT</th>
                                    <th>GIA THAP NHAT</th>
                                    <th>GIA TRUNG BINH</th>
                                </tr>
                                <?php
                                    foreach ($listthongke as $key => $thongke) {
                                        extract($thongke);
                                        echo '<tr>
                                        <td> '.$madm.' </td>
                                        <td>'.$tendm.'</td>
                                        <td>'.$countsp.'</td>
                                        <td>'.$maxprice.'</td>
                                        <td>'.$minprice.'</td>
                                        <td>'.$avgprice.'</td>
                                    </tr>';
                                        # code...
                                    }
                                ?>
                            </table>
                        </div>
                        <div class="row mb10">
                            <a href="index.php?act=bieudo"><input type="button" value="Xem bieu do"></a>
                        </div>
                </div>
            </div>