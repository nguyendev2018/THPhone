<?php

class Hoadon extends ThaoTac {

 //Lấy danh sách hóa đơn
 function getList() {
  $select = "select * from hoadon order by mahd desc";
  $result = parent::pdo_query($select);
  return $result;
 }

//Lấy hóa đơn chi tiết
 function getBillById($mahd) {
  $select = "select * from chitiethoadon where mahd = $mahd";
  $result = parent::pdo_query($select);
  return $result;
 }

//Lay gia tung loai san pham, thu tinh nang ban do
 function getProductArray() {
  $select = "select idsp,gia from sanpham order by idsp desc";
  $result = parent::pdo_query($select);
  return $result;
 }

 //
 function getRevenueByYear($year) {
  $select = "SELECT SUM(gia) FROM chitiethoadon INNER JOIN hoadon ON chitiethoadon.mahd = hoadon.mahd WHERE YEAR(ngaydathang)=$year";
  $result = parent::pdo_query($select);
  return $result;
 }
//
 function getListByYear($year) {
  $select = "SELECT COUNT(*) FROM hoadon WHERE YEAR(ngaydathang)=$year";
  $result = parent::pdo_query($select);
  return $result;
 }
//
 function getNumOrderByMonth() {
  $select = "Select count(*) as soluong, DATE_FORMAT(ngaydathang,'%Y-%m') as thang FROM hoadon GROUP BY thang";
  $result = parent::pdo_query($select);
  return $result;
 }

}
?>

