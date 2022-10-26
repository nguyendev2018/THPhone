<?php
$banner = new Banner();
$dsbn = $banner->getList();
?>
<div class="page-content">
   <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <h3 class="card-title">Quản lý banner</h3>
               <?php
               if (isset($_GET['edit']) && ($_GET['edit']) == 1) {
                $id = $_GET['id'];
                $bnct = $banner->getBannerById($id);
                ?>
                <form action="admin.php?act=qlbn" method="post" enctype="multipart/form-data" >
                   <div class="row">
                      <div class="form-group col-md-6">
                         <div class="form-group">
                            <div class="custom-file">
                               <label class="custom-file-label" for="exampleFormControlFile1">Hình ảnh</label>
                               <input type="file" class="custom-file-input" name="img" >
                            </div>
                         </div>
                         <div class="form-group"  id="dequi">
                            <label for="exampleFormControlSelect1"> Trạng thái</label>
                            <input type="number" class="form-control" min="0" name="trangthai" required="required" value="<?=$bnct[0]['trangthai'];?>">
                         </div>
                         <div class="form-group">
                            <input type="submit" class="btn btn-danger" name="update" value="Cập nhật">
                            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                         </div>
                      </div>
                      <div class="form-group col-md-6">
                        <?php
                        if ($bnct[0]['img'] != "") {
                         echo '<img src="upload/banner/' . $bnct[0]['img'] . '" width="400px">';
                        }
                        ?>
                      </div>
                   </div>
                </form> 
               <?php } else { ?>
                <form action="admin.php?act=qlbn" method="post" enctype="multipart/form-data" >
                   <div class="row">
                      <div class="form-group col-md-6">
                         <div class="form-group">
                            <div class="custom-file">
                               <label class="custom-file-label" for="exampleFormControlFile1">Hình ảnh</label>
                               <input type="file" class="custom-file-input" name="img" required="required">
                            </div>
                         </div>
                         <div class="form-group"  id="dequi">
                            <label for="exampleFormControlSelect1"> Trạng thái</label>
                            <input type="number" class="form-control" min="0" name="trangthai" required="required">
                         </div>
                         <div class="form-group">
                            <input type="submit" class="btn btn-danger" name="add" value="Thêm banner">                           
                         </div>
                      </div>
                   </div>
                </form>
               <?php } ?>               
               <h3>Danh sách banner</h3>
               <table class="table table-striped table-bordered" id="dataTableExample">
                  <thead>
                     <tr>
                        <th>STT</th>
                        <th>Hình ảnh</th>
                        <th>Trạng thái</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($dsbn as $bn) {
                     ?>
                      <tr>
                         <td><?php echo $i; ?></td>
                         <td>
                            <img src="upload/banner/<?php echo $bn['img']; ?>" width="100px">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal<?= $i ?>">
                               Xem
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal<?= $i ?>">
                               <div class="modal-dialog modal-xl modal-dialog-centered">
                                  <div class="modal-content">
                                     <!-- Modal body -->
                                     <div class="modal-body align-self-center" >
                                        <img src="upload/banner/<?php echo $bn['img']; ?>">
                                     </div>
                                     <!-- Modal footer -->
                                     <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </td>                                
                         <td><?php echo $bn['trangthai']; ?></td>                                                                                 
                         <td><a href="<?php echo 'admin.php?act=qlbn&edit=1&id=' . $bn['id']; ?>" class="btn btn-danger">Sửa</a></td>
                         <td><a href="<?php echo 'admin.php?act=qlbn&del=1&id=' . $bn['id']; ?>" class="btn btn-danger">Xóa</a></td>  
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




