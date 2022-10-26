<?php 
    class Timkiem extends ThaoTac{
        function timkiemsanpham($timkiem){
            $sql = 'SELECT * FROM sanpham INNER JOIN danhmuc ON sanpham.madm=danhmuc.madm WHERE sanpham.tensp LIKE "%'.$timkiem.'%"';
        $stmt = parent::pdo_query($sql,$timkiem);
        return $stmt; 
        }
       
    }
?>

