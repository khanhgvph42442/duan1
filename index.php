<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";


$dsdm = loadall_danhmuc();
$spnew = loadall_sanpham_home(8);
$dstop = loadall_sanpham_top10(4);
    include "view/header.php";    
    include "global.php";
    if((isset($_GET['act'])) && ($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            // SẢN PHẨM
            case 'sanpham':
                if(isset($_POST['timkiem'])!="" ){
                    $kyw = $_POST['kyw']; 
                    $tieude = "Kết quả tìm kiếm với từ khóa: ".$kyw;
                } else{
                    $kyw = "";
                    $tieude="";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    $iddm = $_GET['iddm'];
                    $tieude= get_name_dm($iddm);
                } else{
                    $iddm = 0;
                    $tieude="";
                }
                $dssp = loadall_sanpham($kyw, $iddm,12);
                $tendm = load_ten_dm($iddm);
                include "view/sanpham.php";
                break;
            // CT SẢN PHẨM
            case 'ctsanpham':
                if(isset($_GET['idsp']) && ($_GET['idsp']>0)){
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sanphamcl = load_sanpham_cungloai($id,$iddm);
                    include "view/ctsanpham.php";
                } else{
                    include "view/home.php";
                }
                break;
            // TIN TỨC
            case 'tintuc':
                include "view/tintuc.php";
                break;
            // CHI TIẾT TIN TUC
            case 'cttintuc':
                include "view/chitiettintuc.php";
                break;
            // LIEN HỆ
            case 'lienhe':
                include "view/lienhe.php";
                break;
            // GIỎ HÀNG
            case 'giohang':
                include "view/giohang.php";
                break;
            // THANH TOÁN
            case 'thanhtoan':
                include "view/thanhtoan.php";
                break;
            // Đăng kí
            case 'dangky':
                include "view/dangki/dangki.php";
                break;    
            
            case 'dangnhap':
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $user = $_POST['username'];
                    $pass = $_POST['password'];
                    $loginMess = dangnhap($user,$pass);
                    if(is_array($loginMess)){
                        $_SESSION['username'] = $loginMess;
                        header('location: index.php');
                    }else{
                       $thongbao = 'Tài khoản không tồn tại';
                    }
                    }
                include "view/dangki/dangki.php";
                break;
            default:
            include "view/home.php";
                break;
        }
    }else {
        include "view/home.php";
    }
    include "view/footer.php";
?>

