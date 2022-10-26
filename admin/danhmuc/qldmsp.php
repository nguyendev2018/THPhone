<?php
$dm = new danhmuc();
$dsdm = $dm->getCategory();
?>
<div class="page-content">
   <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <h3 class="card-title">Quản lý danh mục sản phẩm</h3>
               <?php
               if (isset($_GET['edit']) && ($_GET['edit']) == 1) {
                 $madm = $_GET['madm'];
                 $dm = new danhmuc();
                 $dmct = $dm->getCateById($madm);
                 ?>
                 <form action="admin.php?act=qldmsp" method="post" enctype="multipart/form-data" >
                    <div class="form-group col-md-6">
                       <div class="form-group">
                          <label for="exampleFormControlSelect1">Tiêu đề danh mục</label>
                          <input type="text" class="form-control" name="tendm" value="<?php echo $dmct[0]['tendm']; ?>" required="required">
                       </div>
                       <div class="form-group"  id="dequi">
                          <label for="exampleFormControlSelect1">Đệ qui</label>
                          <input type="number" class="form-control" min="0" name="dequi" required="required" value="<?php echo $dmct[0]['dequi']; ?>">
                       </div>
                       <div class="form-group">
                          <input type="submit" class="btn btn-danger" name="update" value="Cập nhật danh mục">
                          <input type="hidden" name="madm" value="<?= $_GET['madm'] ?>">
                       </div>
                    </div>
                 </form> 
               <?php } else { ?>
                 <form action="admin.php?act=qldmsp" method="post" enctype="multipart/form-data" >
                    <div class="form-group col-md-6">
                       <div class="form-group"  id="tendm">
                          <label for="exampleFormControlSelect1"> Tiêu đề danh mục</label>
                          <input type="text" class="form-control" name="tendm" required="required">
                       </div>
                       <div class="form-group"  id="dequi">
                          <label for="exampleFormControlSelect1"> Đệ qui</label>
                          <input type="number" class="form-control" min="0" name="dequi" required="required">
                       </div>
                       <div class="form-group">
                          <input type="submit" class="btn btn-danger" name="add" value="Thêm danh mục">                           
                       </div>
                    </div>
                 </form>
               <?php } ?>               
               <h3>Danh sách danh mục sản phẩm</h3>
               <table class="table table-striped table-bordered" id="dataTableExample">
                  <thead>
                     <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Đệ quy</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($dsdm as $dmsp) {
                      ?>
                       <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $dmsp['tendm']; ?></td>                                
                          <td><?php echo $dmsp['dequi']; ?></td>                                                                                 
                          <td><a href="<?php echo 'admin.php?act=qldmsp&edit=1&madm=' . $dmsp['madm']; ?>" class="btn btn-danger">Sửa</a></td>
                          <td><a href="<?php echo 'admin.php?act=qldmsp&del=1&madm=' . $dmsp['madm']; ?>" class="btn btn-danger">Xóa</a></td>  
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




