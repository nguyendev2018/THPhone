  <?php
  class Showdm extends ThaoTac
  { 
    function ShowWithDm($madm)
    {
      $sql = "SELECT * FROM sanpham INNER JOIN danhmuc ON sanpham.madm=danhmuc.madm WHERE sanpham.madm=$madm";
      
      $stmt = parent::pdo_query($sql);
      return $stmt;
    }
    function ShowWithCategory($dequi)
    {
      $sql = "SELECT * FROM sanpham INNER JOIN danhmuc ON sanpham.madm=danhmuc.madm WHERE danhmuc.dequi=$dequi";
      $stmt = parent::pdo_query($sql);
      return $stmt;
    }
    function ShowWithDungluong($dungluong)
    {
      $sql = "SELECT * FROM sanpham INNER JOIN danhmuc ON sanpham.madm=danhmuc.madm WHERE sanpham.dungluong='$dungluong'";
      $stmt = parent::pdo_query($sql);
      return $stmt;
    }
    function ShowWithMausac($mausac)
    {
      $sql = "SELECT * FROM sanpham INNER JOIN danhmuc ON sanpham.madm=danhmuc.madm WHERE sanpham.mausac='$mausac'";
    
      $stmt = parent::pdo_query($sql);
      return $stmt;
    }
  }
?>