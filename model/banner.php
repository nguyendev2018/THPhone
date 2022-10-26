<?php

class Banner extends ThaoTac {

 //Lấy danh sách banner
 function getList() {
  $select = "select * from banner order by id desc";
  $result = parent::pdo_query($select);
  return $result;
 }


//Thêm banner
 function insert($img, $trangthai) {
  $sql = "insert into banner(img,trangthai) values(?,?)";
  parent::pdo_execute($sql,$img, $trangthai);
 }

 //Update banner
 function update($img, $trangthai, $id) {
  if ($img != "") {
   $sql = "Update banner set img=?,trangthai=? where id=?";
   parent::pdo_execute($sql,$img, $trangthai, $id);
  } else {
   $sql = "Update banner set trangthai=? where id=?";
   parent::pdo_execute($sql, $trangthai, $id);
  }
 }

 //Xóa banner
 function delete($id) {
  $sql = "delete from banner where id=" . $id;
  parent::pdo_execute($sql);
 }

}

?>
