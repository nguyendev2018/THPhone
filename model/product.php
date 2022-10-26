<?php

class Products extends ThaoTac {

 function getProductPromotion() {
  $sql = "SELECT * FROM sanpham Where trangthai=1";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 function getProductNews() {
  $sql = "SELECT * FROM sanpham Where trangthai=2";

  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 function getProducthp() {
  $sql = "SELECT * FROM sanpham Where trangthai=5";

  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 function getProductpk() {
  $sql = "SELECT * FROM sanpham Where trangthai=6";

  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 function getProductnb() {
  $sql = "SELECT * FROM sanpham Where trangthai=7";

  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 function showDm() {
  $sql = "SELECT * FROM danhmuc where dequi!=0";

  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 function theLoai() {
  $sql = "SELECT * FROM danhmuc where dequi=0";

  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 function showProduct() {
  $sql = "SELECT * FROM sanpham INNER JOIN danhmuc ON sanpham.madm=danhmuc.madm ";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 function show_detail_products($idsp) {
  $sql = "SELECT * FROM sanpham WHERE idsp=$idsp";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 function showkh() {
  $sql = "SELECT * FROM khachhang WHERE phanquyen = 1";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 function show1kh($id) {
  $sql = "SELECT * FROM khachhang WHERE idnd = ?";
  return parent::pdo_query_one($sql, $id);
 }

 function deletekh($id) {
  $sql = "DELETE FROM khachhang WHERE idnd = " . $id . ";";
  return parent::pdo_execute($sql, $id);
 }

 function change_pw($pw_new, $id) {
  $sql = "UPDATE khachhang SET password = ? WHERE idnd =?";
  $data = parent::pdo_execute($sql, $pw_new, $id);
  return $data;
 }

 function show_one_bl($idsp) {
  $sql = "SELECT * FROM binhluan";
  $sql .= " INNER JOIN khachhang ON binhluan.idnd = khachhang.idnd WHERE idsp=" . $idsp . "";
  return parent::pdo_query($sql);
 }

 function show_bl() {
  $sql = "SELECT * FROM binhluan";
  $sql .= " INNER JOIN khachhang ON binhluan.id = khachhang.id";
  $sql .= " INNER JOIN sanpham ON binhluan.idsp = sanpham.idsp";
  return parent::pdo_query($sql);
 }

 function insert_bl($idnd, $idsp, $noidung, $ngay) {
  $sql = "INSERT INTO binhluan VALUES(NULL,$idnd, $idsp,'$noidung','$ngay')";
  $data = parent::pdo_execute($sql);
  return $data;
 }

 function deletebl($id) {
  $sql = "DELETE FROM binhluan WHERE mabl = " . $id . ";";
  return parent::pdo_execute($sql, $id);
 }

 //Lấy tất cả phần tử sản phẩm từ
 function getList() {
  $sql = "select * from sanpham order by idsp desc";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 //Lấy phần tử sản phẩm từ from tới to
 function getListPage($from, $to) {
  $sql = "select * from sanpham order by idsp desc limit $from,$to";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 //Lấy sp theo idsp
 function getProductId($idsp) {
  $sql = "select * from sanpham where idsp=$idsp";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 //them san pham
 function insert($tensp, $hinhanh, $chitietngan, $soluong, $daban, $gia, $khuyenmai, $chitiet, $trangthai, $madm, $dungluong, $mausac, $mota) {
  $query = "insert into sanpham(tensp,hinhanh,chitietngan,soluong,daban,gia,khuyenmai,chitiet,trangthai,madm,dungluong,mausac,mota) ";
  $query .= "values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
  parent::pdo_execute($query, $tensp, $hinhanh, $chitietngan, $soluong, $daban, $gia, $khuyenmai, $chitiet, $trangthai, $madm, $dungluong, $mausac, $mota);
 }

 //cap nhat san pham
 function update($tensp, $hinhanh, $chitietngan, $soluong, $daban, $gia, $khuyenmai, $chitiet, $trangthai, $madm, $dungluong, $mausac, $mota, $idsp) {
  if ($hinhanh != "") {
   $query = "UPDATE sanpham SET tensp=?,hinhanh=?,chitietngan=?,soluong=?"
           . ",daban=?,gia=?,khuyenmai=?,chitiet=?,trangthai=?"
           . ",madm=?,dungluong=?,mausac=?,mota=? WHERE idsp=?";
   parent::pdo_execute($query, $tensp, $hinhanh, $chitietngan, $soluong, $daban, $gia, $khuyenmai, $chitiet, $trangthai, $madm, $dungluong, $mausac, $mota, $idsp);
  } else {
   $query = "UPDATE sanpham SET tensp=?,chitietngan=?,soluong=?"
           . ",daban=?,gia=?,khuyenmai=?,chitiet=?,trangthai=?"
           . ",madm=?,dungluong=?,mausac=?,mota=? WHERE idsp=?";
   parent::pdo_execute($query, $tensp, $chitietngan, $soluong, $daban, $gia, $khuyenmai, $chitiet, $trangthai, $madm, $dungluong, $mausac, $mota, $idsp);
  }
 }

 //Xóa sản phẩm
 function delete($idsp) {
  $query = "delete from sanpham where idsp=$idsp";
  parent::pdo_execute($query);
 }

//Check trùng lặp
 function checkduplicate($condition, $value) {
  $sql = "SELECT * FROM `sanpham` WHERE `$condition` = ?";
  $check = false;
  if (is_array(parent::pdo_query_one($sql, $value))) {
   $check = true;
  }
  return $check;
 }

}

?>
