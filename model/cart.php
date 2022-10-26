<?php

class Cart extends ThaoTac {

 function show_pro_cart($id) {
  $sql = " SELECT * FROM sanpham WHERE idsp = $id";
  return parent::pdo_query_one($sql, $id);
 }

 function show_user($idnd) {
  $sql = " SELECT * FROM khachhang WHERE idnd = $idnd";
  return parent::pdo_query_one($sql, $idnd);
 }

 function update_item($id, $qty) {
  $qty = (int) $qty;
  if ($qty <= 0) {
   unset($_SESSION['cart_view'][$id]);
  } else {
   $_SESSION['cart_view'][$id]['qty'] = $qty;
   $total = $_SESSION['cart_view'][$id]['qty'] * $_SESSION['cart_view'][$id]['gia'];
   $_SESSION['cart_view'][$id]['total'] = $total;
   echo "<script>window.open('index.php?act=cart&action=shopping-cart','_self', 1);</script>";
  }
 }

 function del_item($id) {
  unset($_SESSION['cart_view'][$id]); // nó chỉ xóa session mang id sản phẩm đó 
  echo "<script>history.back();</script>";
 }

 function add_cart($id) {
  if (isset($_SESSION['cart_view'][$id])) {

   $qty = $_SESSION['cart_view'][$id]['qty'] + 1;
  } else {
   $qty = 1;
  }
  $sql = " SELECT * FROM sanpham WHERE idsp = $id";
  $pro = parent::pdo_query_one($sql, $id);
  $price = $pro['gia'];
  $quantity = $qty;
  $total = $qty * $price;
  $item_array = array(
      'idsp' => $pro['idsp'],
      'tensp' => $pro['tensp'],
      'gia' => $price,
      'hinhanh' => $pro['hinhanh'],
      'qty' => $quantity,
      'total' => $total
  );
  $_SESSION['cart_view'][$id] = $item_array;
  if (isset($_SESSION['cart_view'][$id])) {
   echo "<script>window.open('index.php','_self', 1);</script>";
  }
 }

 function add_cart2($id, $qty) {
  if (isset($_SESSION['cart_view'][$id])) {

   $qty = $_SESSION['cart_view'][$id]['qty'] + $qty;
  }
  $sql = " SELECT * FROM sanpham WHERE idsp = $id";
  $pro = parent::pdo_query_one($sql, $id);
  $price = $pro['gia'];
  $quantity = $qty;
  $total = $qty * $price;
  $item_array = array(
      'idsp' => $pro['idsp'],
      'tensp' => $pro['tensp'],
      'gia' => $price,
      'hinhanh' => $pro['hinhanh'],
      'qty' => $quantity,
      'total' => $total
  );
  $_SESSION['cart_view'][$id] = $item_array;
  if (isset($_SESSION['cart_view'][$id])) {
   echo "<script>window.open('index.php','_self', 1);</script>";
  }
 }

 function insert_order($idnd, $tennd, $diachi, $email, $dienthoai) {
  $dt = $_SESSION['cart_view'];
  foreach ($dt as $d):
   $idsp = $d['idsp'];
   $tensp = $d['tensp'];
   $soluong = $d['qty'];
   $gia = $d['gia'];
   $ngay = date("Y") . ":" . date("m") . ":" . date("d") . ":" . date("H") . ":" . date("i") . ":" . date("s");
   $sql = "INSERT INTO hoadon VALUES(NULL,$idnd, '$tennd', '$diachi', '$dienthoai','$email','$ngay')";
   $data = parent::pdo_execute($sql);
   $sql1 = "SELECT * FROM hoadon WHERE idnd = $idnd";
   $show_hoadon = parent::pdo_query_one($sql1);
   $mahd = $show_hoadon["mahd"];
   $sql2 = "INSERT INTO chitiethoadon VALUES($mahd,'$tensp', $soluong, $gia, NULL,$idsp)";
   $data2 = parent::pdo_execute($sql2);
  endforeach;
  return $data;
  return $data2;
 }

 function show_order() {
  $sql = "SELECT * FROM hoadon";
  $data = parent::pdo_query($sql);
  return $data;
 }

 function show_one_order($mahd) {
  $sql = "SELECT * FROM chitiethoadon WHERE mahd=$mahd";
  $data = parent::pdo_query($sql);
  return $data;
 }

 function update_profile($name, $phone, $email, $address) {
  $_SESSION['user']['fullname'] = $name;
  $_SESSION['user']['phone'] = $phone;
  $_SESSION['user']['email'] = $email;
  $_SESSION['user']['address'] = $address;
 }

 function mahoadon() {
  $sql = "SELECT MAX(id_cart) as id_cart from cart";
  return parent::pdo_query_one($sql);
 }

 function tongtien() {
  $tongtien = 0;
  $cart = $_SESSION['cart_view'];
  foreach ($cart as $item) {
   $tongtien += $item['qty'] * $item['price'];
  }
  return $tongtien;
 }

 function giohang_insert($id_cart, $id_user, $tongtien, $hoten, $email, $phone, $address) {
  $sql = "INSERT INTO cart(id_cart,id_user,total_price,fullname,email,phone,address) VALUES(?,?,?,?,?,?,?)";
  parent::pdo_execute($sql, $id_cart, $id_user, $tongtien, $hoten, $email, $phone, $address);
 }

 function ctgiohang_insert($id_cart, $id_product, $soluong, $dongia, $thanhtoan) {
  $sql = "INSERT INTO detail_cart(id_cart,id_product,quantity,price,thanh_toan) VALUES(?,?,?,?,?)";
  parent::pdo_execute($sql, $id_cart, $id_product, $soluong, $dongia, $thanhtoan);
 }

}

?>