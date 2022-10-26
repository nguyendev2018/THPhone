<?php
$tintuc = new Tintuc();
$dstintuc = $tintuc->getList();
?>
<div class="page-content">
   <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <h3 class="card-title">Quản lý tin tức</h3>
               <?php
               if (isset($_GET['edit']) && ($_GET['edit']) == 1) {
                $idtt = $_GET['idtt'];
                $tintuc_chitiet = $tintuc->getNewsById($idtt);
                ?>
                <form action="admin.php?act=qltt" method="post" enctype="multipart/form-data" >
                   <div class="row">
                      <div class="form-group col-md-4">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Tiêu đề<span>*</span></label>
                            <input type="text" class="form-control" name="title" required="required" value="<?php echo $tintuc_chitiet[0]['title']; ?>">
                         </div>
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Mô tả<span>*</span></label>
                            <textarea class="form-control" id="mota" rows="6" name="content" required="required"><?php echo $tintuc_chitiet[0]['content']; ?></textarea>
                         </div>
                         <div class="form-group">
                            <div class="custom-file">
                               <label class="custom-file-label" for="exampleFormControlFile1">Hình ảnh<span>*</span></label>
                               <input type="file" class="custom-file-input" name="img" >
                            </div>
                         </div>
                         <?php
                         if ($tintuc_chitiet[0]['img'] != "") {
                          echo '<img src="upload/tintuc/' . $tintuc_chitiet[0]['img'] . '" width="80px">';
                         }
                         ?>
                      </div>
                      <div class="form-group col-md-8">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Nội dung</label>
                            <textarea class="form-control" id="mota" rows="3" name="content_ttct"><?php echo $tintuc_chitiet[0]['content_ttct']; ?></textarea>
                            <script>
                             CKEDITOR.replace('content_ttct',
                                     {
                                       filebrowserBrowseUrl: 'admin/ckfinder/ckfinder.html',
                                       filebrowserImageBrowseUrl: 'admin/ckfinder/ckfinder.html?type=Images',
                                       filebrowserFlashBrowseUrl: 'admin/ckfinder/ckfinder.html?type=Flash',
                                       filebrowserUploadUrl: 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                       filebrowserImageUploadUrl: 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                       filebrowserFlashUploadUrl: 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                     });
                            </script>  
                         </div>
                      </div>
                   </div>
                   <input type="submit" class="btn btn-danger" name="update" value="Cập nhật tin tức">
                   <input type="hidden" name="idtt" value="<?=$_GET['idtt'] ?>">              
                </form>
               <?php } else { ?>                
                <form action="admin.php?act=qltt" method="post" enctype="multipart/form-data" >
                   <div class="row">
                      <div class="form-group col-md-4">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Tiêu đề<span>*</span></label>
                            <input type="text" class="form-control" name="title" required="required">
                         </div>
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Mô tả<span>*</span></label>
                            <textarea class="form-control" id="mota" rows="6" name="content" required="required"></textarea>
                         </div>
                         <div class="form-group">
                            <div class="custom-file">
                               <label class="custom-file-label" for="exampleFormControlFile1">Hình ảnh<span>*</span></label>
                               <input type="file" class="custom-file-input" name="img" required="required">
                            </div>
                         </div>
                      </div>
                      <div class="form-group col-md-8">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Nội dung</label>
                            <textarea class="form-control" id="mota" rows="3" name="content_ttct"></textarea>
                            <script>
                             CKEDITOR.replace('content_ttct',
                                     {
                                       filebrowserBrowseUrl: 'admin/ckfinder/ckfinder.html',
                                       filebrowserImageBrowseUrl: 'admin/ckfinder/ckfinder.html?type=Images',
                                       filebrowserFlashBrowseUrl: 'admin/ckfinder/ckfinder.html?type=Flash',
                                       filebrowserUploadUrl: 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                       filebrowserImageUploadUrl: 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                       filebrowserFlashUploadUrl: 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                     });
                            </script>  
                         </div>
                      </div>
                   </div>
                   <input type="submit" class="btn btn-danger" name="add" value="Thêm tin tức">
                </form>
               <?php } ?>
               <br>      
            </div>
            <div class="card-body">
               <h3>Danh sách tin tức</h3>
               <table class="table table-bordered table-striped table-sm" id="dataTableExample">
                  <thead>
                     <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Mô tả</th>
                        <th>Hình ảnh</th>                        

                        <th>Ngày đăng</th>                                       
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
                    $stt = 1;
                    foreach ($dstintuc as $tintuc) {
                     ?>
                      <tr>
                         <td><?php echo $stt; ?></td>
                         <td><?php echo $tintuc['title']; ?></td>
                         <td><?php echo mb_strimwidth($tintuc['content'], 0, 10, "..."); ?></td>                 
                         <td><img src="upload/tintuc/<?php echo $tintuc['img']; ?>" width="40px"></td>
                         <td><?php echo date('d/m/y', strtotime($tintuc['ngaydang'])); ?></td>
                         <td><a href="<?php echo 'admin.php?act=qltt&edit=1&idtt=' . $tintuc['idtt']; ?>" class="btn btn-danger">Sửa</a></td>
                         <td><a href="<?php echo 'admin.php?act=qltt&del=1&idtt=' . $tintuc['idtt']; ?>" class="btn btn-danger">Xóa</a></td>
                      </tr>
                      <?php
                      $stt++;
                     }
                     ?>
                  </tbody>

               </table>
            </div>
         </div>
      </div>
   </div>
</div>



