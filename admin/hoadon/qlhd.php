<?php
$hoadon = new Hoadon();
$dshoadon = $hoadon->getList();
?>
<div class="page-content">
   <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <h3>Danh sách hóa đơn</h3>
               <table class="table table-hover table-bordered table-sm" id="dataTableExample">
                  <thead>
                     <tr>
                        <th>STT</th>
                        <th>Mã HD</th>
                        <th>ID User</th>
                        <th>Họ tên</th>
                        <th>Địa chỉ</th>                        
                        <th>Điện thoại</th>
                        <th>Email</th>                       
                        <th>Ngày đặt hàng</th>                       
                        <th>Action</th>                       
                     </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($dshoadon as $hoadon) {
                     ?>
                      <tr>
                         <td><?php echo $i; ?></td>
                         <td><?php echo $hoadon['mahd']; ?></td>
                         <td><?php echo $hoadon['idnd']; ?></td>                 
                         <td><?php echo $hoadon['hoten']; ?></td>
                         <td><?php echo $hoadon['diachi']; ?></td>
                         <td><?php echo $hoadon['dienthoai']; ?></td>
                         <td><?php echo $hoadon['email']; ?></td>                       
                         <td><?php echo date('d/m/Y', strtotime($hoadon['ngaydathang'])); ?></td>                                                                   
                         <td><a href="admin.php?act=hdct&&mahd=<?php echo $hoadon['mahd']; ?>" class="btn btn-danger">Xem chi tiết</a></td>
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
