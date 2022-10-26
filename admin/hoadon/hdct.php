<?php
if (isset($_GET['mahd']) && $_GET['mahd']) {
 $mahd = $_GET['mahd'];
}
$hoadon = new Hoadon();
$hoadonct = $hoadon->getBillById($mahd);
?>
<div class="page-content">
   <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">                  
                  <h3>Hóa Đơn Chi Tiết</h3>
                  <table class="table table-hover  table-bordered" id="dataTableExample">
                     <thead>
                        <tr>
                           <th>STT</th>
                           <th>Mã HD</th>
                           <th>Tên SP</th>
                           <th>Số lượng</th>                        
                           <th>Giá</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php
                       $i = 1;
                       foreach ($hoadonct as $ct) {
                        ?>
                         <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $ct['mahd']; ?></td>
                            <td><?php echo $ct['tensp']; ?></td>
                            <td><?php echo $ct['soluong']; ?></td>
                            <td><?php echo number_format($ct['gia']); ?></td>
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
