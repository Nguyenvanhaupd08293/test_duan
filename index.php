<?php 
session_start();

include  'C:\xampp\htdocs\duanmau\admin\model\pdo.php';
include "admin/model/sanpham.php";
include "admin/model/danhmuc.php";
include "admin/model/taikhoan.php";
include "view/header.php";
include "global.php";

$spnew=loadall_sanpham_home();
$dsdm=loadAll_danhmuc();
$dstop10=loadall_sanpham_top10();

if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act){
        case'sanpham':
            if(isset($_POST['kyw'])&&($_POST['kyw']>0)){
             $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm=($_GET['iddm']);
                
            }else{
                $iddm=0;
            }
            $dssp=loadAll_sanpham($kyw,$iddm);
            $tendm=loadten_danhmuc($iddm);
            include"view/sanpham.php";
            break;
        case'sanphamchitiet':
            if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                $id=($_GET['idsp']);
                $onesp=loadOne_sanpham($id);
                extract($onesp);
                $spcl=load_sanpham_cungloai($id,$iddm);
                include"view/sanphamct.php";
            }else{
                include"view/home.php";
            }
            break;
            case'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="Dang ky thang cong";
                }
                include"taikhoan/dangky.php";
                break;
                case'dangnhap':
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $checkuser=check_user($user, $pass);
                        if(is_array($checkuser)){
                            $_SESSION['user']=$checkuser;
                            header('Location:index.php');
                        }else{
                        $thongbao="Dang nhap khong thanh cong";   
                        }
                    }
                    include"taikhoan/dangky.php";
                    break;
                case'edit_tk':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $tel=$_POST['tel'];
                        $id=$_POST['id'];
                        update_taikhoan($id,$user,$email,$pass,$address,$tel);
                        $_SESSION['user']=check_user($user, $pass);
                                header('Location:index.php?act=edit_tk');
                                
                
                        }
                        include"taikhoan/edit_tk.php";
                        break;
        case'quenmk':
            if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                $email=$_POST['email'];
                $checkemail=check_email($email);
                if(is_array($checkemail)){
                    $thongbao="Mat khau cua ban la:".$checkemail['pass'];
                }else{
                    $thongbao="Email khong ton tai";
                }
            }
                        include"taikhoan/quenmk.php";
                        break;
        case'gioithieu':
                include"view/gioithieu.php";
                break;
        case'thoat':
            session_unset();
            header('Location:index.php');
                break;
        case'lienhe':       
            include"view/lienhe.php";
            break;
        default:
        include"view/home.php";
        break;
    }
}else{
include "view/home.php";
}
include "view/footer.php";
