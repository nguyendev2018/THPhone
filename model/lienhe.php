<?php 
    class Lienhe extends ThaoTac{
         
        function lienhe_insert($tennd,$email,$noidung)
        {
          $sql = "INSERT INTO hotro(tennd,email,noidung) VALUES ('$tennd','$email','$noidung')";          
          $stmt = parent::pdo_execute($sql);
          return $sql;
          
        } 
    }
?>