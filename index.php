<?php

ob_start();
session_start();
?>
<?php

include 'model/connect.php';
include "./model/product.php";
include "./model/showdm.php";
include "./model/show_user.php";
include "./model/tintuc.php";
include "./model/banner.php";
include "./model/khachhang.php";
include "./model/lienhe.php";
include "model/search.php";
include "global.php";
include "model/cart.php";
$products = new Products;
$tintuc = new Tintuc;
$banner = new Banner;
$dskhuyenmai = $products->getProductPromotion();
$dsmoi = $products->getProductNews();
$dsphukien = $products->getProductpk();
$dstainghe = $products->getProducthp();
$dsnoibat = $products->getProductnb();
$dsbanner = $banner->getList();
include "view/layout/header.php";
$search = new Timkiem;

if (isset($_GET['act'])) {
 switch ($_GET['act']) {
  case 'about':
   include 'view/layout/about.php';
   break;
  case 'contact':
   if (isset($_GET['lh']) && ($_GET['lh']) == 1) {
    $error = false;
    $error_tennd = "";
    $error_email = "";
    $error_noidung = "";
    $tennd = $_POST['tennd'];
    $email = $_POST['email'];
    $noidung = $_POST['noidung'];
    $kt = (preg_match("/^[a-zA-Z ]*$/", $tennd));
    if ($kt == 0) {
     $error_tennd = " * Tên phải là ký tự chữ";
     $error = true;
    }
    if ($tennd == "") {
     $error_tennd = " * Họ tên không được để trống";
     $error = true;
    }
    if ($email == "") {
     $error_email = " * Email không được trống";
     $error = true;
    }
    if ($noidung == "") {
     $error_noidung = " * Nội dung không được trống";
     $error = true;
    }
    if ($error == false) {
     $lienhe = new Lienhe();
     $lienhe->lienhe_insert($tennd, $email, $noidung);
    }
   }
   include 'view/layout/contact.php';
   break;
  //  case 'checkout':
  //   $Cart=new Cart();
  //   if(isset($_POST['place_oder'])&&isset($_POST['place_oder'])){
  //       $idnd=$_GET["idnd"];
  //       if($idnd!=NULL){
  //               $tennd=$_POST['tennd'];
  //               $diachi=$_POST['diachi'];
  //               $email=$_POST['email'];
  //               $dienthoai=$_POST['dienthoai'];
  //               $insert_order=$Cart->insert_order($idnd,$tennd,$diachi,$email,$dienthoai);
  //               if($insert_order == True){ 
  //                       echo "<script>alert('Bạn đã đặt hàng thành công'); window.open('index.php','_self', 1); </script>";
  //                       unset($_SESSION['cart_view']);
  //               }
  //       } else {
  //               echo "<script>alert('Vui lòng đăng nhập'); window.open('index.php?act=login','_self', 1); </script>";
  //       }
  //   }
  //   include 'view/layout/checkout.php';
  //   break;
  case 'blog':

   if (isset($_GET['idtt'])) {
    $idtt = $_GET['idtt'];
   } else {
    $idtt = 0;
   }
   if (isset($_GET['page']) && ($_GET['page'] > 0)) {
    $page = $_GET['page'];
   } else {
    $page = 1;
   }
   $tt = new Tintuc();
   $count = $tt->getNews();
   $tongso = count($count);
   $dsphantrang = $tt->phantrang($page, $tongso);
   $dstintuc = $tintuc->getNewsPage($page);
   $dstintucmoi = $tintuc->showttmoi();
   include 'view/layout/blog.php';
   break;
  case 'blog-details':
   $idtt = $_GET['idtt'];
   $tintuc = new Tintuc;
   $dstt = $tintuc->getNewstt($idtt);
   if (isset($_GET['idtt']) && ($_GET['idtt'] > 0)) {
    $idtt = $_GET['idtt'];
    $_SESSION['ttgd'][] = $idtt;
   }
   include 'view/layout/blog-details.php';
   break;
  case"login":
   if (isset($_GET['login']) && $_GET['login'] == 1) {
    $error = false;
    $error_username = "";
    $error_password = "";
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "") {
     $error_username = " * Tên  không được trống";
     $error = true;
    }
    if ($password == "") {
     $error_password = " * Password không được trống";
     $error = true;
    }
    if ($error == false) {
     $login = new Khachhang();
     // $email=$_POST['email'];
     $password = $_POST['password'];
     $username = $_POST['username'];
     $infouser = $login->checklogin($password, $username);
     $checkuser = count($infouser);
     if ($infouser['idnd'] > 0) {
      $_SESSION['iduser'] = $infouser['idnd'];
      $_SESSION['password'] = $infouser['password'];
      $_SESSION['username'] = $infouser['username'];
      $_SESSION['phanquyen'] = $infouser['phanquyen'];
      $_SESSION['email'] = $infouser['email'];
      $_SESSION['tennd'] = $infouser['tennd'];

      header('Location:index.php');
     } else {
      $msg_error = "Tài khoản hoặc mật khẩu sai";
     }
    }
   }
   include 'view/layout/login.php';
   break;
  case "register":
   if (isset($_GET['register']) && ($_GET['register'] == 1)) {
    $error = false;
    $error_tennd = "";
    $error_username = "";
    $error_email = "";
    $error_dienthoai = "";
    $error_diachi = "";
    $error_password = "";
    $tennd = "";
    $username = "";
    $email = "";
    $dienthoai = "";
    $diachi = "";
    $password = "";
    $tennd = $_POST["tennd"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $dienthoai = $_POST["dienthoai"];
    $diachi = $_POST["diachi"];
    $password = $_POST["password"];
    if ($tennd == "") {
     $error_tennd = " * Họ và tên không được trống";
     $error = true;
    }
    if ($username == "") {
     $error_username = " * Tên đăng nhập không được trống";
     $error = true;
    }
    if ($email == "") {
     $error_email = " * Email không được trống";
     $error = true;
    }
    if ($dienthoai == "") {
     $error_dienthoai = " * Điện thoại không được trống";
     $error = true;
    }
    if ($diachi == "") {
     $error_diachi = " * Địa chỉ không được trống";
     $error = true;
    }
    if ($password == "") {
     $error_password = " * Password không được trống";
     $error = true;
    }
    if ($error == false) {
     $tennd = $_POST['tennd'];
     $username = $_POST['username'];
     $email = $_POST['email'];
     $dienthoai = $_POST['dienthoai'];
     $diachi = $_POST['diachi'];
     $password = $_POST['password'];
     $register = new Khachhang();
     $insert = $register->user_res_insert($tennd, $username, $email, $dienthoai, $diachi, $password);
     header('Location:index.php?act=login');
    }
   }

   include 'view/layout/register.php';
   break;
  case 'thongtinuser':
   $id = $_SESSION['iduser'];
   $khachhang = new Khachhang;
   $dskh = $khachhang->getKh($id);
   include 'view/layout/thongtinuser.php';
   break;
  case 'logout':
//   unset($_SESSION['iduser']);
//   unset($_SESSION['emailuser']);
   session_destroy();
   header('Location:index.php?act=login');
  case 'contact':
   include 'contact.php';
   break;
  case 'blog':
   include 'view/layout/blog.php';
   break;
  case 'blog-details':
   include 'view/layout/blog-details.php';
   break;
  case 'shop':
   include 'view/layout/shop.php';
   break;
  case 'shopping-cart':
   include 'view/layout/shopping-cart.php';
   break;
  case 'single-product':
   include 'view/layout/single-product.php';
   break;
  case 'wishlist':
   include 'view/layout/wishlist.php';
   break;
  case 'checkout':
   $Cart = new Cart();
   if (isset($_POST['place_oder']) && isset($_POST['place_oder'])) {
    $idnd = $_GET["idnd"];
    if ($idnd != NULL) {
     $tennd = $_POST['tennd'];
     $diachi = $_POST['diachi'];
     $email = $_POST['email'];
     $dienthoai = $_POST['dienthoai'];
     $insert_order = $Cart->insert_order($idnd, $tennd, $diachi, $email, $dienthoai);
     if ($insert_order == True) {
      echo "<script>alert('Bạn đã đặt hàng thành công'); window.open('index.php','_self', 1); </script>";
      unset($_SESSION['cart_view']);
     }
    } else {
     echo "<script>window.open('index.php?act=login','_self', 1); </script>";
    }
   }
   include 'view/layout/checkout.php';
   break;
  case 'showdm':
   include 'view/layout/showdm.php';
   break;
  case "search":
   if (isset($_POST['search']) && $_POST['search'] != null) {
    $timkiem = $_POST['timkiem'];
    $data_timkiem = $search->timkiemsanpham($timkiem);
   }
   include "view/layout/search.php";
   break;
  case "cart":

   $Cart = new Cart();

   if (isset($_GET['action']) && $_GET['action'] != NULL) {

    $action = $_GET['action'];
    switch ($action) {
     case"addcart":
      $id = $_GET['idsp'];
      $Cart->add_cart($id);
      break;
     case"addcart2":
      if (isset($_POST['addcart']) && isset($_POST['addcart'])) {
       $id = $_GET['idsp'];
       $qty = $_POST['qty'];
       $Cart->add_cart2($id, $qty);
      }
      break;
     case"shopping-cart":
      include "view/layout/shopping-cart.php";
      break;
     case"deletecart":
      $id = $_GET['idsp'];
      $Cart->del_item($id);
      break;
     case"update_item":
      $id = $_GET['idsp'];
      $qty = $_POST['qty'];
      $Cart->update_item($id, $qty);
      break;
    }
   }

   break;
  default:
   include 'view/layout/home.php';
   break;
 }
} else {
 include "view/layout/home.php";
}
include "view/layout/footer.php";
?>