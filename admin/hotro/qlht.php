<?php
$hotro = new Hotro();
$dsht = $hotro->getList();
?>

<div class="page-content">
   <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <h3 class="card-title">Danh sách hỗ trợ</h3>                                           
               <table class="table table-striped table-bordered" id="dataTableExample">
                  <thead>
                     <tr>
                        <th>STT</th>
                        <th>Tên người dùng</th>
                        <th>Email</th>
                        <th>Nội dung</th>                       
                        <th>&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($dsht as $ht) {
                     ?>
                      <tr>
                         <td><?php echo $i; ?></td>
                         <td><?php echo $ht['tennd']; ?></td>                                
                         <td><?php echo $ht['email']; ?></td>                                                                                 
                         <td><?php echo $ht['noidung']; ?></td>                                                                                                                                                                                         
                         <td><a href="<?php echo 'admin.php?act=qlht&del=1&maht=' . $ht['maht']; ?>" class="btn btn-danger">Xóa</a></td>                         
                      </tr>
                      <?php
                      $i++;
                     }
                     ?> 
                  </tbody>        
               </table>
            </div>
         </div>
      </div>
   </div>  
</div>

