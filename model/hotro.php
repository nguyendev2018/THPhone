<?php
class Hotro extends ThaoTac{
 //Lấy danh sách hỗ trợ
 function getList() {
  $sql = "select * from hotro order by maht desc";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }
 //Xoá hỗ trợ
 function delete($maht) {
  $query = "delete from hotro where maht=$maht";
  parent::pdo_execute($query);
 }
 
}
?>

