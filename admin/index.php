<?php
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/binhluan.php";
include "model/thongke.php";
include "header.php";
//controller
if (isset ($_GET['act'])){
    $act=$_GET['act'];
        switch($act){
            case 'adddm':
                //ktra nguoi dug
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao ="themthanhcong";
                }   
                include "danhmuc/add.php";
            break;
            case 'listdm':
                $listdanhmuc=loadAll_danhmuc();
                include "danhmuc/list.php";
            break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sql= "delete from danhmuc where id=".$_GET['id'];
                   pdo_execute($sql);
                }
                $listdanhmuc=loadAll_danhmuc();
                include "danhmuc/list.php";
            break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadOne_danhmuc($_GET['id']);
                }    
                include "danhmuc/update.php";
            break;
            case 'updatedm':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    upDate_danhmuc($id,$tenloai);
                    $thongbao ="capnhatthanhcong";
                    }
                    $listdanhmuc=loadAll_danhmuc();
                include "danhmuc/list.php";
            break;
            case 'addsp':
                //ktra nguoi dug
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
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
                    echo "Sorry.";
                  }
                  insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                $thongbao ="themthanhcong";
                }
                $listdanhmuc=loadAll_danhmuc();
                include "sanpham/add.php";   
            break;
            case 'listsp':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc=loadAll_danhmuc();
                $listsanpham=loadAll_sanpham($kyw,$iddm);
                include "sanpham/list.php";
            break;
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham=loadAll_sanpham();
                include "sanpham/list.php";
            break;
            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sp=loadOne_sanpham($_GET['id']);
                }    
                $listdanhmuc=loadAll_danhmuc();
                include "sanpham/update.php";
            break;
            case 'dskh':
                $listtaikhoan=loadAll_taikhoan();
                include "../taikhoan/listtk.php";
            break;
            case 'add_bl':
                if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $noidung=$_POST['noidung'];
                    $idpro=$_POST['idpro'];
                    $iduser=$_SESSION['user']['id'];
                    $ngaybinhluan=date('h:i:sa d/m/Y');
                    insert_binhluan ($noidung, $iduser, $idpro, $ngaybinhluan); 
                    }
                include "../binhluan/binhluanform.php";
            break;
            case 'dsbl':
                $listbl=loadall_binhluan(0);
                include "binhluan/listbl.php";
            break;
            case 'xoabl':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_bl($_GET['id']);
                }
                $listbl=loadall_binhluan(0);
                include "binhluan/listbl.php";
            break;
            case 'xoatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_tk($_GET['id']);
                }
                $listtaikhoan=loadAll_taikhoan();
                include "../taikhoan/listtk.php";
            break;
            case 'updatesp':
                if(isset($_POST['ok'])&&($_POST['ok'])){
                    $id=$_POST['id'];
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
                    $thongbao ="capnhatthanhcong";
                    }
                    $listdanhmuc=loadAll_danhmuc();
                    $listsanpham=loadAll_sanpham();
                include "sanpham/list.php";
            break;
            case 'thongke':
                $listthongke=loadall_thongke();
                include "thongke/list.php";
            break;
            case 'bieudo':
                $listthongke=loadall_thongke();
                include "thongke/bieudo.php";
            break;
            default:
            include "home.php";
            break;
        }
}else{
    include "home.php";
}
include "footer.php";
?>