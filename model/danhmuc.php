<?php

class danhmuc extends ThaoTac {

 //Lấy tất cả danh mục sản phẩm
 function getCategory() {
  $sql = "SELECT * FROM danhmuc order by madm desc";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 //Lấy thông tin danh mục chi tiết theo madm
 function getCateById($madm) {
  $sql = "select * from danhmuc where madm=$madm";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

//
 function insert($tendm, $dequi) {
  $sql = "insert into danhmuc(tendm,dequi) values('$tendm',$dequi)";
  parent::pdo_execute($sql);
 }

 //Update danh muc
 function update($madm, $tendm, $dequi) {
  $sql = "Update danhmuc set tendm='{$tendm}',dequi=$dequi where madm=" . $madm;
  parent::pdo_execute($sql);
 }

 //Xóa sản phẩm
 function delete($madm) {
  $sql = "delete from danhmuc where madm=" . $madm;
  parent::pdo_execute($sql);
 }
//Check trùng lặp
 function checkduplicate($condition, $value) {
  $sql = "SELECT * FROM `danhmuc` WHERE `$condition` = ?";
  $check = false;
  if (is_array(parent::pdo_query_one($sql, $value))) {
   $check = true;
  }
  return $check;
 }

}

?>