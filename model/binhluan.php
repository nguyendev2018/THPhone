<?php

class Binhluan extends ThaoTac {

 //Lay tat ca binh luan san pham
 function getList() {
  $sql = "select * from binhluan order by mabl desc";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }
 //Xoa binh luan
 function delete($mabl) {
  $query = "delete from binhluan where mabl=$mabl";
  parent::pdo_execute($query);
 }

}
?>

