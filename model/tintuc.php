<?php

class Tintuc extends ThaoTac {

 function getNewsPage($page) {
  global $soluong;
  $fr = ($page - 1) * $soluong;
  $to = $soluong;
  $sql = "SELECT * FROM tintuc LIMIT $fr,$to";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 function getNews() {
  $sql = "SELECT * FROM tintuc";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 function getNewstt($idtt) {
  $sql = "Select * from tintuc where idtt=$idtt ";
  $stmt = parent::pdo_query_one($sql, $idtt);
  return $stmt;
 }

 //show tintucmoi
 function showttmoi() {
  $sql = "SELECT * FROM tintuc order by idtt desc limit 4";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 function phantrang($page, $tongso) {
  global $soluong;
  $sotrang = ceil($tongso / $soluong);
  $phantrang = "";
  for ($i = 0; $i < $sotrang; $i++) {
   if ($page == ($i + 1)) {
    $cls = 'class="active"';
   } else {
    $cls = '';
   }
   $link = "index.php?act=blog&page=" . ($i + 1);
   $phantrang .= '<li ' . $cls . '  ><a  class="active" href="' . $link . '">' . ($i + 1) . '</a></li>';
  }
  return $phantrang;
 }

//Lấy hết tin tức
 function getList() {
  $sql = "SELECT * FROM tintuc order by idtt desc";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

//Láy tin tức theo id
 function getNewsById($idtt) {
  $sql = "select * from tintuc where idtt=$idtt";
  $stmt = parent::pdo_query($sql);
  return $stmt;
 }

 //them tin tức
 function insert($content, $img, $title, $content_ttct, $ngaydang) {
  $query = "insert into tintuc(content,img,title,content_ttct,ngaydang) ";
  $query .= "values(?,?,?,?,?)";
  parent::pdo_execute($query, $content, $img, $title, $content_ttct, $ngaydang);
 }

 //cap nhat san pham
 function update($content, $img, $title, $content_ttct, $ngaydang, $idtt) {
  if ($img != "") {
   $query = "UPDATE tintuc SET content=?,img=?,title=?,content_ttct=?,ngaydang=? WHERE idtt=?";
   parent::pdo_execute($query, $content, $img, $title, $content_ttct, $ngaydang, $idtt);
  } else {
   $query = "UPDATE tintuc SET content=?,title=?,content_ttct=?,ngaydang=? WHERE idtt=?";
   parent::pdo_execute($query, $content, $title, $content_ttct, $ngaydang, $idtt);
  }
 }

 //Xóa sản phẩm
 function delete($idtt) {
  $query = "delete from tintuc where idtt=$idtt";
  parent::pdo_execute($query);
 }

//Check trùng lặp
 function checkduplicate($condition, $value) {
  $sql = "SELECT * FROM `tintuc` WHERE `$condition` = ?";
  $check = false;
  if (is_array(parent::pdo_query_one($sql, $value))) {
   $check = true;
  }
  return $check;
 }

}

?>
