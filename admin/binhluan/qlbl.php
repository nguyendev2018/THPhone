<?php 
 $binhluan = new Binhluan();
 $dsbinhluan = $binhluan->getList();
?>
<div class="page-content">
   <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">           
               <h3 lass="card-title" >Danh sách bình luận </h3>
               <table class="table table-bordered table-striped text-center" id="dataTableExample">
                  <thead>
                     <tr>
                        <th>STT</th>
                        <th>ID người dùng</th>
                        <th>ID sản phẩm</th>
                        <th>Nội dung</th>
                        <th>Ngày</th> 
                        <th>&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($dsbinhluan as $bl) {
                     ?>
                      <tr>
                         <td><?php echo $i; ?></td>
                         <td><?php echo $bl['idnd']; ?></td>                                
                         <td><?php echo $bl['idsp']; ?></td>                                                                                 
                         <td><?php echo $bl['noidung']; ?></td>                                                                                 
                         <td><?php echo $bl['ngayBinhluan']; ?></td>                                                                                                                                                                                                                                              
                         <td><a href="<?php echo 'admin.php?act=qlbl&del=1&mabl=' . $bl['mabl']; ?>" class="btn btn-danger">Xóa</a></td>                         
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



 
